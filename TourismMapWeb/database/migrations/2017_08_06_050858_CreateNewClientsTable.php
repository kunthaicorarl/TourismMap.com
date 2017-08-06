<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_type_id')->unsigned();
            $table->string('title_khmer');
            $table->string('title_english');
            $table->string('address_khmer');
            $table->string('address_english');
            $table->string('description_khmer');
            $table->string('description_english');
            $table->text('thumbnail');
            $table->text('thumbnail');
            $table->boolean('status');
            $table->integer('image_id')->unsigned();
            $table->foreign('client_type_id')
                  ->reference('id')
                  ->on('client_types')
                  ->onDelete('cascade');
            $table->foreign('image_id')
                  ->reference('id')
                  ->on('images')
                  ->onDelete('cascade');
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
