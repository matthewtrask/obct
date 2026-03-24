<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use App\Models\Show;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Photo Galleries';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Peter Pan Jr – Show Weekend Photos'),

                Forms\Components\DatePicker::make('event_date')
                    ->label('Event Date')
                    ->helperText('The date of the event or show this gallery is from.'),

                Forms\Components\Select::make('show_id')
                    ->label('Associated Show (optional)')
                    ->options(Show::orderBy('title')->pluck('title', 'id'))
                    ->searchable()
                    ->nullable()
                    ->helperText('Link this gallery to a specific show if applicable.'),

                Forms\Components\Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull()
                    ->placeholder('Optional short description of this gallery.')
                    ->helperText('Optional.'),

                CuratorPicker::make('cover_image')
                    ->label('Cover Photo')
                    ->buttonLabel('Select or Upload Cover Photo')
                    ->nullable()
                    ->helperText('The thumbnail shown on the Galleries page.')
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
                    ->helperText('Turn off to hide without deleting.')
                    ->default(true),

                Forms\Components\TextInput::make('order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers appear first.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('event_date', 'desc')
            ->columns([
                Tables\Columns\ImageColumn::make('cover_image')
                    ->label('Cover'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('show.title')
                    ->label('Show')
                    ->searchable()
                    ->placeholder('—'),
                Tables\Columns\TextColumn::make('event_date')
                    ->label('Event Date')
                    ->date('M j, Y')
                    ->sortable(),
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
            'index'  => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit'   => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
