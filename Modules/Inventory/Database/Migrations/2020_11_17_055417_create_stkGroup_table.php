<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStkGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stkGroup', function (Blueprint $table) {
            $table->bigIncrements('group_id');
            $table->string('code');
            $table->string('description');
            $table->integer('sales_ledger_id');
            $table->integer('purchase_ledger_id');
            $table->integer('adjustment_ledger_id');
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
        Schema::dropIfExists('stkGroup');
    }
}
