<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;


class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Article Created')
            ->body('Article has been created successfully.');
    }
}
