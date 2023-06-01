<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('drop_spots', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_lokasi')->unsigned();
            $table->foreign('id_lokasi')
                ->references('id')
                ->on('lokasis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string("nama_dropspot", 191);
            $table->string("no_telp_pj", 191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drop_spots');
    }
};
