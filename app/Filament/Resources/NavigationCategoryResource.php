<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NavigationCategoryResource\Pages;
use App\Models\NavigationCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class NavigationCategoryResource extends Resource
{
    protected static ?string $model = NavigationCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-bars-3';
    protected static ?string $navigationGroup = 'Navigasi Website';
    protected static ?string $navigationLabel = 'Kategori Menu';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                if ($operation === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(NavigationCategory::class, 'slug', ignoreRecord: true),

                        Forms\Components\TextInput::make('route')
                            ->label('Route')
                            ->helperText('Isi jika kategori ini memiliki link tersendiri (opsional)')
                            ->maxLength(255),

                        Forms\Components\Toggle::make('has_dropdown')
                            ->label('Memiliki Dropdown')
                            ->required(),

                        Forms\Components\TextInput::make('order')
                            ->label('Urutan')
                            ->integer()
                            ->default(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true)
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),

                Tables\Columns\IconColumn::make('has_dropdown')
                    ->label('Dropdown')
                    ->boolean(),

                Tables\Columns\TextColumn::make('route')
                    ->label('Route')
                    ->searchable(),

                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status')
                    ->placeholder('Semua')
                    ->trueLabel('Aktif')
                    ->falseLabel('Tidak Aktif'),

                Tables\Filters\TernaryFilter::make('has_dropdown')
                    ->label('Dropdown')
                    ->placeholder('Semua')
                    ->trueLabel('Dengan Dropdown')
                    ->falseLabel('Tanpa Dropdown'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('order');
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
            'index' => Pages\ListNavigationCategories::route('/'),
            'create' => Pages\CreateNavigationCategory::route('/create'),
            'edit' => Pages\EditNavigationCategory::route('/{record}/edit'),
        ];
    }
}
