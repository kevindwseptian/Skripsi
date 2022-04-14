<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_receiving', function (Blueprint $table) {
            $table->id();
            $table->string("sumber");
            $table->unsignedBigInteger("idreceiving")->references('id')->on('receiving');
            $table->string("jenis");
            $table->string("harga");
            $table->integer("qty");
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
        Schema::dropIfExists('detail_receiving');
    }
};
