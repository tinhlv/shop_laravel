<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->text('name');
        $table->integer('price');
        $table->text('intro');
        $table->text('content');
        $table->string('image');
        $table->integer('category_id')->unsigned();
        $table->foreign('category_id')->references('id')->on('categories');
        $table->timestamps();
      });
      //
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('products');
  }
}
