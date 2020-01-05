<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesByUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothe_by_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 150);
            $table->boolean('state');
            //por si tiene más de una prenda igual
            $table->bigInteger('stock');

            $table->bigInteger('clothes_categories_id')->unsigned();
            $table->foreign('clothes_categories_id')->references('id')->on('clothe_categories');
           
            $table->bigInteger('clothing_size_id')->unsigned();
            $table->foreign('clothing_size_id')->references('id')->on('clothing_sizes');
           
            $table->bigInteger('clothing_brand_id')->unsigned();
            $table->foreign('clothing_brand_id')->references('id')->on('clothing_brands');
           
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
        Schema::dropIfExists('clothe_by_users');

        Schema::table('clothe_by_users', function(Blueprint $table){
            $table->dropForeign(['clothes_categories_id']);
            $table->dropColumn('clothes_categories_id');
            $table->dropForeign(['clothing_size_id']);
            $table->dropColumn('clothing_size_id');
            $table->dropForeign(['clothing_brand_id']);
            $table->dropColumn('clothing_brand_id');
        }
    );
    }
}
