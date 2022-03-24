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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('namatoko',50);
            $table->integer('gas3kg');
            $table->integer('gas12kg');
            $table->integer('gas50kg');
            $table->date('tglkirim');
            $table->string('pembayaran',15);
            $table->timestamps();
            $table->unsignedBigInteger('iduser');

            $table->foreign('iduser')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
