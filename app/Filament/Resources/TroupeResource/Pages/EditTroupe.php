<?php

namespace App\Filament\Resources\TroupeResource\Pages;

use App\Filament\Resources\TroupeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTroupe extends EditRecord
{
    protected static string $resource = TroupeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
