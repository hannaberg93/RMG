<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('article_id');
            $table->longtext('message');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->boolean('confirmed')->default(false);
            $table->boolean('expired')->default(false);
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
       Schema::dropIfExists('bookings');
   }
}
