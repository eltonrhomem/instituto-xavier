<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ix_aluno_c', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nmaluno', 100);
            $table->string('nomeguerra', 100);
            $table->date('datanascimento');
            $table->char('tiposanguineo', 3);
            $table->char('sexo', 1);
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
        Schema::dropIfExists('ix_aluno_c');
    }
}
