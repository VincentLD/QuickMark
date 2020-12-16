<?php

namespace App\Http\Controllers;

use App\Mail\VerifyMail;
use App\User;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        if(Auth::user()->is_admin) {
            return view('users.create');
        }

        else {
            return redirect()->back()->with('error', 'Vous n\'avez pas accès au panel d\'administration');
        }
    }

    public function store(Request $request)
    {
        $user = User::create(request()->validate( [
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'is_admin' => 'required|boolean',
        ]));

        VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time()),
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));
        return redirect('/home')->with('toast_success', 'Professeur ajouté!');

    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if($verifyUser){
            $user = $verifyUser->user;
            if($user->verified) {
                $status = "Votre compte a déjà été vérifié, veuillez définir votre mot de passe.";
            } else {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "Votre compte est maintenant vérifié, veuillez définir votre mot de passe.";

            }

            return view('users.setpassword')->with('status', $status);
        } else {
            return redirect('/login')->with('warning', "Désolé, votre compte ne peut pas être identifié.");
        }
    }

    public function storePassword(Request $request)
    {
        //

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
