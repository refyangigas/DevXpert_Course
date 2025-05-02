<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContactsStatsWidget extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Pesan', Contact::count())
                ->description('Semua pesan kontak')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('primary'),

            Stat::make('Belum Dibaca', Contact::where('is_read', false)->count())
                ->description('Pesan yang belum dibaca')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('danger'),

            Stat::make('Pesan Baru Hari Ini', Contact::whereDate('created_at', now()->toDateString())->count())
                ->description('Diterima hari ini')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('success'),
        ];
    }
}
