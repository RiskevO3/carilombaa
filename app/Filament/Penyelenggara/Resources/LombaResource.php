<?php

namespace App\Filament\Penyelenggara\Resources;

use App\Filament\Penyelenggara\Resources\LombaResource\Pages;
use App\Filament\Penyelenggara\Resources\LombaResource\RelationManagers;
use App\Models\Lomba;
use Cloudinary\Transformation\Argument\Text\Text;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class LombaResource extends Resource
{
    protected static ?string $model = Lomba::class;
    protected static ?string $navigationLabel = 'Lomba';
    protected static ?string $navigationIcon = 'icon-upload';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("title")->required()->maxLength(30)->minLength(5)
                ->live(debounce:300)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                ->unique()
                ,
                TextInput::make('slug')->required()->name('Slug')->unique(),
                //
                Select::make('category_id')
                ->required()
                ->relationship('category','name')
                ->name('Category')
                ->columnSpanFull()
                ,
                TextInput::make('short_description')->required()->maxLength(100)->minLength(5)->name('Short Description')->columnSpanFull(),
                RichEditor::make('description')->required()->name('Description')->minLength(5)
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ])
                ->fileAttachmentsDisk('cloudinary')->columnSpanFull()
                ,
                TextInput::make('minimum_person')->required()->name('Minimum Person')->numeric()->minValue(1),
                TextInput::make('maximum_person')->required()->name('Maximum Person')->numeric()->minValue(1),
                DatePicker::make('registration_start_date')->required()->name('Registration Start Date'),
                DatePicker::make('registration_end_date')->required()->name('Registration End Date'),
                DatePicker::make('start_date')->required()->name('Start Date'),
                DatePicker::make('end_date')->required()->name('End Date'),
                Select::make('location')
                ->options([
                    '0' => 'Online',
                    '1' => 'Offline',
                ])
                ->columnSpanFull()
                ->live()
                ->afterStateUpdated(fn (Select $component) => $component
                    ->getContainer()
                    ->getComponent('dynamicTypeFields')
                    ->getChildComponentContainer()
                    ->fill())
                ,
                Grid::make(1)
                ->schema(fn (Get $get): array => match ($get('location')) {
                    '0' => [
                    ],
                    '1' => [
                        TextInput::make('location_detail')->name('Location Detail')->required()
                    ],
                    default => [],
                })
                ->key('dynamicTypeFields'),
                FileUpload::make('image')->required()->image()->name('Image Url')->disk('cloudinary')->directory('lomba')->columnSpanFull(),
                TextInput::make('registration_fee')->required()->name('Registration Fee')->numeric()->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                $query->where('penyelenggara_id', auth()->user()->penyelenggara->id);
            })
            ->emptyStateHeading('Tidak ada data lomba')
            ->columns([
                TextColumn::make('title')
                    ->label('Nama Lomba')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->sortable(),
                TextColumn::make('created_at')
                ->label('Tanggal Submit')
                ->dateTime('d/m/Y'),
                TextColumn::make('end_date')
                ->label('Progress')
                ->formatStateUsing(function ($state) {
                    return 'Sedang Berlangsung/Akan Datang';
                })
                ->badge()
                ->color([
                    'Selesai' => 'success',
                    'Sedang Berlangsung' => 'info',
                ])
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
