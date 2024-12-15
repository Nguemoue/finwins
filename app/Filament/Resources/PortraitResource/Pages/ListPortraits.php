<?php

namespace App\Filament\Resources\PortraitResource\Pages;

use App\Filament\Resources\PortraitResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPortraits extends ListRecords
{
    protected static string $resource = PortraitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
