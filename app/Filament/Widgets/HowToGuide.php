<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class HowToGuide extends Widget
{
    protected static string $view = 'filament.widgets.how-to-guide';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 99;
}
