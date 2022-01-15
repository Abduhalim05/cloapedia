<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertising;
use App\Repositories\Interfaces\AdvertRepositoryInterface;


class AdvertisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $advertRepo;
    public function __construct(AdvertRepositoryInterface $advertRepository)
    {
        $this->advertRepo=$advertRepository;
    }
    public function index()
    {
        $images=$this->advertRepo->getAll();

        return view('admin.advertising.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertising.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->advertRepo->store($request);
        return redirect()->route('admin.advertising.index')->with('success', 'Images Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advertising=$this->advertRepo->findOne($id);

        return view('admin.advertising.edit', compact('advertising'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->advertRepo->update($request, $id);
        return redirect()->route('admin.advertising.index')->with('success', 'Images updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->advertRepo->delete($id);
        return redirect()->route('admin.advertising.index')->with('warning', 'Images Deleted!');
    }
}
