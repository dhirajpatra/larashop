<?php

use App\Brand;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });

        Brand::create([
            'url' => 'kfc',
            'title' => 'KFC',
            'description' => 'Foods Kentucky Fried Chicken',
        ]);

        Brand::create([
            'url' => 'hungry-lion',
            'title' => 'Hungry Lion',
            'description' => 'Foods by hungry lion',
        ]);

        Brand::create([
            'url' => 'mcdonald',
            'title' => 'McDonald',
            'description' => 'Foods by McDonald',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}