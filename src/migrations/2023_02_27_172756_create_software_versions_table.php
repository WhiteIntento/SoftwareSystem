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
        Schema::create('software_versions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("software_id")->references("id")->on("softwares");
            $table->string("version");
            $table->string("file_path",1000);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_version');
    }
};
