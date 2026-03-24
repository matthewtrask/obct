<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Testimonials';
    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('author_name')
                    ->label('Parent / Family Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., The Johnson Family'),

                Forms\Components\TextInput::make('author_role')
                    ->label('Description')
                    ->maxLength(255)
                    ->placeholder('e.g., Parent of a Rising Stars student')
                    ->helperText('Shown below the name. Optional.'),

                Forms\Components\Textarea::make('content')
                    ->label('Testimonial')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull()
                    ->helperText('The review or quote from this family.'),

                CuratorPicker::make('photo')
                    ->label('Photo (optional)')
                    ->buttonLabel('Select or Upload Photo')
                    ->nullable()
                    ->helperText('A small headshot shown next to the review. Most testimonials won\'t have one.')
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

                Forms\Components\Toggle::make('featured')
                    ->label('Featured')
                    ->helperText('Featured testimonials are shown on the homepage.')
                    ->default(false),

                Forms\Components\Toggle::make('active')
                    ->label('Show on website')
                    ->helperText('Turn off to hide without deleting.')
                    ->default(true),

                Forms\Components\TextInput::make('order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers appear first (0 = first).'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order')
            ->columns([
                Tables\Columns\TextColumn::make('author_name')
                    ->label('Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('content')
                    ->label('Testimonial')
                    ->limit(60)
                    ->wrap(),
                Tables\Columns\IconColumn::make('featured')
                    ->label('Featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('active')
                    ->label('Live')
                    ->boolean(),
                Tables\Columns\TextColumn::make('order')
                    ->label('#')
                    ->numeric()
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
            'index'  => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit'   => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
