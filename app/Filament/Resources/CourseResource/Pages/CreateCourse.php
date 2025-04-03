<?php

namespace App\Filament\Resources\CourseResource\Pages;

use App\Filament\Resources\CourseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCourse extends CreateRecord
{
    protected static string $resource = CourseResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificateion(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Course Created')
            ->body('Course has been created successfully.');
    }
}
