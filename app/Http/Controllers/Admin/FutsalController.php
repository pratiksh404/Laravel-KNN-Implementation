<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Futsal;
use Illuminate\Http\Request;
use App\Http\Requests\FutsalRequest;
use App\Http\Controllers\Controller;
use App\Contracts\FutsalRepositoryInterface;

class FutsalController extends Controller
{
    protected $futsalRepositoryInterface;

    public function __construct(FutsalRepositoryInterface $futsalRepositoryInterface)
    {
        $this->futsalRepositoryInterface = $futsalRepositoryInterface;
        $this->authorizeResource(Futsal::class, 'futsal');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.futsal.index', $this->futsalRepositoryInterface->indexFutsal());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.futsal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FutsalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FutsalRequest $request)
    {
        $this->futsalRepositoryInterface->storeFutsal($request);
        return redirect(adminRedirectRoute('futsal'))->withSuccess('Futsal Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function show(Futsal $futsal)
    {
        return view('admin.futsal.show', $this->futsalRepositoryInterface->showFutsal($futsal));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function edit(Futsal $futsal)
    {
        return view('admin.futsal.edit', $this->futsalRepositoryInterface->editFutsal($futsal));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\FutsalRequest  $request
     * @param  \App\Models\Admin\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function update(FutsalRequest $request, Futsal $futsal)
    {
        $this->futsalRepositoryInterface->updateFutsal($request, $futsal);
        return redirect(adminRedirectRoute('futsal'))->withInfo('Futsal Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Futsal $futsal)
    {
        $this->futsalRepositoryInterface->destroyFutsal($futsal);
        return redirect(adminRedirectRoute('futsal'))->withFail('Futsal Deleted Successfully.');
    }
}
