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
        Schema::create('tm_pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nip', 20)->unique();
            $table->text('alamat');
            $table->integer('status')->default('0')->comment('1=not_active,0=active');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tm_pegawais');
    }
};
