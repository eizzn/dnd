<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PfInit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('attr', 3)->unique();
            $table->string('name', 50);
            $table->text('description')->nullable();
        });
        Schema::create('attributables', function (Blueprint $table) {
            $table->smallInteger('attribute_id')->unsigned();
            $table->foreign('attribute_id')->references('id')->on('attributes');
            $table->morphs('attributable');
            $table->smallInteger('dc')->unsigned();

            $table->primary(['attribute_id', 'attributable_id', 'attributable_type'], 'attributable_id');
        });
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->text('description')->nullable();
        });

        Schema::create('alphabets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->text('description');
        });
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->enum('type', ['Regional', 'Racial', 'Trade', 'Extraplanar', 'Dead', 'Special']);
            $table->text('description')->nullable();
            $table->integer('alphabet_id')->unsigned()->nullable();
            $table->foreign('alphabet_id')->references('id')->on('alphabets');
            $table->string('family', 50)->nullable();
            $table->string('local', 50)->nullable();
            $table->string('speakers', 300)->nullable();
        });
        Schema::create('races', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->unique();
            $table->text('age')->nullable();
            $table->smallInteger('hit_points')->unsigned();
            $table->string('size', 10)->nullable();
            $table->integer('speed')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->text('benefits')->nullable();
        });
        Schema::create('sub_races', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('race_id')->unsigned();
            $table->foreign('race_id')->references('id')->on('races');
            $table->text('description')->nullable();
            $table->string('regions')->nullable();
            $table->text('benefits')->nullable();
        });

        Schema::create('backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->text('description');
            $table->string('ability_boost');
            $table->text('skills');
        });
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 30)->unique();
            $table->string('name', 30)->unique();
            $table->string('trigger')->nullable();
            $table->string('requirements')->nullable();
            $table->enum('action_type', ['Triple Action', 'Double Action', 'Action', 'Reaction', 'Free'])->nullable();
            $table->text('description');
            $table->text('success')->nullable();
            $table->text('failure')->nullable();
            $table->text('critical_success')->nullable();
            $table->text('critical_failure')->nullable();
        });
        Schema::create('conditions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 30)->unique();
            $table->string('name', 30)->unique();
            $table->text('description');
        });
        Schema::create('armors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->unique();
            $table->smallInteger('price')->unsigned();
            $table->enum('type', ['Light', 'Medium', 'Heavy', 'Shield', 'Barding']);
            $table->enum('group', ['Cloth', 'Chain', 'Composite', 'Leather', 'Plate', 'Wood', 'Other'])->nullable();
            $table->string('bulk')->nullable();
            $table->smallInteger('weight')->unsigned()->nullable();
            $table->text('description')->nullable();
        });
        Schema::create('weapons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->unique();
            $table->smallInteger('price')->unsigned()->nullable();
            $table->string('bulk', 1)->nullable();
            $table->smallInteger('hands')->unsigned()->nullable();
            $table->enum('group', ['Axe', 'Bow', 'Brawling', 'Club', 'Dart', 'Flail', 'Hammer', 'Knife', 'Pick', 'Polearm', 'Shield', 'Sling', 'Spear', 'Sword', 'Exotic']);
            $table->enum('type', ['Simple Melee', 'Martial Melee', 'Simple Ranged', 'Martial Ranged', 'Uncommon Simple Melee', 'Uncommon Martial Melee', 'Uncommon Exotic Melee', 'Uncommon Martial Ranged']);
            $table->text('description')->nullable();
        });
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->smallInteger('price')->unsigned();
            $table->string('bulk', 1)->nullable();
            $table->smallInteger('hands')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('equipments');
            $table->text('description')->nullable();
        });
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->text('description')->nullable();
            $table->string('price', 100)->nullable();
            $table->enum('rarity', ['Ubiquitous', 'Common', 'Uncommon', 'Rare', 'Very Rare', 'Legendary'])->nullable();
            $table->string('type')->nullable();
            $table->text('source')->nullable();
            $table->text('alchemy')->nullable();
            $table->text('armor')->nullable();
            $table->text('weapon')->nullable();
            $table->text('other')->nullable();
        });
        Schema::create('materialables', function (Blueprint $table) {
            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materials');
            $table->morphs('materialable');
            $table->string('quantity', 40)->nullable();
            $table->string('price', 100)->nullable();
            $table->string('meta')->nullable();

            $table->primary(['material_id', 'materialable_id', 'materialable_type'], 'materialable_id');
        });
        Schema::create('skills', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 50);
            $table->text('description');
            $table->smallInteger('attribute_id')->unsigned();
            $table->foreign('attribute_id')->references('id')->on('attributes')
                ->onDelete('cascade');
            $table->text('untrained_uses')->nullable();
            $table->text('trained_uses')->nullable();
            $table->boolean('armor_penalty')->default(0);
            $table->boolean('specified')->default(0);
        });
        Schema::create('sub_skills', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallInteger('skill_id')->unsigned();
            $table->foreign('skill_id')->references('id')->on('skills')
                ->onDelete('cascade');
            $table->string('name', 50);
            $table->enum('action_type', ['Triple Action', 'Double Action', 'Action', 'Reaction', 'Free', 'Varies'])->nullable();
            $table->string('trigger')->nullable();
            $table->string('requirements')->nullable();
            $table->text('description');
            $table->text('success')->nullable();
            $table->text('critical_success')->nullable();
            $table->text('failure')->nullable();
            $table->text('critical_failure')->nullable();
            $table->boolean('trained_only')->default(0);
        });

        Schema::create('pantheons', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->tinyInteger('order')->unsigned()->nullable();
        });
        Schema::create('gods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->enum('level', [
                'Greater', 'Intermediate', 'Lesser', 'Demi', 'Hero',
                'Archdevil', 'Devil',
                'Demon Lord', 'Demon',
                'Altraloth', 'Yugoloth',
                'Solar', 'Tome Archon', 'Archon',
                'Gaurdinal Paragon', 'Guardinal',
                'Slaad Lord', 'Slaad',
                'Prime', 'Modron',
                'Fey Lord', 'Archfey',
                'Archomental',
                'Dead',
            ]);
            $table->string('sub_level', '15')->nullable();
            $table->text('description')->nullable();
            $table->softDeletes();
        });
        Schema::create('god_pantheon', function (Blueprint $table) {
            $table->integer('god_id')->unsigned();
            $table->foreign('god_id')->references('id')->on('gods')
                ->onDelete('cascade');
            $table->smallInteger('pantheon_id')->unsigned();
            $table->foreign('pantheon_id')->references('id')->on('pantheons')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('title')->nullable();
            $table->enum('level', [
                'Greater', 'Intermediate', 'Lesser', 'Demi', 'Hero',
                'Archdevil', 'Duke of Hell', 'Devil',
                'Demon Lord', 'Demon',
                'Altraloth', 'Yugoloth',
                'Solar', 'Tome Archon', 'Archon',
                'Guardinal Paragon', 'Guardinal',
                'Slaad Lord', 'Slaad',
                'Prime', 'Modron',
                'Fey Lord', 'Archfey',
                'Archomental',
                'Dead', 'Departed',
            ]);
            $table->string('aliases', 120)->nullable();
            $table->string('portfolio')->nullable();
            $table->string('alignment', 7)->nullable();
            $table->string('symbol', 200)->nullable();
            $table->string('favored_weapon', 100)->nullable();
            $table->string('regions')->nullable();
            $table->integer('master_id')->unsigned()->nullable();
            $table->foreign('master_id')->references('god_id')->on('god_pantheon')
                ->onDelete('cascade');
            $table->text('description')->nullable();

            $table->primary(['god_id', 'pantheon_id', 'name']);
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

        Schema::dropIfExists('attributes');
        Schema::dropIfExists('attributables');
        Schema::dropIfExists('types');
        Schema::dropIfExists('alphabets');
        Schema::dropIfExists('languages');
        Schema::dropIfExists('races');
        Schema::dropIfExists('sub_races');
        Schema::dropIfExists('backgrounds');
        Schema::dropIfExists('actions');
        Schema::dropIfExists('conditions');
        Schema::dropIfExists('armors');
        Schema::dropIfExists('weapons');
        Schema::dropIfExists('equipments');
        Schema::dropIfExists('materials');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('sub_skills');
        Schema::dropIfExists('pantheons');
        Schema::dropIfExists('gods');
        Schema::dropIfExists('god_pantheon');

        Schema::enableForeignKeyConstraints();
    }
}
