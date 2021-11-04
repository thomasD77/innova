<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraColsHomePageBuilderTable extends Migration
{
    public $homeCount = 40;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_pages', function (Blueprint $table) {
            //
            for ($i = 21; $i <= $this->homeCount; $i++ ){
                $table->string('input_' . $i )->nullable();
            }

            for ($i = 21; $i <= $this->homeCount; $i++ ){
                $table->text('text_' . $i )->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_pages', function (Blueprint $table) {
            //
            for ($i = 21; $i <= $this->homeCount; $i++ ){
                $table->dropColumn('input_' . $i );
            }

            for ($i = 21; $i <= $this->homeCount; $i++ ){
                $table->dropColumn('text_' . $i );
            }
        });
    }
}
