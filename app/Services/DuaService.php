<?php

namespace App\Services;

use App\Models\Dua;

class DuaService
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
        $duas = Dua::all();
        if ($duas) {
            return $duas;
        } else {
            throw new \Exception("Dua not found");
        }
    }
    public function store(array $data)
    {
        return Dua::create($data);
    }
    public function update(array $data, Dua $dua)
    {

        $dua->update($data);
        return $dua;
    }
    public function delete(Dua $dua)
    {
        $dua->delete();
        return $dua;
    }
}
