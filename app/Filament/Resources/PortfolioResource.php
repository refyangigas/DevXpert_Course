<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Karya Siswa';
    protected static ?string $navigationGroup = 'Konten';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Informasi Karya')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Judul Karya')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) =>
                                        $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(Portfolio::class, 'slug', ignoreRecord: true),

                                Forms\Components\Select::make('category')
                                    ->label('Kategori')
                                    ->options([
                                        'web-design' => 'Web Design',
                                        'graphic-design' => 'Desain Grafis',
                                        'ui-ux' => 'UI/UX',
                                        'mobile-app' => 'Mobile App',
                                        'video' => 'Video & Animasi',
                                    ])
                                    ->required(),

                                Forms\Components\Textarea::make('description')
                                    ->label('Deskripsi Singkat')
                                    ->rows(3)
                                    ->maxLength(255),

                                Forms\Components\RichEditor::make('details')
                                    ->label('Detail Project')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsDirectory('attachments')
                                    ->columnSpanFull(),
                            ]),

                        Forms\Components\Section::make('Informasi Siswa')
                            ->schema([
                                Forms\Components\TextInput::make('student_name')
                                    ->label('Nama Siswa')
                                    ->required(),

                                Forms\Components\TextInput::make('batch')
                                    ->label('Angkatan')
                                    ->numeric(),

                                Forms\Components\TagsInput::make('technologies')
                                    ->label('Teknologi yang Digunakan'),

                                Forms\Components\TextInput::make('demo_link')
                                    ->label('Link Demo Project')
                                    ->url()
                                    ->prefix('https://')
                                    ->suffixIcon('heroicon-m-globe-alt'),
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Gambar')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('Gambar Karya')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('portfolios')
                                    ->required(),
                            ]),

                        Forms\Components\Section::make('Pengaturan')
                            ->schema([
                                Forms\Components\Toggle::make('is_featured')
                                    ->label('Tampilkan di Halaman Utama')
                                    ->default(false),

                                Forms\Components\TextInput::make('order')
                                    ->label('Urutan')
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Angka yang lebih kecil ditampilkan lebih dulu'),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul Karya')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('student_name')
                    ->label('Nama Siswa')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'web-design' => 'Web Design',
                        'graphic-design' => 'Desain Grafis',
                        'ui-ux' => 'UI/UX',
                        'mobile-app' => 'Mobile App',
                        'video' => 'Video & Animasi',
                        default => $state,
                    })
                    ->colors([
                        'primary' => 'web-design',
                        'success' => 'graphic-design',
                        'danger' => 'ui-ux',
                        'warning' => 'mobile-app',
                        'info' => 'video',
                    ]),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean(),

                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'web-design' => 'Web Design',
                        'graphic-design' => 'Desain Grafis',
                        'ui-ux' => 'UI/UX',
                        'mobile-app' => 'Mobile App',
                        'video' => 'Video & Animasi',
                    ]),

                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Featured'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('order', 'asc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
