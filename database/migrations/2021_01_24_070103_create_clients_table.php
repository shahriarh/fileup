<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->nullable;
            $table->string('phone');
            $table->string('address');
            $table->string('shopname')->nullable;
            $table->string('photo')->nullable;
            $table->string('acc_holder')->nullable;
            $table->string('acc_number')->nullable;
            $table->string('bank_name')->nullable;
            $table->string('bank_branch')->nullable;
            $table->string('city')->nullable;
            $table->unsignedBigInteger('emp_id')->nullable;
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
        Schema::dropIfExists('clients');
    }
}
