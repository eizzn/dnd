<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Characters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->tinyInteger('str')->unsigned()->nullable();
            $table->tinyInteger('dex')->unsigned()->nullable();
            $table->tinyInteger('con')->unsigned()->nullable();
            $table->tinyInteger('int')->unsigned()->nullable();
            $table->tinyInteger('wis')->unsigned()->nullable();
            $table->tinyInteger('cha')->unsigned()->nullable();
            $table->integer('hit_points')->unsigned()->nullable();
            $table->integer('sub_race_id')->unsigned();
            $table->foreign('sub_race_id')->references('id')->on('sub_races');
            $table->string('alignment', 12)->default('-');
            $table->text('proficiencies')->nullable();
        });
        Schema::create('character_class', function (Blueprint $table) {
            $table->integer('character_id')->unsigned();
            $table->foreign('character_id')->references('id')->on('characters');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->tinyInteger('character_level')->unsigned();
            $table->tinyInteger('level')->unsigned();

            $table->primary(['character_id', 'character_level']);
        });
        Schema::create('character_skill', function (Blueprint $table) {
            $table->integer('character_id')->unsigned();
            $table->foreign('character_id')->references('id')->on('characters');
            $table->smallInteger('skill_id')->unsigned();
            $table->tinyInteger('level')->unsigned();
            $table->string('specialization')->nullable();
            $table->tinyInteger('value')->unsigned();
            $table->tinyInteger('idx')->unsigned();

            $table->primary(['character_id', 'skill_id', 'level', 'idx'], 'class_skill_id');
        });
        Schema::create('character_feature', function (Blueprint $table) {
            $table->integer('character_id')->unsigned();
            $table->foreign('character_id')->references('id')->on('characters');
            $table->integer('feature_id')->unsigned();
            $table->foreign('feature_id')->references('id')->on('features');
            $table->integer('class_id')->unsigned()->nullable();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->tinyInteger('level')->unsigned();
            $table->string('meta')->nullable();
            $table->tinyInteger('idx')->unsigned();

            $table->primary(['character_id', 'feature_id', 'level', 'idx'], 'class_feature_id');
        });
        Schema::create('character_feat', function (Blueprint $table) {
            $table->integer('character_id')->unsigned();
            $table->foreign('character_id')->references('id')->on('characters');
            $table->integer('feat_id')->unsigned();
            $table->foreign('feat_id')->references('id')->on('feats');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->string('meta')->nullable();
            $table->tinyInteger('level')->unsigned();

            $table->primary(['character_id', 'feat_id', 'class_id', 'level'], 'character_feat_id');
        });

        Schema::create('character_talent', function (Blueprint $table) {
            $table->integer('character_id')->unsigned();
            $table->foreign('character_id')->references('id')->on('characters');
            $table->integer('talent_id')->unsigned();
            $table->foreign('talent_id')->references('id')->on('talents');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->tinyInteger('level')->unsigned();

            $table->primary(['character_id', 'talent_id', 'class_id', 'level'], 'character_talent_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_class');
        Schema::dropIfExists('characters');
    }
}
