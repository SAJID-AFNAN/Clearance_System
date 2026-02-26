<?php

namespace App\Filament\Admin\Resources\TimeTableResource\Pages;

use App\Filament\Admin\Resources\TimeTableResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTimeTables extends ListRecords
{
    protected static string $resource = TimeTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
