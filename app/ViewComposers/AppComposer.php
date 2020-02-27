<?php

namespace App\ViewComposers;

use App\Brand;
use App\Category;
use App\Deal;
use Illuminate\View\View;

class AppComposer
{
    public $items = [];

    public function __construct()
    {
        $data = [
            'brands' => Brand::all(),
            'categories' => Category::all(),
            'deals' => Deal::all(),
        ];

        $this->items[] = $data;
    }

    public function compose(View $view)
    {
        $view->with('items', end($this->items));
    }
}