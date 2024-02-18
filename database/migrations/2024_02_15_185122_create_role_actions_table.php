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
            $table->id("id_role_action");
            
            $table->unsignedBigInteger("id_role");
            $table->foreign("id_role")->references("id_role")->on("roles")->onDelete('cascade');

            $table->unsignedBigInteger("id_action");
            $table->foreign("id_action")->references("id_action")->on("actions")->onDelete('cascade');

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
