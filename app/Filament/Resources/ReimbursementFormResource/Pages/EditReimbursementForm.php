<?php

namespace App\Filament\Resources\ReimbursementFormResource\Pages;

use App\Filament\Resources\ReimbursementFormResource;
use App\Models\User;
use App\Traits\Redirect;
use Filament\Actions;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditReimbursementForm extends EditRecord
{
    use Redirect;

    protected static string $resource = ReimbursementFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $user = auth()->user();
        Notification::make()
            ->title('Ada Perubahan dalam Reimbursement')
            ->body('Ada perubahan reimbursement dilakukan oleh ' . $user->name)
            ->info()
            ->actions([
                Action::make('Lihat')
                    ->url(fn() => route('filament.admin.resources.reimbursement-forms.edit', $this->record))
                    ->button()
                    ->openUrlInNewTab()
                    ->markAsRead(),
            ])
            ->sendToDatabase(User::where('role_id', 1)->get());
    }
}
