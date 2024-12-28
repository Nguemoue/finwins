<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('press_echoes', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->date('published_at');
            $table->string('pdf_path');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('press_echoes');
    }
};
