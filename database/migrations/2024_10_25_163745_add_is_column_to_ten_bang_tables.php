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
        Schema::table('tenBang', function (Blueprint $table) {
            $table->string('email')->unique();
            $table->integer('heSoLuong')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tenBang', function (Blueprint $table) {
            $table->dropColumn('heSoLuong');
        });
    }    
};
