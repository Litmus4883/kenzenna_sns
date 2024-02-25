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
        Schema::create('follows', function (Blueprint $table) {
            $table->foreignId('follower_id')->constraint()
                    ->cascadeOnDelete()->cascadeOnDelete();
            $table->foreignId('followee_id')->constraint()
                    ->cascadeOnDelete()->cascadeOnDelete();
            $table->timestamps();
            # 複合キーの追加
            $table->primary(['follower_id', 'followee_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};
