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
        Schema::create('saints', function (Blueprint $table) {
            
            $table -> id();

            $table -> string('name', 32);
            $table -> string('birdPlace', 32);
            $table -> date('blessingDate');
            $table -> integer('miracleCount') -> unsigned();

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saints');
    }
};
