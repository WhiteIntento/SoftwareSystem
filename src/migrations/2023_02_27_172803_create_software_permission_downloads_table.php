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
        Schema::create('software_permission_downloads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("software_id");
            $table->unsignedBigInteger("software_permission_id");
            $table->integer("count");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_permission_downloads');
    }
};
