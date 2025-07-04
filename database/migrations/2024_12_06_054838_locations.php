<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Locations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('aliases')->nullable();
            $table->enum('type', ['World', 'Continent', 'Country', 'City', 'Ruin', 'Divine Realm']);
            $table->string('meta')->nullable();
            $table->nullableMorphs('rulerable');
            $table->smallInteger('pantheon_id')->unsigned()->nullable();
            $table->foreign('pantheon_id')->references('id')->on('pantheons');
            $table->text('description')->nullable();
        });

        Schema::create('locationables', function (Blueprint $table) {
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->nullableMorphs('locationable');
            $table->string('meta')->nullable();
        });

        Schema::create('planes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('aliases', 120)->nullable();
            $table->string('alignment', 5);
            $table->string('color_pool', 50);
            $table->string('natives')->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('sub_planes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('planes');
            $table->string('name', 20);
            $table->string('aliases', 120)->nullable();
            $table->string('natives')->nullable();
            $table->string('gravity', 30);
            $table->string('time', 30);
            $table->nullableMorphs('rulerable');
            $table->smallInteger('pantheon_id')->unsigned()->nullable();
            $table->foreign('pantheon_id')->references('id')->on('pantheons');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('sub_planes');
        Schema::dropIfExists('planes');
        Schema::dropIfExists('locationables');
        Schema::dropIfExists('locations');

        Schema::enableForeignKeyConstraints();
    }
}
