<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buktis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pesanan_id');
            $table->integer('user_id');
            $table->string('name_user');
            $table->integer('kode');
            $table->string('name_gambar');
           
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
        Schema::dropIfExists('buktis');
    }
}
