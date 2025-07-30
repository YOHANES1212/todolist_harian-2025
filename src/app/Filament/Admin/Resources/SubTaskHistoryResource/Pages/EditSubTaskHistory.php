<?php

namespace App\Filament\Admin\Resources\SubTaskHistoryResource\Pages;

use App\Filament\Admin\Resources\SubTaskHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubTaskHistory extends EditRecord
{
    protected static string $resource = SubTaskHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
