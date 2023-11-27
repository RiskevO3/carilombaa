<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LombaResource\Pages;
use App\Filament\Resources\LombaResource\RelationManagers;
use App\Models\Lomba;
use Cloudinary\Transformation\Argument\Text\Text;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LombaResource extends Resource
{
    protected static ?string $model = Lomba::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make("title")->required()->maxLength(30)->minLength(5)->unique(),
                TextInput::make('short_description')->required()->maxLength(100)->minLength(5)->name('Short Description'),
                RichEditor::make('description')->required()->name('Description')->minLength(5)->maxLength(700),
                TextInput::make('minimum_person')->required()->name('Minimum Person')->numeric(),
                TextInput::make('maximum_person')->required()->name('Maximum Person')->numeric(),
                DatePicker::make('start_date')->required()->name('Start Date'),
                DatePicker::make('end_date')->required()->name('End Date'),
                FileUpload::make('image_url')->required()->image()->name('Image Url')->disk('cloudinary')->directory('lomba'),
                DatePicker::make('registration_start_date')->required()->name('Registration Start Date'),
                DatePicker::make('registration_end_date')->required()->name('Registration End Date'),
                TextInput::make('registration_fee')->required()->name('Registration Fee')->numeric()
            ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
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
            'index' => Pages\ListLombas::route('/'),
            'create' => Pages\CreateLomba::route('/create'),
            'edit' => Pages\EditLomba::route('/{record}/edit'),
        ];
    }
}
