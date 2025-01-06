<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

    public static function founderName(): string
    {
        return (string) (self::whereLabel('founder_name')->first()->value??null);
    }

    public static function founderDeclaration():string
    {
        return (string) (self::whereLabel('founder_declaration')->first()->value??null);
    }
    public static function homePresentationText(): string{
        return (string) (self::whereLabel('home_presentation')->first()->value??null);

    }


    protected function casts(): array
    {
        return [
            'value' => 'json',
        ];
    }

    public static function founderPosterUrl()
    {
        $setting =  self::whereLabel('founder_poster')->first();
        if ($setting){
            return asset("storage/".$setting->value);
        }
        return $setting->value;
    }

    public static function presentationHml():string
    {
        return (string) (self::whereLabel('founder_name')->first()->value??null);
    }
    public static function founderPresentation():string
    {
        return (string)(self::whereLabel('founder_presentation')->first()->value??null);
    }
}
