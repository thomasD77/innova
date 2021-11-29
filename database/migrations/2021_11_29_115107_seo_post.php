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
            $table->string('seo_description')->nullable();
            $table->string('seo_alternativeTitle')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_url')->nullable();
            $table->integer('seo_wordCount')->default(0);
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
            $table->dropColumn('seo_description');
            $table->dropColumn('seo_alternativeTitle');
            $table->dropColumn('seo_keywords');
            $table->dropColumn('seo_url');
            $table->dropColumn('seo_wordCount');
        });
    }
}
