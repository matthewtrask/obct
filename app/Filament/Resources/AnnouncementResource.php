<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Models\Announcement;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;
    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = "What's New";
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Announcement Details')
                    ->schema([
                        Select::make('type')
                            ->required()
                            ->options([
                                'news'  => 'What\'s New — appears on the homepage news section',
                                'alert' => 'Alert Banner — shows as a yellow banner at the top of the site',
                            ])
                            ->default('news')
                            ->native(false)
                            ->helperText('Choose "What\'s New" for audition notices, upcoming events, etc.'),

                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., Auditions for Peter Pan Jr Summer 2026')
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('content')
                            ->required()
                            ->rows(6)
                            ->columnSpanFull()
                            ->helperText('The full announcement text. Paste exactly what you want parents to read.'),
                    ]),

                Section::make('Optional Link')
                    ->description('Add a clickable link at the bottom of this announcement (optional).')
                    ->schema([
                        Forms\Components\TextInput::make('link_url')
                            ->label('Link URL')
                            ->url()
                            ->maxLength(500)
                            ->placeholder('https://...')
                            ->helperText('The web address the link should go to.'),

                        Forms\Components\TextInput::make('link_text')
                            ->label('Link Button Text')
                            ->maxLength(255)
                            ->placeholder('e.g., Schedule an Audition')
                            ->helperText('The text shown on the link. Leave blank to show "Read More".'),
                    ])
                    ->columns(2)
                    ->collapsible(),

                Section::make('Visibility')
                    ->schema([
                        Forms\Components\Toggle::make('active')
                            ->label('Show on website')
                            ->helperText('Turn this off to hide the announcement without deleting it.')
                            ->default(true),

                        Forms\Components\DatePicker::make('expires_at')
                            ->label('Expiration Date')
                            ->helperText('Optional. The announcement will automatically hide after this date. Leave blank if it has no end date.'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\BadgeColumn::make('type')
                    ->colors([
                        'warning' => 'alert',
                        'success' => 'news',
                    ])
                    ->formatStateUsing(fn ($state) => $state === 'news' ? "What's New" : 'Alert Banner'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\IconColumn::make('active')
                    ->label('Live')
                    ->boolean(),
                Tables\Columns\TextColumn::make('expires_at')
                    ->label('Expires')
                    ->date('M j, Y')
                    ->sortable()
                    ->placeholder('No expiry'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->since()
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
            'index'  => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit'   => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }
}
