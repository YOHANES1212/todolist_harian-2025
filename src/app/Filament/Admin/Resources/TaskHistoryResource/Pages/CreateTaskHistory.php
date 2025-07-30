<?php

namespace App\Filament\Admin\Resources\TaskHistoryResource\Pages;

use App\Filament\Admin\Resources\TaskHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTaskHistory extends CreateRecord
{
    protected static string $resource = TaskHistoryResource::class;
}
