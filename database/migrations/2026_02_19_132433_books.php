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
        Schema::create("books", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->integer("ISBN");
            $table->integer("copiasDisponibles");
            $table->boolean("estado")->default(true);
        });

        Schema::create("loans", function (Blueprint $table) {
            $table->id();   
            $table->string("nombreSolicitante");
            $table->dateTime("fechaHoraPrestamo");
            $table->foreignId("book_id")->references("id")->on("books");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("loans", function (Blueprint $table) {
            $table->dropForeign(["book_id"]);

        });
    }
};
