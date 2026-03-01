<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class AccountBanner extends Widget
{
    protected static string $view = 'filament.widgets.account-banner';

    protected int | string | array $columnSpan = [
        'default' => 'full',
        'sm' => 'full',
        'md' => 'full',
        'lg' => 'full',
        'xl' => 'full',
        '2xl' => 'full',
    ];
    protected static ?int $sort = -1; // Show at top
}
