<?php

use App\Models\Deposit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            $table->float('amount');
            $table->enum('plan', [Deposit::BASIC, Deposit::BRONZE, Deposit::DIAMOND, Deposit::PREMIUM, Deposit::CRYPTOCURRENCIES, Deposit::STOCKS, Deposit::CUSTOM]);
            $table->enum('status', [Deposit::PENDING, Deposit::APPROVED, Deposit::DECLINED, Deposit::TERMINATED])->default(Deposit::PENDING);
            $table->string('proof');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposits');
    }
}
