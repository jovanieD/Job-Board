<?php

namespace App\Http\Controllers;

use App\Models\AvailableJobs;
use App\Http\Requests\StoreAvailableJobsRequest;
use App\Http\Requests\UpdateAvailableJobsRequest;
use Illuminate\Http\Request;

class AvailableJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AvailableJobs $listing, Request $request)
    {
        return view('listings.index', compact('listing'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAvailableJobsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvailableJobsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AvailableJobs  $availableJobs
     * @return \Illuminate\Http\Response
     */
    public function show(AvailableJobs $availableJobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AvailableJobs  $availableJobs
     * @return \Illuminate\Http\Response
     */
    public function edit(AvailableJobs $availableJobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvailableJobsRequest  $request
     * @param  \App\Models\AvailableJobs  $availableJobs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvailableJobsRequest $request, AvailableJobs $availableJobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AvailableJobs  $availableJobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AvailableJobs $availableJobs)
    {
        //
    }
}
