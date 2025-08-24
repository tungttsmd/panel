<?php

namespace App\Filament\Resources\Customers\Pages;

use App\Filament\Resources\Customers\CustomerResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCustomer extends EditRecord
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
            ViewAction::make()->color('info'),
            DeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
