<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('portraits', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('occupation');
            $table->text('bio')->nullable();
            $table->string('poster');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portraits');
    }
};
