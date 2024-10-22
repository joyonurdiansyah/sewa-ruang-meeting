<?php

namespace App\Filament\Resources\OfficeSpaceResource\Pages;

use App\Filament\Resources\OfficeSpaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfficeSpaces extends ListRecords
{
    protected static string $resource = OfficeSpaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
