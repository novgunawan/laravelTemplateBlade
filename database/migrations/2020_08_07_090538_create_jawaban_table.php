<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi');
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbaharui');
            $table->integer('benar_value_id');
            
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('profile_id')->references('profile_id')->on('profiles');
            $table->foreign('category_id')->references('category_id')->on('category');
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
        Schema::table('pertanyaan', function (Blueprint $table){
            $table->dropForeign('profile_id');
            $table->dropForeign('category_id');

            $table->dropColumn('profile_id');
            $table->dropColumn('category_id');
        });
        Schema::dropIfExists('jawaban');
    }
}
