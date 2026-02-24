<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function index()
    {
        $categories = Category::all();
        if ($categories) {
            return $categories;
        } else throw new \Exception("Categories not found");
    }
    public function store(array $data)
    {
        return Category::create([
            "name" => $data["name"],
        ]);
    }
    public function update(array $data, Category $category)
    {
        $category->update($data);
        return $category;
    }
    public function delete(Category $category)
    {
        $category->delete();
        return $category;
    }
}
