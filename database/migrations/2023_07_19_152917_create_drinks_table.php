<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->string('strDrink', 50);
            $table->string('strTags', 250)->nullable();
            $table->string('strCategory', 50)->nullable();
            $table->string('strAlcoholic', 50)->nullable();
            $table->string('strGlass', 50)->nullable();
            $table->text('strInstructions')->nullable();
            $table->text('strInstructionsIT')->nullable();
            $table->string('strDrinkThumb', 200)->nullable();
            $table->string('strIngredient1', 50)->nullable();
            $table->string('strIngredient2', 50)->nullable();
            $table->string('strIngredient3', 50)->nullable();
            $table->string('strIngredient4', 50)->nullable();
            $table->string('strIngredient5', 50)->nullable();
            $table->string('strIngredient6', 50)->nullable();
            $table->string('strIngredient7', 50)->nullable();
            $table->string('strIngredient8', 50)->nullable();
            $table->string('strMeasure1', 50)->nullable();
            $table->string('strMeasure2', 50)->nullable();
            $table->string('strMeasure3', 50)->nullable();
            $table->string('strMeasure4', 50)->nullable();
            $table->string('strMeasure5', 50)->nullable();
            $table->string('strMeasure6', 50)->nullable();
            $table->string('strMeasure7', 50)->nullable();
            $table->string('strMeasure8', 50)->nullable();
            $table->string('strImageSource', 200)->nullable();
            $table->string('strImageAttribution', 50)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks');
    }
};
