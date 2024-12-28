<?php

namespace App\Filament\Resources\PressEchoResource\Pages;

use App\Filament\Resources\PressEchoResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePressEcho extends CreateRecord
{
    protected static string $resource = PressEchoResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
