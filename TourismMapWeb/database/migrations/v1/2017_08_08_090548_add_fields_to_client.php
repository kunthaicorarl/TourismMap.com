<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
                $table->string('address_khmer');
          $table->string('address_english');
                       $table->string('description_khmer');
          $table->string('description_english');
            $table->foreign("image_id")
                  ->reference('id').on('images');
           });
           $table->boolean('boolean');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
