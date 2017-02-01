<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChemicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemicals', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('title', 150);
          $table->text('description');
          $table->float('price', 8, 2);
          $table->float('units', 8, 2);
          $table->char('volume', 1);
          $table->char('weight', 1);
          $table->string('imagePath');
          $table->string('imagePath2');
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
    }
}
