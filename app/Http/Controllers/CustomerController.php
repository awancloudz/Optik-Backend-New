<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\Resep;

class CustomerController extends Controller
{
    public function index(){
        $data = Customer::orderBy('nama', 'asc')->where('jenis','=','customer')->get();
        $jumlah = $data->count();
        if($jumlah > 0){
            $customer = collect($data);
            $customer->toJson();
            return $customer;
        }
        else{
            $data = [
                ['id' => null],
            ];
            $customer = collect($data);
            $customer->toJson();
            return $customer;
        }
    }

    public function store(Request $request){
        $input = $request->all();
        $customer = Customer::create($input);
        return $customer;
    }
    
    public function show($id){
        $data = Customer::findOrFail($id);
        $jumlah = $data->count();
        if($jumlah > 0){
            $customer = collect($data);
            $customer->toJson();
            return $customer;
        }
        else{
            $data = [
                ['id' => null],
            ];
            $customer = collect($data);
            $customer->toJson();
            return $customer;
        }
    }

    public function update(Request $request){
        $id = $request->id;
        settype($id, "integer");
        $customer = Customer::findOrFail($id);
        $input = $request->all();
        $customer->update($input);
        return $customer;
    }

    public function destroy($id){
        settype($id, "integer");
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return $customer;
    }

    public function cari(Request $request){
        $kata_kunci = $request->input('nama');
        //Query
        $data = Customer::where('nama', 'LIKE', '%' . $kata_kunci . '%')->where('jenis','=','customer')
            ->orderBy('nama', 'asc')->get();
        $jumlah = $data->count();
        if($jumlah > 0){
            $customer = collect($data);
            $customer->toJson();
            return $customer;
        }
        else{
            $data = [
                ['id' => null],
            ];
            $customer = collect($data);
            $customer->toJson();
            return $customer;
        }
    }
}
