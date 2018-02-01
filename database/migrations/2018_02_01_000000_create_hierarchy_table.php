<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHierarchyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // NOTE: The 'co' prefix comes from ISO3166 country code for Colombia
        Schema::create('co_levels', function( Blueprint $table ) {
            $table->increments('level');
            $table->string('name');
        });
        Schema::create('co_elements', function( Blueprint $table ) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->integer('level')->unsigned()->index()->nullable();
            $table->string('name');

            // Relationships
            $table->foreign('parent_id')->references('id')->on('co_elements');
            $table->foreign('level')->reference('id')->on('co_levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_levels');
        Schema::dropIfExists('co_elements');
    }
}
