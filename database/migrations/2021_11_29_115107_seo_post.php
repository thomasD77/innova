<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeoPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('posts', function($table) {
            $table->string('description')->nullable();
            $table->string('alternativeTitle')->nullable();
            $table->string('keywords')->nullable();
            $table->string('url')->nullable();
            $table->integer('wordCount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('posts', function($table) {
            $table->dropColumn('description');
            $table->dropColumn('alternativeTitle');
            $table->dropColumn('keywords');
            $table->dropColumn('url');
            $table->dropColumn('wordCount');
        });
    }
}
