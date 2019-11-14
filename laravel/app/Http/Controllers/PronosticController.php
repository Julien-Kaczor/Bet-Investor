<?php

namespace App\Http\Controllers;

use App\Pronostic;
use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request as RequestAll;

class PronosticController extends Controller
{
    public function create(RequestAll $request)
    {
        try {
            $data = Request::all();
            $newProno = new Pronostic($data);
            $newProno->save();
            return back()->with('success', 'Pronostic créer avec succès !');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
