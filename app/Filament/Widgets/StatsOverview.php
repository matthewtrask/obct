<?php

namespace App\Filament\Widgets;

use App\Models\Show;
use App\Models\Classes;
use App\Models\Teacher;
use App\Models\Announcement;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Current Show', Show::where('status', 'current')->count())
                ->description('Active shows running')
                ->descriptionIcon('heroicon-m-ticket')
                ->color('success'),

            Stat::make('Active Classes', Classes::where('active', true)->count())
                ->description('Classes available')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('warning'),

            Stat::make('Teachers', Teacher::where('active', true)->count())
                ->description('Teaching staff')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('info'),

            Stat::make('Active Announcements', Announcement::where('active', true)->count())
                ->description('Published announcements')
                ->descriptionIcon('heroicon-m-megaphone')
                ->color('primary'),
        ];
    }
}
