<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Resources\TasbihResource;
use App\Models\Tasbih;
use App\Http\Requests\StoreTasbihRequest;
use App\Http\Requests\UpdateTasbihRequest;
use App\Services\TasbihService;

class TasbihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $tasbihService;
    public function __construct(TasbihService $tasbihService)
    {
        $this->tasbihService = $tasbihService;
    }
    public function index()
    {
        try {
            $tasbih = $this->tasbihService->index();
            $result = TasbihResource::collection($tasbih);
            return ResponseHelper::SuccessResponse($result, 'Tasbih found successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse($e->getMessage());
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTasbihRequest $request)
    {
        try {
            $tasbih = $this->tasbihService->store($request->validated());
            $result = TasbihResource::make($tasbih);
            return ResponseHelper::SuccessResponse($result, 'Tasbih created successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tasbih $tasbih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTasbihRequest $request, Tasbih $tasbih)
    {
        try {
            $tasbih = $this->tasbihService->update($request->validated(), $tasbih);
            $result = TasbihResource::make($tasbih);
            return ResponseHelper::SuccessResponse($result, 'Tasbih updated successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasbih $tasbih)
    {
        try {
            $tasbih = $this->tasbihService->delete($tasbih);
            $result = TasbihResource::make($tasbih);
            return ResponseHelper::SuccessResponse($result, 'Tasbih deleted successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }
}
