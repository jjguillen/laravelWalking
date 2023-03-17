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
        Schema::create('sendero_grupo', function (Blueprint $table) {
            $table->foreignId('sendero_id')->constrained('senderos');
            $table->foreignId('grupo_id')->constrained('grupos');
            $table->date('fecha');
            $table->text('descripcion')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
            $table->primary(['sendero_id', 'grupo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sendero_grupo');
    }
};
