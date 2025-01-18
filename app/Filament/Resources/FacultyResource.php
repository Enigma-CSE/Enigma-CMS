<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacultyResource\Pages;
use App\Filament\Resources\FacultyResource\RelationManagers;
use App\Models\Faculty;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FacultyResource extends Resource
{
    protected static ?string $model = Faculty::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationBadgeTooltip = 'The number of events';


    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Name')->required()->placeholder('John Doe'),
                TextInput::make('email')->label('Email')->required()->email(),  
                TextInput::make('password')->label('Password')->required()->password(),
                TextInput::make('phone')->label('Phone')->required()->placeholder('1234567890'),
                Select::make('qualification')->label('Qualification')->required()->options([
                    'BSc' => 'BSc',
                    'MSc' => 'MSc',
                    'PhD' => 'PhD',
                    'MPhil' => 'MPhil',
                    'BTech' => 'BTech',
                    'MTech' => 'MTech',
                    'BBA' => 'BBA',
                    'MBA' => 'MBA',
                    'BCom' => 'BCom',
                    'MCom' => 'MCom',
                    'BA' => 'BA',
                    'MA' => 'MA',
                    'BEd' => 'BEd',
                    'MEd' => 'MEd',
                    'BArch' => 'BArch',
                    'MArch' => 'MArch',
                    'BPharm' => 'BPharm',
                    'MPharm' => 'MPharm',
                    'BDS' => 'BDS',
                    'MDS' => 'MDS',
                    'MBBS' => 'MBBS',
                    'MD' => 'MD',
                    'MS' => 'MS',
                    'DM' => 'DM',
                    'MCh' => 'MCh',
                    'PG Diploma' => 'PG Diploma',
                    'Others' => 'Others',
                ])->multiple()->placeholder('Select Qualification')->searchable(),
                TextInput::make('specialization')->label('Specialization')->required()->placeholder('Computer Science'),
                TextInput::make('experience')->label('Experience')->required()->placeholder('5 years'),
                Select::make('designation')->label('Designation')->required()->options([
                    'HoD' => 'HoD',
                    'Professor' => 'Professor',
                    'Associate Professor' => 'Associate Professor',
                    'Assistant Professor' => 'Assistant Professor',
                    'Lecturer' => 'Lecturer',
                    'Others' => 'Others',
                ])->placeholder('Select Designation')->default('Assistant Professor'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('phone')->sortable()->searchable(),
                TextColumn::make('qualification')->sortable()->searchable(),
                TextColumn::make('specialization')->sortable()->searchable(),
                TextColumn::make('experience')->sortable()->searchable(),
                TextColumn::make('designation')->sortable()->searchable(),
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
            'index' => Pages\ListFaculties::route('/'),
            'create' => Pages\CreateFaculty::route('/create'),
            'edit' => Pages\EditFaculty::route('/{record}/edit'),
        ];
    }
}
