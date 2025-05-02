<?php

namespace App\Filament\Resources\NavigationCategoryResource\Pages;

use App\Filament\Resources\NavigationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNavigationCategory extends EditRecord
{
    protected static string $resource = NavigationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
