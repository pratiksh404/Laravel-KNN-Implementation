<?php

namespace App\Repositories;

use App\Models\Admin\Futsal;
use Illuminate\Support\Facades\Cache;
use App\Contracts\FutsalRepositoryInterface;
use App\Http\Requests\FutsalRequest;

class FutsalRepository implements FutsalRepositoryInterface
{
    // Futsal Index
    public function indexFutsal()
    {
        $futsals = config('adminetic.caching', true)
            ? (Cache::has('futsals') ? Cache::get('futsals') : Cache::rememberForever('futsals', function () {
                return Futsal::latest()->get();
            }))
            : Futsal::latest()->get();
        return compact('futsals');
    }

    // Futsal Create
    public function createFutsal()
    {
        //
    }

    // Futsal Store
    public function storeFutsal(FutsalRequest $request)
    {
        Futsal::create($request->validated());
    }

    // Futsal Show
    public function showFutsal(Futsal $futsal)
    {
        return compact('futsal');
    }

    // Futsal Edit
    public function editFutsal(Futsal $futsal)
    {
        return compact('futsal');
    }

    // Futsal Update
    public function updateFutsal(FutsalRequest $request, Futsal $futsal)
    {
        $futsal->update($request->validated());
    }

    // Futsal Destroy
    public function destroyFutsal(Futsal $futsal)
    {
        $futsal->delete();
    }
}
