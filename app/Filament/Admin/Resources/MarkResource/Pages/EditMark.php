<?php

namespace App\Filament\Admin\Resources\MarkResource\Pages;

use App\Filament\Admin\Resources\MarkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMark extends EditRecord
{
    protected static string $resource = MarkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
