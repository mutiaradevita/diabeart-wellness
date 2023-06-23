<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = User::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('name', 'LIKE', '%' . $search . '%')
                        ->get();
                }
            }]
        ])->paginate(5);
        return view('dashboard.user', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'password' => 'required|min:8',
            'usertype' => 'required',
        ]);

        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->no_hp = $request->get('no_hp');
        $user->alamat = $request->get('alamat');
        $user->password = Hash::make($request->password);
        $user->usertype = $request->get('usertype');
        $user->save();
        return redirect()->route('user.index');
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
    public function edit(Request $request, $id)
    {


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'usertype' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->no_hp = $request->get('no_hp');
        $user->alamat = $request->get('alamat');
        $user->usertype = $request->get('usertype');
        $user->save();
        return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Users::findOrFail($id);
        $user->keranjang()->update(['id_users' => null]);
        $user->ulasan()->update(['id_users' => null]);
        $user->transaksi()->update(['id_users' => null]);
        $user->delete();

        return redirect()->route('user.index');
    }
}
