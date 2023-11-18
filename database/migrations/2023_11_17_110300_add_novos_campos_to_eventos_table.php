<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNovosCamposToEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->boolean('destaque')->default(false);
            $table->integer('ordem_exibicao')->nullable();
            $table->bigInteger('tipo_evento_id')->unsigned()->index();
            $table->foreign('tipo_evento_id')
                ->references('id')
                ->on('tipo_eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventos', function (Blueprint $table) {
            //
        });
    }
}
