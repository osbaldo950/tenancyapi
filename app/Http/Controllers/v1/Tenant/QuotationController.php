<?php

namespace App\Http\Controllers\v1\Tenant;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Tenant\Quotation;
use App\Models\Tenant\QuotationDetails;
use Illuminate\Http\Request;

class QuotationController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->showAll(Quotation::all());

        // $quotation = QuotationDetails::find(1);
        // return $quotation->quotationsDetails;

        // $quotationsDetails = QuotationDetails::find(1);
        // return $quotationsDetails->quotation;
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
