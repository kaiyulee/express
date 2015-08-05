<?php
/**
 * Created by PhpStorm.
 * User: Kron
 * Date: 15/7/23
 * Time: 17:36
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;


class CategoryController extends Controller
{
    public function create()
    {
        view('backend.category_create', []);
    }

    public function store() { }

    public function all()
    {
        $all = Category::all();
        // dump($all);
        return view('backend.categories', ['categories' => $all]);
    }
}
