<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->timestamp('created_at')->nullable();           
            $table->unsignedBigInteger('emp_id');
            $table->unsignedBigInteger('stock_id');
            $table->integer('todays_qty');
            $table->integer('price');
            $table->integer('discount'  )->nullable();
            $table->integer('netprice')->nullable();

            
        });
   
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
