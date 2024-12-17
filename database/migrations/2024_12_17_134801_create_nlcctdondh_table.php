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
        Schema::create('nlcctdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nlcsodh');
            $table->string('nlcmavattu');
            $table->integer('nlcsldat');
            //tao khoa chinh
            $table->primary(['nlcsodh','nlcmavattu']);
            // Khóa ngoại
            $table->foreign('tvcsodh')->references('nlcsodh')->on('nlcdondh');
            $table->foreign('nlcmavattu')->references('nlcmavattu')->on('nlcvattu');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nlcctdondh');
    }
};
