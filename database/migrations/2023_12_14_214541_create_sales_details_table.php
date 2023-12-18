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
        Schema::create('sales_details', function (Blueprint $table) {

            $table->foreignId('sale_id')->constrained();
            $table->foreignId('product_id')->constrained();

            $table->integer('quantity');
            $table->decimal('price', 10, 2); //cambiar a sub_price
            $table->decimal('subtotal', 10, 2); //cambiar subtotal por otra palabra que haga referencia agl peso sub total
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_details');
    }
};
