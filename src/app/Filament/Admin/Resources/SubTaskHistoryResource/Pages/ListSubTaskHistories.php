<?php

namespace App\Filament\Admin\Resources\SubTaskHistoryResource\Pages;

use App\Filament\Admin\Resources\SubTaskHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubTaskHistories extends ListRecords
{
    protected static string $resource = SubTaskHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
