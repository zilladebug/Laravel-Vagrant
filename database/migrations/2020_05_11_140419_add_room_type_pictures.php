<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoomTypePictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_types', function(Blueprint $table) {
            $table->longText('picture')->comment('The Picture file path')
            ->after('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /** running the schema, creates a new table in the database */
        Schema::table('room_types', function(Blueprint $table) {
            $table->dropColumn('picture');
        });
    }
}
