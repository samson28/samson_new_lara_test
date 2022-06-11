<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use PhpParser\Node\Stmt\TryCatch;

class ProfileController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'firstname' => ['required', 'string', 'max:255']
        ]);


       $use = User::find($id);
       $use->name = $request->name;
       $use->email = $request->email;
       $use->firstname = $request->firstname;
       $use->save();

    return redirect()->back();


    }

    public function update2(Request $request)
    {
        $id = Auth::user()->id;

      /*  $request->validate([
            'adresse' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255']
        ]);*/


       $use = User::find($id);
       $use->address = $request->addresse;
       $use->city = $request->city;
       $use->country = $request->country;
       $use->save();

       return redirect()->back();

    }
}
