<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListPromosi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_promosi', function (Blueprint $table) {
            $table->id();
            $table->string('judul_promosi',100);
            $table->string('penulis',25);
            $table->string('periode',150); 
            $table->char('syarat',1500);
            $table->char('foto',50);
            $table->string('deskripsi',1000);
            $table->char('kontak',200);
            $table->timestamp('createdAt')->useCurrent();
            $table->timestamp('updatedAt')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_promosi');
    }
}
