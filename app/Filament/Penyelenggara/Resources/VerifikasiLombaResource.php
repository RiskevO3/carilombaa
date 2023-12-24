<?php

namespace App\Filament\Penyelenggara\Resources;

use App\Filament\Penyelenggara\Resources\VerifikasiLombaResource\Pages;
use App\Filament\Penyelenggara\Resources\VerifikasiLombaResource\RelationManagers;
use App\Models\Lomba;
use App\Models\VerifikasiLomba;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VerifikasiLombaResource extends Resource
{
    protected static ?string $model = Lomba::class;
    protected static ?string $navigationLabel = 'Status Verifikasi Lomba';
    protected static ?string $navigationIcon = 'heroicon-o-check-circle';

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
            ->emptyStateHeading('Belum ada lomba')
            ->columns([
                TextColumn::make('title')
                ->label('Nama Lomba'),
                TextColumn::make('category.name')
                ->label('Kategori'),
                TextColumn::make('created_at')
                ->dateTime('d/m/Y')
                ->label('Tanggal Submit')
                ->sortable()
                ,
                TextColumn::make('registration_fee')
                    ->label('Tipe Lomba')
                    ->formatStateUsing(function ($state) {
                        return $state > 0 ? 'Berbayar' : 'Gratis';
                    }),
                TextColumn::make('location')
                ->label('Lokasi')
                ->formatStateUsing(function ($state) {
                    return Lomba::LOCATION[$state];
                })
                ,
                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(function ($state) {
                        return Lomba::STATUS[$state];
                    })
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        '0' => 'warning',
                        '1'=>'success',
                        '2' => 'danger',
                    })
                    ,
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListVerifikasiLombas::route('/'),
            'create' => Pages\CreateVerifikasiLomba::route('/create'),
            'edit' => Pages\EditVerifikasiLomba::route('/{record}/edit'),
        ];
    }
}
