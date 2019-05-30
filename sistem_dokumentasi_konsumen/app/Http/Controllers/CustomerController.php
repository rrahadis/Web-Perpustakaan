<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function kelas_3(){
        $search = '3';
        $customer3 = Customer::where('name','LIKE',"%{$search}%")

              ->get();

        return view('kelas_3', ['customer3' => $customer3]);
    }

    public function kelas_2(){
        $search = '2';
        $customer2 = Customer::where('name','LIKE',"%{$search}%")

              ->get();

        return view('kelas_2', ['customer2' => $customer2]);
    }

    public function kelas_1(){
        $search = '1';
        $customer1 = Customer::where('name','LIKE',"%{$search}%")

              ->get();

        return view('kelas_1', ['customer1' => $customer1]);
    }

    public function data_buku(){
        $all_customer = Customer::all();

        return view('data_buku', ['all_customer' => $all_customer]);
    }

    public function index() 
    {   
          return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_customer');
    }

   public function create_post(Request $request)
    {
        $customer = new Customer;

         $customer->name = $request["name"];
         $customer->jumlah = $request["jumlah"];
         $customer->occupation = $request["occupation"];
         $customer->save();

         return view('view_customer', ['customer' => $customer]);
         
    } 

    public function get(){
        $all_customer = Customer::all();

        return view('all_customer', ['all_customer' => $all_customer]);
    }

    public function edit($id){
        $customer = Customer::find($id);

        return view('edit_customer', ['customer' => $customer]);
    }
    

    public function edit_post(Request $request){
        $customer = Customer::find($request["id"]);

         $customer->name = $request["name"];
         $customer->jumlah = $request["jumlah"];
         $customer->occupation = $request["occupation"];
         $customer->save();

         return view('view_customer', ['customer' => $customer]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return "berhasil didelete";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
