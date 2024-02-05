<?php

namespace App\Http\Controllers\Web;

use App\DataTables\CustomerDetailsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\StoreRequest;
use App\Http\Requests\Customer\UpdateRequest;
use App\Models\CustomerDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CustomerDetailsDataTable $dataTable)
    {
        return $dataTable->render('admin.customers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $user = DB::transaction(function () use ($data) {
            $user = User::create($data);
            $customer_details = CustomerDetail::create(array_merge($data, ['user_id' => $user->id]));   
            
            $user->assignRole('customer');

            return $user;
        });

        return redirect()->route('admin.customers.edit', $user->id)->withSuccess('Customer added successfully.');
        

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
    public function edit(Request $request, User $customer)
    {
        return view('admin.customers.edit', compact('customer'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validated();
        DB::transaction(function () use ($data, $user) {
            $user->update($data);
            $user->customer_detail->update($data);
        });

        return back()->withSuccess('Customer added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = User::findOrFail($id);
        $customer->delete();

        return response([
            'status' => TRUE,
            'message' => 'Customer deleted successfully'
        ]);
    }
}
