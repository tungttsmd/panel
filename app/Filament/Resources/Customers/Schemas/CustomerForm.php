<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->unique()->required()->label('Khách hàng'),
                TextInput::make('email')->email()->label('Email'),
                TextInput::make('phone')->numeric()->label('Số điện thoại'),
                TextInput::make('contact')->label('Liên hệ khác'),
                Textarea::make('note')->label('Ghi chú')
            ]);
    }
}
