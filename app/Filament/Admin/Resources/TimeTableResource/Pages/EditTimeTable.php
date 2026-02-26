<?php

namespace App\Filament\Admin\Resources\TimeTableResource\Pages;

use App\Filament\Admin\Resources\TimeTableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTimeTable extends EditRecord
{
    protected static string $resource = TimeTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
