<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('media', static function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->string('media_url')->nullable();
            $table->enum('media_source',['local','url'])->default('local');
            $table->enum('media_type',['video','image']);
            $table->string('description');
            $table->foreignId('media_group_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
