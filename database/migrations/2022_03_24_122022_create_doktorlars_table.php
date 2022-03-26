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
        Schema::create('doktorlars', function (Blueprint $table) {
            $table->id();
            $table->string('isim');
            $table->string('image');
            $table->string('egitimler')->nullable();
            $table->string('telefon');
            $table->string('mail');
            $table->string('randevulink');
            $table->string('dogumyeri');
            $table->date('dogumtarihi');
            $table->string('uzmanlikalani')->nullable();
            $table->string('deneyim')->nullable();
            $table->string('uyelikler')->nullable();
            $table->string('kongreler')->nullable();
            $table->string('kategori');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('doktorlars');
    }
};
