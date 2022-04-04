<?php

namespace App\Contracts;

use App\Models\Admin\Futsal;
use App\Http\Requests\FutsalRequest;

interface FutsalRepositoryInterface
{
    public function indexFutsal();

    public function createFutsal();

    public function storeFutsal(FutsalRequest $request);

    public function showFutsal(Futsal $Futsal);

    public function editFutsal(Futsal $Futsal);

    public function updateFutsal(FutsalRequest $request, Futsal $Futsal);

    public function destroyFutsal(Futsal $Futsal);
}
