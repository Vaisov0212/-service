<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RealitionShopCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //begin add index shoppings
        Schema::table('shoppings',function(Blueprint $table){
            $table->unsignedBigInteger('id_cat')->index()->after('id');
            $table->foreign('id_cat')->references('id')->on('category');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         //begin add index shoppings
         Schema::table('shoppings',function(Blueprint $table){
            $table->dropColumn('id_cat');

        });
    }
}
