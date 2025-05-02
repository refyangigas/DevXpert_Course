<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Resources\Pages\ViewRecord;
use App\Models\Contact;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function mount(int | string $record): void
    {
        parent::mount($record);

        // Mark as read when viewed
        if (!$this->record->is_read) {
            $this->record->update(['is_read' => true]);
        }
    }
}
