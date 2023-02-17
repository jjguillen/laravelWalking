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
        Schema::create('user_grupo', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('grupo_id')->constrained('grupos');
            $table->timestamps();
            $table->primary([ 'user_id' , 'grupo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_grupo');
    }
};
