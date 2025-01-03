<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('media_groups',  static function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('poster')->nullable();
            $table->date('published_at');
            $table->text('description')->nullable();
            $table->foreignId('media_type_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media_groups');
    }
};
