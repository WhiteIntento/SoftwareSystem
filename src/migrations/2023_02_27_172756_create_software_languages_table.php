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
        Schema::create('software_languages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("software_id")->references("id")->on("softwares");
            $table->unsignedInteger("language_id");
            $table->string("name");
            $table->text("description");

            $table->unique([
                "software_id",
                "language_id"
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_languages');
    }
};
