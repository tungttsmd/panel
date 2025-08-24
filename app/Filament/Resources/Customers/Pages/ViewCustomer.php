<?php

namespace App\Filament\Resources\Customers\Pages;

use App\Filament\Resources\Customers\CustomerResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCustomer extends ViewRecord
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('list')
                ->label('Danh sách')
                ->url($this->getResource()::getUrl('index'))
                ->icon('heroicon-o-arrow-left')
                ->color('gray')->modalFooterActionsAlignment('start'),
            EditAction::make()->color('warning'),
        ];
    }
}
