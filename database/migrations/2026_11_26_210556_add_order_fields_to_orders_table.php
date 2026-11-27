<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {

            $table->string('customer_name')->nullable();

            $table->string('customer_number')->nullable();

            $table->string('fiscal_information')->nullable();

            $table->dateTime('order_date')->nullable();

            $table->string('delivery_address')->nullable();

            $table->text('notes')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {

            $table->dropColumn([
                'customer_name',
                'customer_number',
                'fiscal_information',
                'order_date',
                'delivery_address',
                'notes'
            ]);

        });
    }
};