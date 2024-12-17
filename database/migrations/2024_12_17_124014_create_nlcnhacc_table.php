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
        Schema::create('nlcnhacc', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nlcnanhacc')->primary();
            $table->string('nlctennhacc');
            $table->string('nlcdiachi');
            $table->string('nlcdienthoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nlcnhacc');
    }
};
