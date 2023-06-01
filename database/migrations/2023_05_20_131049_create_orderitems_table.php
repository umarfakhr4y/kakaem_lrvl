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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id();
            $table->string("no_order", 191);
            $table->string("status", 191);
            $table->integer("quantity");
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('data_id')->unsigned();
            $table->foreign('data_id')
                ->references('id')
                ->on('datas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('makanan_id')->unsigned();
            $table->foreign('makanan_id')
                ->references('id')
                ->on('makanans')
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
        Schema::dropIfExists('orderitems');
    }
};
