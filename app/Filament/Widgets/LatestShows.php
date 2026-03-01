<?php

namespace App\Filament\Widgets;

use App\Models\Show;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestShows extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Show::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\ImageColumn::make('show_image')
                    ->label('Image')
                    ->disk('do')
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'danger' => 'past',
                        'warning' => 'upcoming',
                        'success' => 'current',
                    ]),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ticket_price')
                    ->money('usd'),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->url(fn (Show $record): string => route('filament.admin.resources.shows.edit', $record))
                    ->icon('heroicon-m-pencil'),
            ]);
    }
}
