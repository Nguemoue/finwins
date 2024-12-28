<?php

namespace App\Filament\Resources\PressEchoResource\Pages;

use App\Filament\Resources\PressEchoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPressEcho extends EditRecord
{
    protected static string $resource = PressEchoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
