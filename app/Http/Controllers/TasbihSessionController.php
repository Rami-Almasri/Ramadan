<?php

namespace App\Http\Controllers;


use App\Helpers\ResponseHelper;
use App\Models\TasbihSession;
use App\Http\Requests\StoreTasbihSessionRequest;
use App\Http\Requests\UpdateTasbihSessionRequest;
use App\Http\Resources\TasbihResource;
use App\Http\Resources\TasbihSessionResource;
use App\Services\TasbihService;
use App\Services\TasbihSessionService;

class TasbihSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $tasbihSessionService;
    public function __construct(TasbihSessionService $tasbihSessionService)
    {
        $this->tasbihSessionService = $tasbihSessionService;
    }
    public function index()
    {
        try {
            $tasbih = $this->tasbihSessionService->index();
            $result = TasbihSessionResource::collection($tasbih);
            return ResponseHelper::SuccessResponse($result, 'Tasbih found successfully');
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
    public function store(StoreTasbihSessionRequest $request)
    {
        try {
            $tasbihsession = $this->tasbihSessionService->store($request->validated());
            $result = TasbihSessionResource::make($tasbihsession);
            return ResponseHelper::SuccessResponse($result, 'Tasbih created successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TasbihSession $tasbihSession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TasbihSession $tasbihSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTasbihSessionRequest $request, TasbihSession $tasbihsession)
    {
        try {
            $tasbihSessions = $this->tasbihSessionService->update($request->validated(), $tasbihsession);
            $result = TasbihSessionResource::make($tasbihSessions);
            return ResponseHelper::SuccessResponse($result, 'Tasbih updated successfully');
        } catch (\Exception $e) {
            return ResponseHelper::FailureResponse(null, $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TasbihSession $tasbihSession)
    {
        //
    }
}
