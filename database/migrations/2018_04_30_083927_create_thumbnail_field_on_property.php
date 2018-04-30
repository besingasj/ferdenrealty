<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThumbnailFieldOnProperty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("properties", function(Blueprint $table) {
            $table->text('thumbnail')->nullable()->after('featured_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("properties", function(Blueprint $table) {
            $table->dropColumn(['thumbnail']);
        });
    }
}
