<?php

namespace App\Filament\Resources\PortraitResource\Pages;

use App\Filament\Resources\PortraitResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePortrait extends CreateRecord
{
    protected static string $resource = PortraitResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
