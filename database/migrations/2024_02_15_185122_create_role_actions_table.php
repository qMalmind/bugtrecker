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
        Schema::create('role_actions', function (Blueprint $table) {
            $table->id("");
            
            $table->unsignedInteger("id_role");
            $table->foreign("id_role")->references("id_role")->on("id_role")->onDelete('cascade');

            $table->unsignedInteger("id_action");
            $table->foreign("id_action")->references("id_action")->on("id_action")->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_actions');
    }
};
