<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->bigIncrements('pemberi_komentar_id');
            $table->string('isi');
            $table->date('tanggal_dibuat');
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
        Schema::dropIfExists('komentar');
    }
}
