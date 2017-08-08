<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourismPlacesTable extends Migration
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
               $table->string('title_khmer');
             $table->string('title_english');
             $table->text('thumbnail');
           $table->integer('image_id')->unsigned();
            $table->timestamps();
             $table->foreign('client_type_id')
             ->reference('id')
             ->on('client_types')
             ->onDelete('cascade');
            
           $table->foreign('image_id')
             ->reference('id')
             ->on('images')
             ->onDelete('cascade');
            $table->timestamps();
                        $table->text('video');
               $table->boolean('status');
                                   $table->string('address_khmer');
           $table->string('address_english');
                       $table->string('description_khmer');
           $table->string('description_english');
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
