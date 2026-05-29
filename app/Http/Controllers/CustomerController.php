<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customers.index', [
            'customers' => Customer::all()
        ]);
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    public function store(Request $request)
    {
        Customer::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
        ]);

        return redirect('/customers');
    }

    // TAMBAHKAN DI SINI

    public function edit(Customer $customer)
    {
        return view('admin.customers.edit', [
            'customer' => $customer
        ]);
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
        ]);

        return redirect('/customers');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('/customers');
    }
}