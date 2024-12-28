<?php

namespace App\Filament\Clusters\Pages;

use App\Filament\Clusters\Settings;
use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Contact extends Page
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static string $view = 'filament.pages.common';
    protected static ?string $cluster = Settings::class;

    protected static ?string $title = "Page contact";

    public array $data = ['phone_number' => '', 'fax_number' => '', 'email' => '', 'bank_account'=>'', 'facebook_link' => '', 'twitter_link' => '', 'instagram_link' => '', 'address' => '', 'site_web_url' => ''];


    public function mount(): void
    {
        $settings = Setting::query()->pluck(column: "value", key: "label");
        $state = collect($this->data)->map(fn($index, $key) => $settings->get($key) ?? "");
        $this->form->fill($state->toArray());
    }

    public function form(Form $form): Form
    {

        return $form->schema([
            Section::make("Information de contact")->schema([
                TextInput::make("phone_number")
                    ->required()
                    ->tel(),
                TextInput::make("fax_number")
                    ->required()
                    ->tel(),

                TextInput::make("email")
                    ->required()
                    ->email(),

                TextInput::make("bank_account")
                    ->required(),
                Textarea::make("address")
                    ->required()
                    ->label("address")
            ])->collapsible()->columns(),

            Section::make("Information sociales")->schema([
                TextInput::make("facebook_link")
                    ->url(),
                TextInput::make("twitter_link")
                    ->url(),
                TextInput::make("instagram_link")
                    ->url(),
                TextInput::make("site_web_url")->url(),
            ])->collapsible(),
        ])->statePath('data');
    }

    protected function getHeaderActions(): array
    {

        return [
            Action::make("save")
                ->label("Enregistrer")
                //->requiresConfirmation()
                //->modalHeading("Enregistrez")
                ->action(function () {
                    $this->form->validate();

                    foreach ($this->data as $key => $item) {
                        Setting::updateOrCreate([
                            'label' => $key
                        ], [
                            'value' => $item
                        ]);
                    }
                    Notification::make()
                        ->title('Success !')
                        ->success()
                        ->body('Information de contact mis a jour avec success.')->send();
                })
        ];
    }
}
