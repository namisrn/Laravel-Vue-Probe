<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitarbeitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('mitarbeiters', function (Blueprint $table) {
        $table->id();
        $table->string('vorname');
        $table->string('nachname');
        $table->string('email'); //->unique()
        $table->foreignId('firmen_id')->unsigned();  //->references('firmen_id')->on('firmas');
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
        Schema::dropIfExists('mitarbeiters');
    }
}
