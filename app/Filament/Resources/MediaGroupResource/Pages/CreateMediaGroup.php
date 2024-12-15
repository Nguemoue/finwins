<?php

namespace App\Filament\Resources\MediaGroupResource\Pages;

use App\Filament\Resources\MediaGroupResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMediaGroup extends CreateRecord
{
    protected static string $resource = MediaGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
