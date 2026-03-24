<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassesResource\Pages;
use App\Models\Classes;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ClassesResource extends Resource
{
    protected static ?string $model = Classes::class;
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Classes & Camps';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Class Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., Disney BIGGEST Broadway Musical Revue – Session 1')
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull()
                            ->helperText('Full description shown on the Classes page.'),

                        Forms\Components\Select::make('session_type')
                            ->required()
                            ->label('Type')
                            ->options([
                                'year-round' => 'Year-Round Class',
                                'summer'     => 'Summer Camp',
                                'workshop'   => 'Workshop',
                            ])
                            ->default('summer')
                            ->native(false),

                        Forms\Components\TextInput::make('age_range')
                            ->label('Age Range')
                            ->maxLength(255)
                            ->placeholder('e.g., 9-17'),

                        Forms\Components\TextInput::make('price')
                            ->label('Cost')
                            ->numeric()
                            ->prefix('$')
                            ->placeholder('e.g., 250'),

                        Forms\Components\TextInput::make('capacity')
                            ->label('Max Students')
                            ->numeric()
                            ->placeholder('e.g., 20')
                            ->helperText('Leave blank if there is no cap.'),
                    ])
                    ->columns(2),

                Section::make('Schedule')
                    ->schema([
                        Forms\Components\TextInput::make('schedule')
                            ->label('Schedule / Times')
                            ->maxLength(255)
                            ->placeholder('e.g., June 22–26 | 10:00am – 2:00pm')
                            ->columnSpanFull(),

                        Forms\Components\DatePicker::make('start_date')
                            ->label('Start Date'),

                        Forms\Components\DatePicker::make('end_date')
                            ->label('End Date'),
                    ])
                    ->columns(2),

                Section::make('Registration')
                    ->schema([
                        Forms\Components\TextInput::make('signup_url')
                            ->label('Registration Link (JackRabbit)')
                            ->url()
                            ->placeholder('https://app.jackrabbitclass.com/regv2.asp?id=...')
                            ->helperText('Paste the JackRabbit signup link. A "Register Now" button will appear on the public page.')
                            ->maxLength(500)
                            ->columnSpanFull(),
                    ]),

                Section::make('Image & Display')
                    ->schema([
                        CuratorPicker::make('image')
                            ->label('Class Image')
                            ->buttonLabel('Select or Upload Image')
                            ->nullable()
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

                        Forms\Components\Toggle::make('active')
                            ->label('Show on website')
                            ->helperText('Turn off to hide this class without deleting it.')
                            ->default(true),

                        Forms\Components\TextInput::make('order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first. Use 0, 1, 2, 3… to control the order.'),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('start_date', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('age_range')
                    ->label('Ages')
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('session_type')
                    ->label('Type')
                    ->colors([
                        'success' => 'year-round',
                        'warning' => 'summer',
                        'primary' => 'workshop',
                    ])
                    ->formatStateUsing(fn ($state) => match($state) {
                        'year-round' => 'Year-Round',
                        'summer'     => 'Summer Camp',
                        'workshop'   => 'Workshop',
                        default      => $state,
                    }),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Starts')
                    ->date('M j, Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('USD')
                    ->sortable(),
                Tables\Columns\IconColumn::make('active')
                    ->label('Live')
                    ->boolean(),
                Tables\Columns\IconColumn::make('signup_url')
                    ->label('Reg. Link')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('gray')
                    ->getStateUsing(fn ($record) => (bool) $record->signup_url),
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
            'index'  => Pages\ListClasses::route('/'),
            'create' => Pages\CreateClasses::route('/create'),
            'edit'   => Pages\EditClasses::route('/{record}/edit'),
        ];
    }
}
