<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventRegisterationResource\Pages;
use App\Filament\Resources\EventRegisterationResource\RelationManagers;
use App\Models\EventRegisteration;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventRegisterationResource extends Resource
{
    protected static ?string $model = EventRegisteration::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $modelLabel = 'Registeration';
    protected static ?string $navigationGroup = 'Event Management';

    protected static ?string $navigationBadgeTooltip = 'The number of registerations';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')->required()->relationship('user', 'name')->preload(),
                Select::make('event_id')->required()->relationship('event', 'name')->preload(),
                Select::make('status')->options([
                    'pending' => 'Pending',
                    'success' => 'Success',
                    'rejected' => 'Rejected',
                ])->default('pending'),
                Toggle::make('attended')->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('User')->searchable()->sortable(),
                TextColumn::make('event.name')->label('Event')->searchable()->sortable(),
                SelectColumn::make('status')->options([
                    'pending' => 'Pending',
                    'success' => 'Success',
                    'rejected' => 'Rejected',
                ])->label('Status')->sortable(),
                IconColumn::make('attended')->label('Attended')->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
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
            'index' => Pages\ListEventRegisterations::route('/'),
            'create' => Pages\CreateEventRegisteration::route('/create'),
            'edit' => Pages\EditEventRegisteration::route('/{record}/edit'),
        ];
    }
}
