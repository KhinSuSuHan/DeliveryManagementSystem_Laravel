<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduleorders', function (Blueprint $table) {
            $table->id();
           $table->string('name');
            $table->string('phoneno');
            $table->text('address');
            $table->date('date');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('weight_id');
            $table->unsignedBigInteger('size_id');
            $table->integer('total');
            $table->timestamps();

              $table->foreign('location_id')
                    ->references('id')
                    ->on('locations')
                    ->onDelete('cascade');

              $table->foreign('type_id')
                    ->references('id')
                    ->on('types')
                    ->onDelete('cascade');

              $table->foreign('weight_id')
                    ->references('id')
                    ->on('expresses')
                    ->onDelete('cascade');

              $table->foreign('size_id')
                    ->references('id')
                    ->on('boxes')
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
        Schema::dropIfExists('scheduleorders');
    }
}
