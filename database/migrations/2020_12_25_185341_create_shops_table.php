<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('address');
            $table->unsignedBigInteger('seafood_id');
            $table->unsignedBigInteger('algae_id');
            $table->unsignedBigInteger('river_fish_id');
            $table->unsignedBigInteger('sea_fish_id');
            $table->unsignedBigInteger('bake_id');

            $table->softDeletes();

//            index
            $table->index('seafood_id');
            $table->index('algae_id');
            $table->index('river_fish_id');
            $table->index('sea_fish_id');
            $table->index('bake_id');

//            FK
            $table->foreign('seafood_id')->references('id')->on('seafoods');
            $table->foreign('algae_id')->references('id')->on('algaes');
            $table->foreign('river_fish_id')->references('id')->on('river_fishes');
            $table->foreign('sea_fish_id')->references('id')->on('sea_fishes');
            $table->foreign('bake_id')->references('id')->on('bakes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
