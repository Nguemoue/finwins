<?php

namespace App\Filament\Resources\PressEchoResource\Pages;

use App\Filament\Resources\PressEchoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPressEchos extends ListRecords
{
    protected static string $resource = PressEchoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
