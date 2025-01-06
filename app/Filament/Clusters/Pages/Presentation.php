<?php

namespace App\Filament\Clusters\Pages;

use App\Filament\Clusters\Settings;
use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Presentation extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.presentation';
    protected static ?string $cluster = Settings::class;

    protected static ?string $title = "Texte de presentation";

    public array $state = [
        'founder_declaration' => '',
        'founder_intro' => '',
        'home_presentation'=>''
    ];

    public function mount(): void
    {
        $this->form->fill([
            'founder_declaration' => Setting::whereLabel('founder_declaration')->first()->value ?? '',
            'founder_intro' => Setting::whereLabel('founder_intro')->first()->value ?? '',
            'home_presentation' => Setting::whereLabel('founder_intro')->first()->value ?? ''
        ]);
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            RichEditor::make('founder_declaration')->columnSpanFull()->label('Declaration de fondation'),
            RichEditor::make('founder_intro')->columnSpanFull()->label('Fondatrice'),
            RichEditor::make('home_presentation')->columnSpanFull()->label('Texte presentation accueil')
        ])->statePath('state');
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make("Sauvegarder")->icon('heroicon-o-pencil-square')
//                ->requiresConfirmation()
//                ->modalHeading("Attention!")
                ->action(function () {
                    foreach ($this->state as $key => $value) {
                        Setting::updateOrCreate([
                            'label' => $key
                        ],[
                            'value'=>$value
                        ]);
                    }
                    Notification::make()
                        ->title('Success !')
                        ->success()
                        ->body('Mis a jour effectue.')->send();
                })
        ];
    }
}
