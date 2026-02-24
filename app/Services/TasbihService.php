<?php

namespace App\Services;

use App\Models\Tasbih;

class TasbihService
{
    /**
     * Create a new class instance.
     */
    public function __construct() {}
    public function index()
    {
        $tasbih = Tasbih::all();
        if ($tasbih) {
            return $tasbih;
        }
        throw new \Exception("Tasbih not found");
    }
    public function store(array $data)
    {
        return Tasbih::create([
            "title" => $data["title"],
            "reward" => $data["reward"],
            "count_recommended" => $data["count_recommended"],
        ]);
    }
    public function update(array $data, Tasbih $tasbih)
    {
        $tasbih->update($data);
        return $tasbih;
    }
    public function delete(Tasbih $tasbih)
    {
        $tasbih->delete();
        return $tasbih;
    }
}
