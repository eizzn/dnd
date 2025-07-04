<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PfBase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeables', function (Blueprint $table) {
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')
                ->onDelete('cascade');
            $table->morphs('typeable');
            $table->smallInteger('level')->unsigned()->nullable();

            $table->primary(['type_id', 'typeable_type', 'typeable_id']);
        });
        Schema::create('skillables', function (Blueprint $table) {
            $table->smallInteger('skill_id')->unsigned();
            $table->foreign('skill_id')->references('id')->on('skills')
                ->onDelete('cascade');
            $table->morphs('skillable');
            $table->smallInteger('dc')->unsigned()->nullable();
            $table->string('meta', 100)->nullable();

            $table->primary(['skill_id', 'skillable_type', 'skillable_id']);
        });

        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->string('key_attribute', 30)->nullable();
            $table->smallInteger('hit_dice')->unsigned()->nullable();
            $table->smallInteger('skill_points')->nullable();
            $table->smallInteger('skill_progress')->unsigned()->nullable();
            $table->string('armors')->nullable();
            $table->string('weapons')->nullable();
            $table->boolean('has_spells')->default(0);
            $table->boolean('has_powers')->default(0);
            $table->text('description')->nullable();
            $table->text('requirements')->nullable();
            $table->tinyInteger('max_level')->unsigned()->default(20);
        });

        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 50)->unique();
            $table->string('name', 50);
            $table->string('requirements')->nullable();
            $table->text('description');
        });
        Schema::create('featureables', function (Blueprint $table) {
            $table->integer('feature_id')->unsigned();
            $table->foreign('feature_id')->references('id')->on('features');
            $table->morphs('featureable');
            $table->smallInteger('level')->unsigned()->default(0);
            $table->tinyInteger('idx')->unsigned()->default(0);
            $table->text('meta')->nullable();

            $table->primary(['feature_id', 'featureable_id', 'featureable_type', 'level', 'idx'], 'featureable_primary_key');
        });
        Schema::create('class_spell_slots', function (Blueprint $table) {
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->tinyInteger('level')->unsigned();
            $table->tinyInteger('known')->unsigned()->nullable();
            $table->tinyInteger('preparable')->unsigned()->nullable();
            $table->tinyInteger('cantrips')->unsigned()->nullable();
            $table->tinyInteger('slots')->unsigned()->nullable();
            $table->tinyInteger('zero')->unsigned()->nullable();
            $table->tinyInteger('one')->unsigned()->nullable();
            $table->tinyInteger('two')->unsigned()->nullable();
            $table->tinyInteger('three')->unsigned()->nullable();
            $table->tinyInteger('four')->unsigned()->nullable();
            $table->tinyInteger('five')->unsigned()->nullable();
            $table->tinyInteger('six')->unsigned()->nullable();
            $table->tinyInteger('seven')->unsigned()->nullable();
            $table->tinyInteger('eight')->unsigned()->nullable();
            $table->tinyInteger('nine')->unsigned()->nullable();
            $table->tinyInteger('max_slot_level')->unsigned()->nullable();

            $table->primary(['class_id', 'level']);
        });

        Schema::create('feats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->enum('action_type', ['Triple Action', 'Double Action', 'Action', 'Reaction', 'Free', 'Special'])->nullable();
            $table->string('requirement', 200)->nullable();
            $table->string('trigger', 200)->nullable();
            $table->string('short_description')->nullable();
            $table->text('description');
        });
        Schema::create('feat_feat', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('feats')
                ->onDelete('cascade');
            $table->integer('child_id')->unsigned();
            $table->foreign('child_id')->references('id')->on('feats')
                ->onDelete('cascade');

            $table->primary(['parent_id', 'child_id']);
        });

        Schema::create('talents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->enum('action_type', ['Triple Action', 'Double Action', 'Action', 'Reaction', 'Free'])->nullable();
            $table->string('requirement', 200)->nullable();
            $table->string('trigger', 200)->nullable();
            $table->text('description');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('talents');
        });

        Schema::create('spells', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->text('description');
            $table->enum('rarity', ['Common', 'Uncommon', 'Rare', 'Unique'])->default('Common');
            $table->string('casting', 100)->nullable();
            $table->string('range', 90)->nullable();
            $table->string('area', 90)->nullable();
            $table->string('targets', 100)->nullable();
            $table->string('duration', 70)->nullable();
            $table->string('save_attribute', 10)->nullable();
            $table->text('saves')->nullable();
            $table->text('heightened')->nullable();
            $table->text('requirements')->nullable();
            $table->string('spell_creator', 50)->nullable();
            $table->smallInteger('default_level')->unsigned();
        });
        Schema::create('featables', function (Blueprint $table) {
            $table->integer('feat_id')->unsigned();
            $table->foreign('feat_id')->references('id')->on('feats');
            $table->morphs('featable');
            $table->smallInteger('level')->unsigned()->nullable();
            $table->string('meta')->nullable();

            $table->primary(['feat_id', 'featable_id', 'featable_type']);
        });

        Schema::create('powers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->text('description');
            $table->string('requirements')->nullable();
            $table->text('action_type', 40)->nullable();
            $table->string('display')->nullable();
            $table->string('range', 80)->nullable();
            $table->string('area', 80)->ullable();
            $table->string('targets', 70)->nullable();
            $table->string('duration', 50)->nullable();
            $table->string('save_attribute', 10)->nullable();
            $table->text('saves')->nullable();
            $table->text('heightened')->nullable();
            $table->smallInteger('default_level')->unsigned()->nullable();
        });
        Schema::create('power_power', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('powers')
                ->onDelete('cascade');
            $table->integer('child_id')->unsigned();
            $table->foreign('child_id')->references('id')->on('powers')
                ->onDelete('cascade');

            $table->primary(['parent_id', 'child_id']);
        });
        Schema::create('class_power_metas', function (Blueprint $table) {
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->tinyInteger('level')->unsigned();
            $table->smallInteger('points')->unsigned();
            $table->tinyInteger('known')->unsigned();
            $table->tinyInteger('max_level_power')->unsigned();

            $table->primary(['class_id', 'level']);
        });

        Schema::create('god_class', function (Blueprint $table) {
            $table->integer('god_id')->unsigned();
            $table->foreign('god_id')->references('god_id')->on('god_pantheon')
                ->onDelete('cascade');
            $table->smallInteger('pantheon_id')->unsigned()->default(1);
            $table->foreign('pantheon_id')->references('id')->on('pantheons')
                ->onDelete('cascade');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes')
                ->onDelete('cascade');
            $table->tinyInteger('level')->unsigned();
            $table->string('meta')->nullable();

            $table->primary(['god_id', 'class_id', 'pantheon_id'], 'god_class_primary_key');
        });
        Schema::create('god_worship_class', function (Blueprint $table) {
            $table->integer('god_id')->unsigned();
            $table->foreign('god_id')->references('god_id')->on('god_pantheon')
                ->onDelete('cascade');
            $table->smallInteger('pantheon_id')->unsigned()->default(1);
            $table->foreign('pantheon_id')->references('id')->on('pantheons')
                ->onDelete('cascade');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes')
                ->onDelete('cascade');
            $table->tinyInteger('multiclass_group')->unsigned()->default(0);
            $table->string('meta', 50)->nullable();

            $table->primary(['god_id', 'class_id', 'pantheon_id', 'multiclass_group'], 'god_worship_class_primary_key');
        });
        Schema::create('god_pieties', function (Blueprint $table) {
            $table->integer('god_id')->unsigned();
            $table->foreign('god_id')->references('id')->on('gods')
                ->onDelete('cascade');
            $table->smallInteger('pantheon_id')->unsigned();
            $table->foreign('pantheon_id')->references('id')->on('pantheons')
                ->onDelete('cascade');
            $table->text('favor')->nullable();
            $table->text('devotion')->nullable();
            $table->text('earn_piety');
            $table->text('lose_piety');
            $table->text('piety3');
            $table->text('piety10');
            $table->text('piety25');
            $table->text('piety50');

            $table->primary(['god_id', 'pantheon_id']);
        });

        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 70)->unique();
            $table->string('name', 120)->unique();
            $table->string('type', 20);
            $table->text('metas')->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('formulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->enum('type', ['Alchemical', 'Armor', 'Item', 'Ring', 'Rune', 'Construct', 'Infusion', 'Snare', 'Tattoo', 'Acid', 'Poison', 'Drug', 'Potion', 'Oil', 'Elixir', 'Elemental Infusion', 'Graft', 'Weapon']);
            $table->smallInteger('level')->unsigned()->nullable();
            $table->enum('rarity', ['Common', 'Uncommon', 'Rare', 'Legendary'])->default('Common');
            $table->string('price', 45)->nullable();
            $table->string('crafting_time', 25)->nullable();
            $table->string('method', 100)->nullable();
            $table->string('activation', 150)->nullable();
            $table->string('bulk', 1)->nullable();
            $table->string('meta')->nullable();
            $table->text('crafting')->nullable();
            $table->text('description');
        });

        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 50)->unique();
            $table->string('name', 50)->unique();
            $table->string('description')->nullable();
        });
        Schema::create('propertyables', function (Blueprint $table) {
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');
            $table->morphs('propertyable');
            $table->string('conditions')->nullable();
            $table->string('value')->nullable();
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->text('description');
            $table->smallInteger('order')->unsigned()->default(0);
        });
        Schema::create('rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 50);
            $table->string('name', 50);
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('pages');
            $table->text('description');
            $table->smallInteger('order')->unsigned()->default(0);
        });

        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->text('details');
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

        Schema::dropIfExists('typeables');
        Schema::dropIfExists('skillables');

        Schema::dropIfExists('properties');
        Schema::dropIfExists('propertyable');

        Schema::dropIfExists('classes');
        Schema::dropIfExists('class_spell_slots');

        Schema::dropIfExists('features');
        Schema::dropIfExists('featureables');

        Schema::dropIfExists('feats');
        Schema::dropIfExists('feat_feat');
        Schema::dropIfExists('feat_req');
        Schema::dropIfExists('talents');

        Schema::dropIfExists('spells');
        Schema::dropIfExists('powers');
        Schema::dropIfExists('class_power_metas');
        Schema::dropIfExists('featables');

        Schema::dropIfExists('god_class');
        Schema::dropIfExists('god_worship_class');
        Schema::dropIfExists('god_pieties');

        Schema::dropIfExists('pages');
        Schema::dropIfExists('rules');
        Schema::dropIfExists('templates');

        Schema::dropIfExists('formulas');

        Schema::dropIfExists('organizations');

        Schema::enableForeignKeyConstraints();
    }
}
