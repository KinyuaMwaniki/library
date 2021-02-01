<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('author');
            $table->string('isbn')->nullable();
            $table->string('publisher')->nullable();
            $table->unsignedBigInteger('genre_id')->unsigned()->index();
            $table->date('publication_date')->nullable();
            $table->integer('total_stock');
            $table->integer('total_available');
            $table->timestamps();

            $table->foreign('genre_id')
            ->references('id')
            ->on('genres')
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
        Schema::dropIfExists('books');
    }
}
