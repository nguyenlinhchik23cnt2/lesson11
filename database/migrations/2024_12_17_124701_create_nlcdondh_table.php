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
        Schema::create('nlcdondh', function (Blueprint $table) {
           // $table->id();
            //$table->timestamps();
            $table->string('nlcsodh')->primary();
            $table->date('nlcngaydh');
            $table->string('nlcnanhacc');
            $table->foreign('nlcnanhacc')->references('nlcnanhacc')->on('nlcnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nlcdondh');
    }
};
