<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawabanIdToPertanyaans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaans', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_id')->nullable()->default(null);;
            $table->foreign('jawaban_id')->references('id')->on('jawabans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaans', function (Blueprint $table) {
            $table->dropForeign(['jawaban_id']);
            $table->dropTable(['jawaban_id']);
        });
    }
}
