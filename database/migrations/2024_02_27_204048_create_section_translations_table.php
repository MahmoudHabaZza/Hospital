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
        Schema::create('section_translations', function (Blueprint $table) {


            $table->increments('id');
            $table->ForeignId('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->string('locale')->index();
            $table->unique(['locale','section_id']);

            // Translated Columns
            $table->string('name');
            $table->text('description');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_translations');
    }
};
