<?php

namespace App\Filament\Resources\PortraitResource\Pages;

use App\Filament\Resources\PortraitResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPortrait extends EditRecord
{
    protected static string $resource = PortraitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
