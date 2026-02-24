<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Resources\DuaResource;
use App\Models\Dua;
use App\Http\Requests\StoreDuaRequest;
use App\Http\Requests\UpdateDuaRequest;
use App\Services\DuaService;

class DuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $duaService;
    public function __construct(DuaService $duaService)
    {
        $this->duaService = $duaService;
    }

    public function index()
    {
        try {
            $duas = $this->duaService->index();
            $result = DuaResource::collection($duas);
            return ResponseHelper::SuccessResponse($result, 'Dua found successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse($e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDuaRequest $request)
    {
        try {
            $dua = $this->duaService->store($request->validated());
            $result = DuaResource::make($dua);
            return ResponseHelper::SuccessResponse($result, 'Dua created successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dua $dua)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDuaRequest $request, Dua $dua)
    {
        try {
            $dua = $this->duaService->update($request->validated(), $dua);
            $result = DuaResource::make($dua);
            return ResponseHelper::SuccessResponse($result, 'Dua updated successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dua $dua)
    {
        try {
            $dua = $this->duaService->delete($dua);
            $result = DuaResource::make($dua);
            return ResponseHelper::SuccessResponse($result, 'Dua deleted successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }
}
