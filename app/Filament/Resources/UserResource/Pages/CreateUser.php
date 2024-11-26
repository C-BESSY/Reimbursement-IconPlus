<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use App\Traits\Redirect;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    use Redirect;

    protected static string $resource = UserResource::class;

    protected function afterCreate(): array
    {
        return [
            Notification::make()
                ->title('Saved successfully')
                ->success()
                ->body('Changes to the post have been saved.')
                ->actions([
                    Action::make('view')
                        ->button()
                        ->markAsRead(),
                ])
                ->sendToDatabase(User::all()),
        ];
    }
}
