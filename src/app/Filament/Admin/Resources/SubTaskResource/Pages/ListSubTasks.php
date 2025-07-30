<?php

namespace App\Filament\Admin\Resources\SubTaskResource\Pages;

use App\Filament\Admin\Resources\SubTaskResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubTasks extends ListRecords
{
    protected static string $resource = SubTaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
