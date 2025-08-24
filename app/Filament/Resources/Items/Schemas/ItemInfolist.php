<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ItemInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('serial_number')->label('Mã serial'),
                TextEntry::make('name')->label('Tên linh kiện'),
                TextEntry::make('category_id')
                    ->numeric()->label('Phân loại'),
                TextEntry::make('condition_id')
                    ->numeric()->label('Tình trạng'),
                TextEntry::make('manufacturer_id')
                    ->numeric()->label('Hãng'),
                TextEntry::make('status_id')
                    ->numeric()->label('Trạng thái'),
                TextEntry::make('stockin_at')
                    ->dateTime()->label('Ngày nhập'),
                TextEntry::make('warranty_start')
                    ->dateTime()->label('Bắt đầu bảo hành'),
                TextEntry::make('warranty_end')
                    ->dateTime()->label('Hết hạn bảo hành'),
                TextEntry::make('created_at')
                    ->dateTime()->label('Ngày tạo'),
                TextEntry::make('updated_at')
                    ->dateTime()->label('Cập nhật'),
            ]);
    }
}
