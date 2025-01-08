<?php

namespace App\Filament\Resources\EventRegisterationResource\Pages;

use App\Filament\Resources\EventRegisterationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventRegisterations extends ListRecords
{
    protected static string $resource = EventRegisterationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
