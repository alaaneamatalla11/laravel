<?php

use App\Models\project;
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

        Schema::create('environments', function (Blueprint $table) {
            $table->id();
            // $table->integer('project_id');
            // $table->foreignIdFor(Project::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Project::class)->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('environments');
    }
};
