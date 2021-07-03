<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->timestamp('created_at')->nullable();  
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('packet_id');
            // $table->date('mfg_date');
            // $table->date('exp_date');
            $table->float('price', 8, 2)->nullable();
            $table->string('product_route')->nullable();
            $table->integer('todays_stock')->nullable();
           // $table->integer('receiving_stock')->nullable();
            $table->integer('sample_issue')->nullable();
            $table->integer('broken')->nullable();
            $table->integer('todays_sales')->nullable();
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
        Schema::dropIfExists('stocks');
    }
}
