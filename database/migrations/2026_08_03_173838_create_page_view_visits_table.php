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
       Schema::create('page_view_visits', function (Blueprint $table) {
            $table->id();

            $table->string('page');
            $table->string('fingerprint', 64);
            $table->timestamp('viewed_at');

            $table->index(['page', 'fingerprint']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_view_visits');
    }
};
