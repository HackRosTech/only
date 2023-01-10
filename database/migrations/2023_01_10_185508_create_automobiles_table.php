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
        Schema::create('automobiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('model_id')
                ->constrained('models_automobile')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->index('model_id', 'model_id_idx');

            $table->foreignId('category_comfort_id')
                ->constrained('categories_comfort')
                ->cascadeOnUpdate();
            $table->index('category_comfort_id', 'category_comfort_id_idx');

            $table->foreignId('user_id')
                ->constrained();
            $table->index('user_id', 'user_id_idx');

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
        Schema::dropIfExists('automobiles');
    }
};
