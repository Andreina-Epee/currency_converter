<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTauxConvertionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taux_convertion', function (Blueprint $table) {
            $table->id();
            $table->float('taux', 8, 3);
            $table->foreignId('devise1_id')->constrained('devise')->cascadeOnDelete();
            $table->foreignId('devise2_id')->constrained('devise')->cascadeOnDelete();
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
        Schema::dropIfExists('taux_convertion');
    }
}
