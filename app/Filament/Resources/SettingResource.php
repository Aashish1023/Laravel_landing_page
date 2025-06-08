<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->placeholder('Enter Name'),
                TextInput::make('short_name')->required()->placeholder('Enter Short Form'),
                TextInput::make('email')->required()->placeholder('Enter Email'),
                TextInput::make('address')->required()->placeholder('Enter Address'),
                TextInput::make('fb_url')->url()->label('Facebook URL'),
                TextInput::make('tw_url')->url()->label('Twitter URL'),
                TextInput::make('insta_url')->url()->label('Instagram URL'),
                TextInput::make('li_url')->url()->label('Linkedin URL'),
                TextInput::make('description')
                    ->label('About Member')
                    ->placeholder('Enter Description')
                    ->required(),
                Select::make('status')->options([
                    1 => 'Active',
                    0 => 'Inactive',
                ])->required(),
                FileUpload::make('logo')
                    ->image()
                    ->imageCropAspectRatio('1:1') // Ensures the image is square
                    ->previewable(true), // Enables preview in edit mode
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')->width(100)->height(100),
                TextColumn::make('name'),
                TextColumn::make('description'),
            ])
            //change Image into logo at data head
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
