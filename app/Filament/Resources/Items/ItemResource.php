<?php

namespace App\Filament\Resources\Items;

use App\Filament\Resources\Items\Pages\CreateItem;
use App\Filament\Resources\Items\Pages\EditItem;
use App\Filament\Resources\Items\Pages\ListItems;
use App\Filament\Resources\Items\Pages\ViewItem;
use App\Filament\Resources\Items\Schemas\ItemForm;
use App\Filament\Resources\Items\Schemas\ItemInfolist;
use App\Filament\Resources\Items\Tables\ItemsTable;
use App\Models\Item;
use BackedEnum;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Linh ki?n';

    public static function form(Schema $schema): Schema
    {
        return ItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('serial_number')
                ->searchable()->label('Mã serial'),
            TextColumn::make('name')
                ->searchable()->label('Tên linh kiện'),
            TextColumn::make('category_id')
                ->numeric()
                ->sortable()->label('Phân loại'),
            TextColumn::make('condition_id')
                ->numeric()
                ->sortable()->label('Tình trạng'),
            TextColumn::make('manufacturer_id')
                ->numeric()
                ->sortable()->label('Hãng'),
            TextColumn::make('status_id')
                ->numeric()
                ->sortable()->label('Trạng thái'),
            TextColumn::make('stockin_at')
                ->dateTime()
                ->sortable()->label('Nhập kho'),
            TextColumn::make('warranty_start')
                ->dateTime()
                ->sortable()->label('Bảo hành từ'),
            TextColumn::make('warranty_end')
                ->dateTime()
                ->sortable()->label('Hạn bảo hành'),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true)->label('Ngày tạo'),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true)->label('Cập nhật'),
        ])->filters([
            //
        ])->actions([
            ViewAction::make('view')
                ->label('Xem')
                ->icon('heroicon-o-eye'),
            EditAction::make(),
        ])->bulkActions([
            DeleteBulkAction::make()
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListItems::route('/'),
            'create' => CreateItem::route('/create'),
            'view' => ViewItem::route('/{record}'),
            'edit' => EditItem::route('/{record}/edit'),
        ];
    }
}
