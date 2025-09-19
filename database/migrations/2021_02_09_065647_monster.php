<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Monster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->enum('size', ['Tiny', 'Small', 'Medium', 'Large', 'Huge', 'Gargantuan']);
            $table->string('type', 25)->nullable();
            $table->string('alignment', 12);
            $table->string('armor_class', 50);
            $table->string('damage_reduction')->nullable();
            $table->integer('hit_dice')->unsigned()->nullable();
            $table->string('hit_points', 120);
            $table->string('speed', 100);
            $table->tinyInteger('str')->unsigned()->nullable();
            $table->tinyInteger('dex')->unsigned()->nullable();
            $table->tinyInteger('con')->unsigned()->nullable();
            $table->tinyInteger('int')->unsigned()->nullable();
            $table->tinyInteger('wis')->unsigned()->nullable();
            $table->tinyInteger('cha')->unsigned()->nullable();
            $table->decimal('cr', 5, 3)->unsigned();
            $table->tinyInteger('proficiency')->unsigned()->default(0);
            $table->tinyInteger('to_hit_melee')->default(0);
            $table->tinyInteger('to_hit_range')->default(0);
            $table->text('actions')->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('languagables', function (Blueprint $table) {
            $table->integer('language_id')->unsigned();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->morphs('languagable');
            $table->string('meta')->nullable();
            $table->tinyInteger('optional')->default(0);

            $table->primary(['language_id', 'languagable_id', 'languagable_type']);
        });
        Schema::create('talentables', function (Blueprint $table) {
            $table->integer('talent_id')->unsigned();
            $table->foreign('talent_id')->references('id')->on('talents');
            $table->morphs('talentable');
            $table->tinyInteger('level')->unsigned()->default(0);
            $table->string('meta')->nullable();

            $table->primary(['talent_id', 'talentable_id', 'talentable_type', 'level'], 'talent_primary_key');
        });
        Schema::create('spellables', function (Blueprint $table) {
            $table->integer('spell_id')->unsigned();
            $table->foreign('spell_id')->references('id')->on('spells');
            $table->morphs('spellable');
            $table->tinyInteger('level')->unsigned()->nullable();
            $table->string('meta')->nullable();

            $table->primary(['spell_id', 'spellable_id', 'spellable_type'], 'spellable_primary_key');
        });
        Schema::create('powerables', function (Blueprint $table) {
            $table->integer('power_id')->unsigned();
            $table->foreign('power_id')->references('id')->on('powers');
            $table->morphs('powerable');
            $table->tinyInteger('level')->unsigned()->nullable();
            $table->string('meta')->nullable();

            $table->primary(['power_id', 'powerable_id', 'powerable_type'], 'powerable_priamy_key');
        });
        Schema::create('savables', function (Blueprint $table) {
            $table->smallInteger('attribute_id')->unsigned();
            $table->foreign('attribute_id')->references('id')->on('attributes');
            $table->morphs('savable');
            $table->tinyInteger('bonus')->nullable();
            $table->string('meta')->nullable();

            $table->primary(['attribute_id', 'savable_id', 'savable_type'], 'savable_primary_key');
        });
        Schema::create('classables', function (Blueprint $table) {
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->morphs('classable');
            $table->tinyInteger('level')->unsigned()->nullable();
            $table->string('type', 30)->nullable();
            $table->string('meta')->nullable();

            $table->primary(['class_id', 'classable_id', 'classable_type'], 'classable_primary_key');
        });
        Schema::create('monsterables', function (Blueprint $table) {
            $table->integer('monster_id')->unsigned();
            $table->foreign('monster_id')->references('id')->on('monsters');
            $table->morphs('monsterable');
            $table->string('meta')->nullable();

            $table->primary(['monster_id', 'monsterable_id', 'monsterable_type']);
        });
        Schema::create('formulables', function (Blueprint $table) {
            $table->integer('formula_id')->unsigned();
            $table->foreign('formula_id')->references('id')->on('formulas');
            $table->morphs('formulable');
            $table->string('meta')->nullable();

            $table->primary(['formula_id', 'formulable_id', 'formulable_type']);
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

        Schema::dropIfExists('monsters');
        Schema::dropIfExists('languagables');
        Schema::dropIfExists('talentables');
        Schema::dropIfExists('spellables');
        Schema::dropIfExists('powerables');
        Schema::dropIfExists('savables');
        Schema::dropIfExists('classables');
        Schema::dropIfExists('monsterables');
        Schema::dropIfExists('formulables');

        Schema::enableForeignKeyConstraints();
    }
}
