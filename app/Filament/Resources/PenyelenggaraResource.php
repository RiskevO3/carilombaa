<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenyelenggaraResource\Pages;
use App\Filament\Resources\PenyelenggaraResource\RelationManagers;
use App\Models\Penyelenggara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenyelenggaraResource extends Resource
{
    protected static ?string $model = Penyelenggara::class;
    protected static ?string $navigationLabel = 'Penyelenggara Lomba';
    protected static ?string $navigationGroup = 'User Management';
    protected static ?string $title = 'Penyelenggara Lomba';
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
            ->columns([
                TextColumn::make('user.name')
                ->label('Nama'),
                TextColumn::make('nama_instansi')
                ->label('Nama Instansi'),
                TextColumn::make('lomba_count')
                ->counts('lomba')
                ->label('Jumlah Lomba')
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
            'index' => Pages\ListPenyelenggaras::route('/'),
            'create' => Pages\CreatePenyelenggara::route('/create'),
            'edit' => Pages\EditPenyelenggara::route('/{record}/edit'),
        ];
    }
}
