<?php

namespace App\Filament\Admin\Resources\SubTaskResource\Pages;

use App\Filament\Admin\Resources\SubTaskResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSubTask extends CreateRecord
{
    protected static string $resource = SubTaskResource::class;
}
