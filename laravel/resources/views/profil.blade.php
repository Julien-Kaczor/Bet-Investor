@extends('layouts.app')

<title>Betting-Investor | Profil</title>

@section('content')

    <div class="container">
        @if(session('error'))
            <div class="alert alert-danger  alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <i class="fas fa-times" id="icon-mr"></i> <strong>{{session('error')}}</strong>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success  alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <i class="fas fa-check" id="icon-mr"></i> <strong>{{session('success')}}</strong>
            </div>
        @endif
        <div id="card-edit" class="card w-100 mb-4">
            <div class="card-header">
                <i class="fa fa-user"></i> Vos informations
            </div>
            <div class="card-body">
                <table class="table table-striped screen-table">
                    <tbody>
                    <tr>
                        <td><strong>Nom d'utilisateur</strong></td>
                        <td>{{$user->username}}</td>
                    </tr>
                    <tr>
                        <td><strong>Prénom</strong></td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td><strong>Nom</strong></td>
                        <td>{{$user->lastname}}</td>
                    </tr>

                    <tr>
                        <td><strong>Abonnement</strong></td>
                        <td>{{$user->is_vip ? "VIP" : "Aucun Abonnement"}}</td>
                    </tr>
                    <tr>
                        <td><strong>Creation du compte</td>
                        <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="card-edit" class="card w-100 mb-4">
            <div class="card-header">
                <i class="fa fa-edit"></i> Modifier votre mot de passe
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('editPswd') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="old_pswd" class="col-md-4 col-form-label text-md-right">{{ __("Ancien mot de passe") }}</label>
                        <div class="col-md-6">
                            <input id="old_pswd" type="password" class="form-control" name="old_pswd" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_pswd" class="col-md-4 col-form-label text-md-right">{{ __("Nouveau mot de passe") }}</label>
                        <div class="col-md-6">
                            <input id="new_pswd" type="password" class="form-control" name="new_pswd" required autofocus>
                        </div>
                        <div class="col-md-6 m-auto mt-5">
                            <button type="submit" class="btn btn-or edit-btn"><i class="fas fa-edit"></i> Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection