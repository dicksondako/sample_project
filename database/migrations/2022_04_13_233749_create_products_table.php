<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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

            $table->foreignId(column: 'supplier_id')->constrained();
            $table->string(column: 'title');
            $table->longText(column: 'description');
            $table->string(column: 'qty');
            $table->string(column: 'size');
            $table->boolean(column: 'status')->default(true);

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
};

//Designed by Dickson Dako
//micro-project
