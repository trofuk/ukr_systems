<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('text_1');
            $table->text('text_2');
            $table->text('image_1', 100);
            $table->text('image_2', 100);
            $table->text('image_3', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabs');
    }
}
