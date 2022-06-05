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
            $table->string('name')->nullable();
            $table->string('pdf')->nullable();
            $table->string('price')->nullable();
            $table->text('compostion')->nullable();
            $table->text('indication')->nullable();
            $table->text('dosage')->nullable();
            $table->text('contraindication')->nullable();
            $table->text('effects')->nullable();
            $table->text('precaution')->nullable();
            $table->text('interaction')->nullable();
            $table->text('withdral')->nullable();
            $table->text('storage')->nullable();
            $table->text('supply')->nullable();
            $table->text('overdoge')->nullable();
            $table->text('safety')->nullable();
            $table->text('desc')->nullable();
            $table->text('others')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
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