<?php

namespace App\Filament\Admin\Resources\RequestLombaResource\Pages;

use App\Filament\Admin\Resources\RequestLombaResource;
use App\Models\Lomba;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;

class ViewRequestLombaResource extends ViewRecord
{
    protected static string $resource = RequestLombaResource::class;
    protected static ?string $title = 'View Request Lomba';


    public function getHeaderActions(): array
    {
        return [
            Action::make('approve')
            ->label('Terima')
            ->color('success')
            ->icon('heroicon-o-check-circle')
            ->requiresConfirmation()
            ->modalIcon('heroicon-o-check-circle')
            ->modalDescription('Apakah anda yakin ingin menerima request lomba ini?')
            ->modalSubmitActionLabel('Terima')
            ->action(function (Lomba $lomba){
                $lomba->update([
                    'status' => Lomba::STATUS_APPROVED
                ]);
                Notification::make()
                ->title('Request Lomba dengan judul '.$lomba->title.' telah diterima')
                ->icon('heroicon-o-check-circle')
                ->iconColor('success')
                ->send();
                redirect()->to('/admin/request-lombas');
            }),
            Action::make('reject')
            ->label('Tolak')
            ->icon('heroicon-o-x-circle')
            ->color('danger')
            ->requiresConfirmation()
            ->modalIcon('heroicon-o-x-circle')
            ->modalDescription('Apakah anda yakin ingin menolak reservasi ini?')
            ->modalSubmitActionLabel('Tolak')
            ->action(function (Lomba $lomba){
                $lomba->update([
                    'status' => Lomba::STATUS_REJECTED
                ]);
                Notification::make()
                ->title('Request Lomba dengan judul '.$lomba->title.' telah ditolak')
                ->icon('heroicon-o-x-circle')
                ->iconColor('danger')
                ->send();
                redirect()->to('/admin/request-lombas');
            })

        ];
    }
}
