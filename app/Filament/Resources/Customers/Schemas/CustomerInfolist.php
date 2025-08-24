<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CustomerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')->label('Khách hàng'),
                TextEntry::make('email')->label('Email'),
                TextEntry::make('phone')->label('Số điện thoại'),
                TextEntry::make('contact')->label('Liên hệ khác'),
                TextEntry::make('note')->label('Ghi chú'),
                TextEntry::make('created_at')
                    ->dateTime()->label('Ngày tạo'),
                TextEntry::make('updated_at')
                    ->dateTime()->label('Cập nhật'),
                TextEntry::make('deleted_at')
                    ->dateTime()->label('Ngày xoá')
            ]);
    }
}
