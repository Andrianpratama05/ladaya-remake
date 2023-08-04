<?php

namespace App\Filament\Resources\HalamanResource\Pages;

use App\Filament\Resources\HalamanResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHalamen extends ManageRecords
{
    protected static string $resource = HalamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
