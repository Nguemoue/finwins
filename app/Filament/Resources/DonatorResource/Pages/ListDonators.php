<?php

namespace App\Filament\Resources\DonatorResource\Pages;

use App\Filament\Resources\DonatorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDonators extends ListRecords
{
    protected static string $resource = DonatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
