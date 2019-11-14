<?php

namespace App\Http\Controllers;

use App\Vip;
use Illuminate\Http\Request;
use Auth;
use Hash;

/**
 * Class ProfilController
 * @package App\Http\Controllers
 */
class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user = Auth::user();

        return view('profil', compact('user'));
    }

    public function editPswd(Request $request)
    {
        $user = Auth::user();

        $this->validate($request,
            [
                'old_password' => $user->password,
                'new_password' => 'confirmed|max:8|different:password',
            ]);


        if (Hash::check($request['old_pswd'], $user->password)) {
            $user->fill(
                [
                    'password' => bcrypt($request['new_pswd'])
                ])->save();
            return Redirect()->back()->with('success', 'Votre mot de passe a été modifié avec succès !');
        } else {
            return Redirect()->back()->with('error', 'Votre ancien mot de passe est incorrect !');
        }
}
}
