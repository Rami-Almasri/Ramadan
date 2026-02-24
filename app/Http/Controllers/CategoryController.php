<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Services\CategoryService;
use Exception;
use Illuminate\Auth\Events\Validated;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $category;
    public function __construct(CategoryService $categoryService)
    {
        $this->category = $categoryService;
    }
    public function index()
    {
        try {
            $categories = $this->category->index();
            $result = CategoryResource::collection($categories);
            return ResponseHelper::SuccessResponse($result);
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse($e->getMessage());
        }
    }


    public function store(StoreCategoryRequest $request)
    {
        try {
            $category = $this->category->store($request->Validated());
            $result = CategoryResource::make($category);
            return ResponseHelper::SuccessResponse($result);
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try {
            $category_r = $this->category->update($request->validated(), $category);

            $result = CategoryResource::make($category_r);

            return ResponseHelper::SuccessResponse($result, 'Category updated successfully');
        } catch (Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category = $this->category->delete($category);
            return ResponseHelper::SuccessResponse($category, 'Category deleted successfully');
        } catch (Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }
}
