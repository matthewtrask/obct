<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowResource\Pages;
use App\Filament\Resources\ShowResource\RelationManagers;
use App\Models\Show;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShowResource extends Resource
{
    protected static ?string $model = Show::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Show Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('teaser')
                            ->label('Teaser (short tagline)')
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull(),
                    ])
                    ->columns(1),

                Section::make('Show Image')
                    ->schema([
                        CuratorPicker::make('show_image')
                            ->label('Show Image')
                            ->buttonLabel('Select or Upload Image')
                            ->nullable()
                            ->columnSpanFull()
                            ->afterStateHydrated(function (CuratorPicker $component, $state) {
                                if ($state && ! is_numeric($state)) {
                                    $component->state(Media::where('path', $state)->first()?->id);
                                }
                            })
                            ->dehydrateStateUsing(function ($state) {
                                if (is_array($state)) {
                                    $first = reset($state);
                                    return is_array($first) ? ($first['path'] ?? null) : null;
                                }
                                return is_numeric($state) ? Media::find($state)?->path : $state;
                            }),
                    ])
                    ->columns(1),

                Section::make('Status & Tickets')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->required()
                            ->options([
                                'upcoming' => 'Upcoming',
                                'current' => 'Current',
                                'past' => 'Past',
                            ])
                            ->default('upcoming'),

                        Forms\Components\TextInput::make('ticket_price')
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01),

                        Forms\Components\TextInput::make('ticket_url')
                            ->label('Ticket URL')
                            ->url()
                            ->maxLength(500),
                    ])
                    ->columns(3),

                Section::make('Dates')
                    ->schema([
                        Forms\Components\DatePicker::make('start_date')
                            ->label('Start Date'),

                        Forms\Components\DatePicker::make('end_date')
                            ->label('End Date'),

                        Forms\Components\DatePicker::make('audition_date')
                            ->label('Audition Date'),
                    ])
                    ->columns(3),

                Section::make('Audition Information')
                    ->schema([
                        Forms\Components\Textarea::make('audition_info')
                            ->label('Audition Info')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(1)
                    ->collapsible(),

                Section::make('Performance Times')
                    ->schema([
                        Forms\Components\Repeater::make('performance_times')
                            ->label('Show Times')
                            ->simple(
                                Forms\Components\TextInput::make('time')
                                    ->placeholder('e.g., Friday 7:00 PM')
                            )
                            ->columnSpanFull()
                            ->defaultItems(0)
                            ->addActionLabel('Add Show Time'),
                    ])
                    ->columns(1)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teaser')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\ImageColumn::make('show_image'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('ticket_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ticket_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('audition_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListShows::route('/'),
            'create' => Pages\CreateShow::route('/create'),
            'edit' => Pages\EditShow::route('/{record}/edit'),
        ];
    }
}
