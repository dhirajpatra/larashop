<?php

use App\Deal;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('title');
            $table->string('description');
            $table->decimal('percent');
            $table->timestamps();
        });

        Deal::create([
            'url' => 'summer',
            'title' => 'Summer',
            'description' => 'Summer discounts',
            'percent' => 10,
        ]);

        Deal::create([
            'url' => 'tuesday',
            'title' => 'Tuesday',
            'description' => 'Special tuesday discounts',
            'percent' => 7,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
}