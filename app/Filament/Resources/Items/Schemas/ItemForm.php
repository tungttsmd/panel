<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('serial_number')
                    ->required()->label('Mã serial'),
                TextInput::make('name')->label('Tên linh kiện'),
                TextInput::make('category_id')
                    ->numeric()->label('Phân loại'),
                TextInput::make('condition_id')
                    ->numeric()->label('Tình trạng'),
                TextInput::make('manufacturer_id')
                    ->numeric()->label('Hãng'),
                TextInput::make('status_id')
                    ->numeric()->label('Trạng thái'),
                Textarea::make('stockin_source')
                    ->columnSpanFull()->label('Nguồn nhập'),
                DateTimePicker::make('stockin_at')
                    ->required()->label('Ngày nhập'),
                DateTimePicker::make('warranty_start')->label('Bắt đầu bảo hành'),
                DateTimePicker::make('warranty_end')->label('Hết hạn bảo hành'),
                Textarea::make('note')
                    ->columnSpanFull()->label('Ghi chú'),
            ]);
    }
}
