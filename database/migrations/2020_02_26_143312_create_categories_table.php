<?php

use App\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });

        Category::create([
            'url' => 'ice-cream',
            'title' => 'Ice Cream',
            'description' => 'Ice cream products',
        ]);

        Category::create([
            'url' => 'meat',
            'title' => 'Meat',
            'description' => 'Food that contain meat',
        ]);

        Category::create([
            'url' => 'junk-food',
            'title' => 'Junk Food',
            'description' => 'Foods that you should eat before they are banned by the Government',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}