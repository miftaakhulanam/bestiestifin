<?php

namespace App\Filament\Resources\ConceptResource\Pages;

use App\Filament\Resources\ConceptResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConcepts extends ListRecords
{
    protected static string $resource = ConceptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Create disabled: fixed 5 concepts only
        ];
    }
}
