<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowResource\Pages;
use App\Models\Show;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ShowResource extends Resource
{
    protected static ?string $model = Show::class;
    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Shows & Performances';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Show Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->placeholder('e.g., Peter Pan Jr'),

                        Forms\Components\TextInput::make('teaser')
                            ->label('Tagline')
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->placeholder('e.g., Summer 2026')
                            ->helperText('A short one-line description shown on show cards.'),

                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull()
                            ->helperText('Full description shown on the Shows page.'),
                    ])
                    ->columns(1),

                Section::make('Show Image')
                    ->schema([
                        CuratorPicker::make('show_image')
                            ->label('Show Image')
                            ->buttonLabel('Select or Upload Image')
                            ->nullable()
                            ->columnSpanFull()
                            ->helperText('The image displayed on the homepage and shows page.')
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
                    ->description('Control whether this show appears as upcoming, currently running, or past.')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->required()
                            ->options([
                                'upcoming' => 'Upcoming — not yet open',
                                'current'  => 'Current — showing now',
                                'past'     => 'Past — show has closed',
                            ])
                            ->default('upcoming')
                            ->native(false),

                        Forms\Components\TextInput::make('ticket_price')
                            ->label('Production Fee ($)')
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01)
                            ->helperText('Cost for cast members to participate.'),

                        Forms\Components\TextInput::make('ticket_url')
                            ->label('Ticket Purchase Link')
                            ->url()
                            ->maxLength(500)
                            ->placeholder('https://obct.yapsody.com/...')
                            ->helperText('Paste the Yapsody ticket link when tickets go on sale.'),
                    ])
                    ->columns(3),

                Section::make('Dates')
                    ->schema([
                        Forms\Components\DatePicker::make('start_date')
                            ->label('First Show Date'),

                        Forms\Components\DatePicker::make('end_date')
                            ->label('Last Show Date'),

                        Forms\Components\DatePicker::make('audition_date')
                            ->label('Audition Date')
                            ->helperText('First audition date.'),
                    ])
                    ->columns(3),

                Section::make('Audition Information')
                    ->description('This text appears on the Shows page under the show listing.')
                    ->schema([
                        Forms\Components\Textarea::make('audition_info')
                            ->label('Audition Details')
                            ->rows(5)
                            ->columnSpanFull()
                            ->placeholder("e.g., Auditions for ages 8-17. Dates: May 11 (6:00-7:30pm), May 16 (1:00-3:00pm), May 18 (6:00-7:30pm). Prepare 30 seconds of a song. Production fee: $275 if cast. Call 770-664-2410 to schedule."),
                    ])
                    ->columns(1)
                    ->collapsible(),

                Section::make('Performance Times')
                    ->description('List each show time separately. These appear on the Shows page.')
                    ->schema([
                        Forms\Components\Repeater::make('performance_times')
                            ->label('Show Times')
                            ->simple(
                                Forms\Components\TextInput::make('time')
                                    ->placeholder('e.g., Friday July 31 at 7:00 PM')
                            )
                            ->columnSpanFull()
                            ->defaultItems(0)
                            ->addActionLabel('Add a Show Time'),
                    ])
                    ->columns(1)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('start_date', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('show_image')
                    ->label('Image'),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'success' => 'current',
                        'warning' => 'upcoming',
                        'secondary' => 'past',
                    ]),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Opens')
                    ->date('M j, Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('Closes')
                    ->date('M j, Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array { return []; }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListShows::route('/'),
            'create' => Pages\CreateShow::route('/create'),
            'edit'   => Pages\EditShow::route('/{record}/edit'),
        ];
    }
}
