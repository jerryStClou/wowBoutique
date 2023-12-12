<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("nameProduct");
            $table->longText("description");
            $table->float("prix");
            $table->string("pictureFirst");
            $table->integer("quantityProduct");
            $table->foreignId("idCategory")->constrained("categories","id")->onDelete("cascade");
            $table->foreignId("idUser")->constrained("users","id")->onDelete("cascade");
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
        Schema::dropIfExists('products');
    }
}
