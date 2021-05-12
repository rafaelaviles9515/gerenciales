<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentaGrabadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renta_grabadas', function (Blueprint $table) {
            $table->id();
            $table->integer('ano');
            $table->double('sueldos', 8, 2)->nullable();
            $table->double('profesiones', 8, 2)->nullable();
            $table->double('servicios', 8, 2)->nullable();
            $table->double('comerciales', 8, 2)->nullable();
            $table->double('industriales', 8, 2)->nullable();
            $table->double('agropecuarios', 8, 2)->nullable();
            $table->double('dividendos', 8, 2)->nullable();
            $table->double('otros', 8, 2)->nullable();
            $table->double('total_renta_gravada', 8, 2)->nullable();
            $table->foreignId('contribuyente_id')->constrained('contribuyentes')->onDelete('cascade')->nullable();
            $table->foreignId('departamento_id')->constrained('departamentos')->onDelete('cascade')->nullable();
            $table->foreignId('clase_id')->constrained('clases')->onDelete('cascade')->nullable();
            $table->foreignId('cartera_id')->constrained('carteras')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('renta_grabadas');
    }
}
