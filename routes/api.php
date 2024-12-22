<?php

Route::prefix("api/v1")->group(function (){
   Route::post("contact",[\App\Http\Controllers\Api\ApiContactController::class,'store'])->name('api.contact.store');
});
