<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Set;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Blog Management';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Basic Information')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')
                                    ->required()
                                    ->unique(),
                                TextInput::make('description'),
                            ]),

                        FileUpload::make('featured_image')
                            ->directory('images/articles')
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->required(),

                        TextInput::make('excerpt')
                            ->label('Short Description')
                            ->helperText('A brief summary of the article')
                            ->nullable(),
                    ])
                    ->columns(2),

                Section::make('Content')
                    ->schema([
                        RichEditor::make('content')
                            ->required()
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('images/articles/content')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'undo',
                            ]),
                    ]),

                Section::make('Article Metadata')
                    ->schema([
                        TextInput::make('author_name')
                            ->default('Admin')
                            ->required(),

                        FileUpload::make('author_image')
                            ->directory('images/authors')
                            ->visibility('public')
                            ->image()
                            ->default('images/author.jpg')
                            ->nullable(),

                        TextInput::make('author_title')
                            ->default('Web Designer & Content Creator')
                            ->nullable(),

                        TextInput::make('reading_time')
                            ->numeric()
                            ->default(5)
                            ->suffix('menit')
                            ->required(),

                        DateTimePicker::make('published_at')
                            ->nullable()
                            ->label('Publication Date & Time')
                            ->helperText('Leave empty to save as draft'),

                        Toggle::make('featured')
                            ->label('Feature this article')
                            ->helperText('Featured articles appear on the homepage and top of article lists')
                            ->default(false),

                        Select::make('tags')
                            ->relationship('tags', 'name')
                            ->multiple()
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')
                                    ->required()
                                    ->unique(),
                            ]),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    ->circular()
                    ->toggleable(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                TextColumn::make('category.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                IconColumn::make('featured')
                    ->boolean()
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('reading_time')
                    ->suffix(' menit')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('views')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('category')
                    ->relationship('category', 'name')
                    ->preload()
                    ->searchable(),

                TernaryFilter::make('published')
                    ->label('Publication Status')
                    ->placeholder('All Articles')
                    ->trueLabel('Published Articles')
                    ->falseLabel('Draft Articles')
                    ->queries(
                        true: fn($query) => $query->whereNotNull('published_at')->where('published_at', '<=', now()),
                        false: fn($query) => $query->whereNull('published_at')->orWhere('published_at', '>', now()),
                    ),

                TernaryFilter::make('featured')
                    ->label('Featured Status')
                    ->trueLabel('Featured')
                    ->falseLabel('Not Featured'),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
