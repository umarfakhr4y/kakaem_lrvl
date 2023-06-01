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
        Schema::create('minumans', function (Blueprint $table) {
            $table->id();
            $table->string("name_barang", 191);
            $table->integer("stock_barang");
            $table->string("jenis_barang", 191);
            $table->integer("harga_barang");
            // $table->index('data_id')->unsigned();
            // $table->foreign('data_id')
            //     ->references('id')
            //     ->on('data')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->bigInteger('data_id')->unsigned();
            $table->foreign('data_id')
                ->references('id')
                ->on('datas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minumen');
    }
};
