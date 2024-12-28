<?php

namespace App\Filament\Clusters\Pages;

use App\Filament\Clusters\Settings;
use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Actions\ButtonAction;
use Filament\Pages\Page;
use Illuminate\Support\Arr;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Fondatrice extends Page
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.founder';
    protected static ?string $cluster = Settings::class;

    protected static ?string $title = "A propos de la fondatrice";

    public array $data = ['founder_presentation' => '','founder_poster'=>'','founder_name'=>''];



    public function mount()
    {
        $this->form->fill([
            'founder_presentation'=> Setting::whereLabel('founder_presentation')->first()?->value??'',
            'founder_poster'=> Setting::whereLabel('founder_poster')->first()?->value??'',
            'founder_name'=> Setting::whereLabel('founder_name')->first()?->value??'',
        ]);
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('founder_name')->columnSpanFull()->required(),
            FileUpload::make('founder_poster')->columnSpanFull()->label('Photo du fondateur')
                ->image()
                ->multiple(false)
                ->directory("uploads")
                ->imageEditor()
                ->imageCropAspectRatio("1:1")
                ->required(),

            RichEditor::make('founder_presentation')->columnSpanFull()->label('Presentation du fondateur')
                ->required(),
        ])->statePath('data');
    }

    protected function getHeaderActions(): array
    {

        return [
            Action::make("save")
                ->label("Enregistrer")
                ->requiresConfirmation()
                ->modalHeading("Enregistrez")
                ->action(function () {
                    Setting::updateOrCreate([
                        'label' => 'founder_poster'
                    ],[
                        'value' => with(Arr::first($this->data['founder_poster'],default: ""),static function(TemporaryUploadedFile|string $image){
                            if (is_string($image)){
                                return $image;
                            }
                            return $image->store("uploads",['disk'=>'public']);
                        })
                    ]);
                    foreach(Arr::except(array: $this->data,keys:'founder_poster') as $key=>$item){
                        Setting::updateOrCreate([
                            'label' => $key
                        ],[
                            'value' => $item
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
