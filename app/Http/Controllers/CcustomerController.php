<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ccustomer;

class CcustomerController extends Controller
{
    //
    public function index()
    {
        $url = url('/ccustomer');
        $data = compact('url');
        return view('ccustomer')->with($data);
    }
    public function list()
    {
        $ccustomers= Ccustomer::all();
        // dd($ccustomer->toArray());

        return view('getdataccustomer', compact('ccustomers'));
    }
    
    public function store(Request $request)
{
    // Debugging to check if data is received
    // dd($request->all());

    $ccustomer = new Ccustomer;
    $ccustomer->name = $request->input('name');
    $ccustomer->email = $request->input('email');
    $ccustomer->password = md5($request->input('password'));
    $ccustomer->save();

    return redirect('ccustomer');
}
public function destroy($id)
    {
        // dd($ccustomer->toArray());
        $ccustomers= Ccustomer::find($id)->delete();
        

        return redirect('ccustomer');
    }
    public function edit($id)
{
    $ccustomer = Ccustomer::find($id);
    // print_r($ccustomer);
    // die;
    return view('edit_form', compact( 'ccustomer' ) );
    
}
public function update(Request $request, $id)
{ 
    $ccustomer = Ccustomer::find($id);

    $ccustomer->name = $request->input('name');
    $ccustomer->email = $request->input('email');
    $ccustomer->password =$request->input('password');
    $ccustomer->save();
    return redirect('ccustomer/list');


}
};
