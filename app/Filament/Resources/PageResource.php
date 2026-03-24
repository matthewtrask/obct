<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationLabel = 'Custom Pages';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., About Our Studio'),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., about-our-studio')
                    ->helperText('The URL path for this page (e.g. "about-our-studio" → offbroadwaykids.net/pages/about-our-studio). Use lowercase letters and hyphens only, no spaces.'),

                Forms\Components\Textarea::make('content')
                    ->required()
                    ->rows(10)
                    ->columnSpanFull()
                    ->helperText('The main content of this page.'),

                CuratorPicker::make('image')
                    ->label('Page Image (optional)')
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->formatStateUsing(fn ($state) => '/pages/' . $state)
                    ->copyable()
                    ->copyMessage('Page URL copied'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->since()
                    ->sortable(),
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
            'index'  => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit'   => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
