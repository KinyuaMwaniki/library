<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('model_id')->unsigned()->index();
            $table->string('policy');
            $table->string('value');
            $table->string('postfix')->nullable();
            $table->string('second_value')->nullable();
            $table->string('exceptions')->nullable();
            $table->text('description');
            $table->boolean('enabled');
            $table->timestamps();

            $table->foreign('model_id')
                ->references('id')
                ->on('models')
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
        Schema::dropIfExists('settings');
    }
}
