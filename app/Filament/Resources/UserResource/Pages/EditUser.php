<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Traits\Redirect;
use Filament\Actions;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    use Redirect;

    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterCreate(): array
    {
        return [
            Notification::make()
                ->title('Done')
                ->success()
                ->body('Changes to the post have been saved.')
                ->actions([
                    Action::make('view')
                        ->button()
                        ->markAsRead(),
                ])
                ->send(),
        ];
    }
}
