<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->index();
            
            $table->string('phone')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('address')->nullable()->index();
            $table->string('logo_url')->nullable();
            $table->string('note')->nullable();

            $table->timestamps(); // Thêm index thủ công cho $table->timestamps();
            $table->softDeletes(); // Thêm cột deleted_at
            
            $table->index('created_at');
            $table->index('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
