<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Models\Teacher;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Teachers';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Shannon Mayer'),

                Forms\Components\TextInput::make('specialties')
                    ->maxLength(255)
                    ->placeholder('e.g., Musical Theatre, Dance, Vocal Coaching')
                    ->helperText('Shown under the teacher\'s name on the Teachers page.'),

                Forms\Components\Textarea::make('bio')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull()
                    ->helperText('A short bio displayed on the Teachers page.'),

                CuratorPicker::make('image')
                    ->label('Photo')
                    ->buttonLabel('Select or Upload Photo')
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
                    ->helperText('Turn off to hide this teacher without deleting them.')
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
                Tables\Columns\ImageColumn::make('image')
                    ->label('Photo')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('specialties')
                    ->searchable()
                    ->limit(40),
                Tables\Columns\IconColumn::make('active')
                    ->label('Live')
                    ->boolean(),
                Tables\Columns\TextColumn::make('order')
                    ->label('#')
                    ->numeric()
                    ->sortable(),
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
            'index'  => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit'   => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}
