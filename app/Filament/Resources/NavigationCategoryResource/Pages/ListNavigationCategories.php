<?php

namespace App\Filament\Resources\NavigationCategoryResource\Pages;

use App\Filament\Resources\NavigationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNavigationCategories extends ListRecords
{
    protected static string $resource = NavigationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
