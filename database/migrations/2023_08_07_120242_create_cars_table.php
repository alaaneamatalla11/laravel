<?php

use App\Models\Mechanic;
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

        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            // $table->integer('mechanic_id');
            $table->foreignIdFor(Mechanic::class)->nullable()->constrained()->nullOnDelete();
            $table->string('model');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
