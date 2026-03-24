<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TroupeResource\Pages;
use App\Models\Troupe;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TroupeResource extends Resource
{
    protected static ?string $model = Troupe::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Troupes';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Rising Stars'),

                Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        'Performance Troupe' => 'Performance Troupe',
                        'Rising Stars'       => 'Rising Stars (ages 5–8)',
                        'Junior Troupe'      => 'Junior Troupe',
                        'Teen Troupe'        => 'Teen Troupe',
                        'Adult Troupe'       => 'Adult Troupe',
                        'Specialty'          => 'Specialty Group',
                    ])
                    ->native(false)
                    ->helperText('The category or level of this troupe.'),

                Forms\Components\Textarea::make('description')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull()
                    ->helperText('Description shown on the public Troupes page.'),

                Forms\Components\Textarea::make('requirements')
                    ->label('Requirements / How to Join')
                    ->rows(3)
                    ->columnSpanFull()
                    ->placeholder('e.g., Audition required. Ages 9–16. Must be enrolled in at least one OBCT class.')
                    ->helperText('Optional. Shown to parents who want to know how their child can join.'),

                CuratorPicker::make('image')
                    ->label('Troupe Photo')
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
                    ->helperText('Turn off to hide this troupe without deleting it.')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Photo'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->label('Live')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
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
            'index'  => Pages\ListTroupes::route('/'),
            'create' => Pages\CreateTroupe::route('/create'),
            'edit'   => Pages\EditTroupe::route('/{record}/edit'),
        ];
    }
}
