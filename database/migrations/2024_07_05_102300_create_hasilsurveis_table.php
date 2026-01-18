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
        Schema::create('hasilsurveis', function (Blueprint $table) {
            $table->id();
            $table->string('namacs');
            $table->string('nohp');
            $table->string('ask1');
            $table->string('ask2');
            $table->string('ask3');
            $table->string('ask4');
            $table->string('ask5');
            $table->text('saran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasilsurveis');
    }
};
