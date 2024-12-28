<?php

namespace App\Filament\Resources\DonatorResource\Pages;

use App\Filament\Resources\DonatorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDonator extends CreateRecord
{
    protected static string $resource = DonatorResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
