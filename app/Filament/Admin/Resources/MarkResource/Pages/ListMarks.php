<?php

namespace App\Filament\Admin\Resources\MarkResource\Pages;

use App\Filament\Admin\Resources\MarkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarks extends ListRecords
{
    protected static string $resource = MarkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
