<?php

namespace App\Filament\Admin\Resources\TaskHistoryResource\Pages;

use App\Filament\Admin\Resources\TaskHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTaskHistory extends EditRecord
{
    protected static string $resource = TaskHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
