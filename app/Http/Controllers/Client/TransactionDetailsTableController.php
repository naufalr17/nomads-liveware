<?php

namespace App\Http\Controllers;

use App\Models\transaction_details_table;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storetransaction_details_tableRequest;
use App\Http\Requests\Updatetransaction_details_tableRequest;

class TransactionDetailsTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storetransaction_details_tableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(transaction_details_table $transaction_details_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaction_details_table $transaction_details_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatetransaction_details_tableRequest $request, transaction_details_table $transaction_details_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaction_details_table $transaction_details_table)
    {
        //
    }
}
