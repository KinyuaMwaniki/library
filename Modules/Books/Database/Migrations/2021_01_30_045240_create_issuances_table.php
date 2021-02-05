<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issuances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('book_id')->unsigned()->index();
            $table->unsignedBigInteger('student_id')->unsigned()->index();
            $table->unsignedBigInteger('user_id')->unsigned()->index();
            $table->date('date_issued');
            $table->date('date_expected');
            $table->date('date_returned')->nullable();
            $table->unsignedBigInteger('received_by_id')->nullable();

            $table->timestamps();

            $table->foreign('book_id')
            ->references('id')
            ->on('books')
            ->onDelete('cascade');
  
            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade');
  
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issuances');
    }
}
