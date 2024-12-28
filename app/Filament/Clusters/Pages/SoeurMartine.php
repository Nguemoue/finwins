<?php

namespace App\Filament\Clusters\Pages;

use App\Filament\Clusters\Settings;
use App\Models\Setting;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class SoeurMartine extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.soeur-martine';
    protected static ?string $cluster = Settings::class;

    protected static ?string $title = "Soeur martine";

    public  array $state = ['martine_description'=>''];
    public function form(Form $form): Form
    {
        return $form->schema([
            RichEditor::make('martine_description')
                ->label('')
                ->required()
                ->columnSpanFull()
        ])->statePath('content');
    }
    public function mount(): void
    {
        $this->form->fill([
            'martine_description' => Setting::whereLabel('martine_description')->first()->value ?? '',
        ]);
    }
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('Sauvegarder')
//                ->requiresConfirmation()
//                ->modalHeading("Attention!")
                ->action(function () {
                    $this->form->validate();
                    Setting::updateOrCreate(['label' => 'martine_description'], [
                        'value' => $this->state['martine_description']
                    ]);
                    Notification::make()
                        ->title('Success !')
                        ->success()
                        ->body('Mis a jour effectue.')->send();
                })
        ];
    }
}
