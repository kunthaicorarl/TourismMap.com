<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewTourismPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourism_places', function (Blueprint $table) {
               $table->increments('id');
               $table->integer('province_id')->unsign();
               $table->integer('client_id')->unsign();
               $table->integer('image_id')->unsigned();
               $table->string('title_khmer');
               $table->string('title_english');
               $table->text('thumbnail');
               $table->text('video');
               $table->boolean('status');
               $table->string('address_khmer');
               $table->string('address_english');
               $table->string('description_khmer');
               $table->string('description_english');
                $table->double('latitude');
                 $table->double('longitude');
               $table->timestamps();
               $table->foreign('client_id')
             ->reference('id')
             ->on('clients')
             ->onDelete('cascade');
             $table->foreign('image_id')
             ->reference('id')
             ->on('images')
             ->onDelete('cascade');
              $table->foreign('province_id')
             ->reference('id')
             ->on('provinces')
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
      Schema::dropIfExists('tourism_places');
    }
}
