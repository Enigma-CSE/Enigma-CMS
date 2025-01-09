<?php

namespace App\Filament\Resources;

use App\Filament\Exports\UserExporter;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\select;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Student Informa')->schema([
                    FileUpload::make('image')->image()->required()->directory('images/users')->openable()->preserveFilenames()
                    ->downloadable()->columnSpanFull(),
                    TextInput::make('name')->required(),
                    TextInput::make('email')->email()->required(),
                    TextInput::make('password')->password(),
                    TextInput::make('usn')->required(),
                    Select::make('semester')->options([
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                    ])->required()->default('1'),
                    TextInput::make('phone')->required(),
                ])->columns(2)->collapsible(),
                Section::make('Student Role Settings')->schema([
                    ToggleButtons::make('is_alumini')->boolean()->default(false)->inline(),
                    ToggleButtons::make('is_admin')->boolean()->default(false)->inline(),
                    ToggleButtons::make('is_verified')->boolean()->default(false)->inline(),
                ])->columns(3)->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->circular(),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('usn')->searchable()->sortable(),
                TextColumn::make('email')->searchable()->sortable(),
                TextColumn::make('semester')->searchable()->sortable(),
                TextColumn::make('phone')->searchable()->sortable(),
                IconColumn::make('is_alumini')->boolean()->searchable()->sortable(),
                IconColumn::make('is_admin')->boolean()->searchable()->sortable(),
                IconColumn::make('is_verified')->boolean()->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                ExportAction::make()->exporter(UserExporter::class),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
