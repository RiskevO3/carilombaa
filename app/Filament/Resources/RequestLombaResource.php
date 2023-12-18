<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequestLombaResource\Pages;
use App\Filament\Resources\RequestLombaResource\RelationManagers;
use App\Models\Lomba;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequestLombaResource extends Resource
{
    protected static ?string $model = Lomba::class;
    protected static ?string $navigationLabel = 'Request Lomba';
    protected static ?string $navigationGroup = 'Penyelenggara Lomba';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                $query->where('is_approved',false);
            })
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListRequestLombas::route('/'),
            'create' => Pages\CreateRequestLomba::route('/create'),
            'edit' => Pages\EditRequestLomba::route('/{record}/edit'),
        ];
    }
}
