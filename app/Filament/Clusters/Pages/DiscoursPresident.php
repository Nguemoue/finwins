<?php

namespace App\Filament\Clusters\Pages;

use App\Filament\Clusters\Settings;
use App\Models\Setting;
use Filament\Forms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class DiscoursPresident extends Page
{
    public static ?string $title = "Discours de la presidente";
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.presidentSpeeches';
    protected static ?string $cluster = Settings::class;
    public string $declaration = "";
    public array $state = ['president_speeches' => ''];

    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\RichEditor::make("president_speeches")
                ->label('')
                ->required()
                ->columnSpanFull()

        ])->statePath('state');
    }

    public function mount(): void
    {
        $this->form->fill([
            'president_speeches' => Setting::whereLabel('president_speeches')->first()->value ?? '',
        ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('Sauvegarder')
                ->requiresConfirmation()
                ->modalHeading("Attention!")
                ->action(function () {
                    $this->form->validate();
                    Setting::updateOrCreate(['label' => 'president_speeches'], [
                        'value' => $this->state['president_speeches']
                    ]);
                    Notification::make()
                        ->title('Success !')
                        ->success()
                        ->body('Mis a jour effectue.')
                        ->send();
                })
        ];
    }


}
