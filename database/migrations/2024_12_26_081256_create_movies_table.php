<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::create('movies', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('title');
      $table->text('synopsis');
      $table->string('poster')->nullable();
      $table->string('year');
      $table->boolean('available');
      $table->foreignUuid('genre_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('movies');
  }
};