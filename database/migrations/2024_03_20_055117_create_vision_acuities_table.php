<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('vision_acuities', function (Blueprint $table) {
      $table->id();
      $table->integer('patient_id');
      $table->string('right');
      $table->string('left');
      $table->string('right_pinhole');
      $table->string('left_pinhole');
      $table->string('right_glasses');
      $table->string('left_glasses');
      $table->string('disablities');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('vision_acuities');
  }
};
