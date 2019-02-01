<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTest2STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('test2s', function (Blueprint $table) {
            $table->dropColumn('l_name2');

            $table->string('des')->nullable();

            $table
                ->string('l_name', 20)
                ->nullable()
                ->change();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test2s', function ($table) {
            $table->string('l_name2');
        });
    }
}
