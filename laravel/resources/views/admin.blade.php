@extends('layouts.app')

<title>Betting-Investor | Admin</title>

@section('content')
<div class="container">
    <div class="card-deck">
        <div style="background-color: #3498db; color: white" class="card mb-5">
            <div class="card-footer">
                <h5><i class="fas fa-user"></i> Utilisateurs inscrits</h5>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <h1 class="text-center">0</h1>
                </p>
            </div>
        </div>
        <div style="background-color: #e67e22; color: white" class="card mb-5">
            <div class="card-footer">
                <h5><i class="fas fa-star"></i> Utilisateurs V.I.P</h5>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <h1 class="text-center">0</h1>
                </p>
            </div>
        </div>
        <div style="background-color: #7f8c8d; color: white" class="card mb-5">
            <div class="card-footer">
                <h5><i class="fas fa-file"></i> -</h5>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <h1 class="text-center">-</h1>
                </p>
            </div>
        </div>
    </div>
    <div class="m-content">
            @if(session('success'))
                <div class="alert alert-success  alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <i class="fas fa-check" id="icon-mr"></i> <strong>{{session('success')}}</strong>
                </div>
                <hr>
            @endif

            @if(session('error'))
                <div class="alert alert-danger  alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <i class="fas fa-times" id="icon-mr"></i> <strong>{{session('error')}}</strong>
                </div>
                <hr>
            @endif
    <div class="card">
        <div class="card-header">
            <i class="fa fa-plus"></i>
            Ajouter un pronostic
        </div>
        <div class="card-body">
            <form method="post" action="{{route('createPronos')}}" enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
                @csrf

                <div class="form-group m-form__group row">
                    <label class="col-lg-1 col-form-label"><strong>Titre</strong></label>
                    <div class="col-lg-3">
                        <input type="hidden" name="id">
                        <input placeholder="Ligue 1 - Foot" type="text" name="title" class="form-control m-input" required>
                        <span class="m-form__help"><i><strong>Exemple:</strong> Ligue 1 - Foot</i></span>
                    </div>
                    <label class="col-lg-1 col-form-label"><strong>Date</strong></label>
                    <div class="col-lg-3">
                        <input placeholder="20/12/19" type="datetime" name="start_date" class="form-control m-input">
                        <span class="m-form__help"><i><strong>Heure de début du match</strong></i></span>
                    </div>
                    <label class="col-lg-1 col-form-label"><strong>Fiabilité</strong></label>
                    <div class="col-lg-3">
                        <input placeholder="95" type="datetime" name="fiability" class="form-control m-input">
                        <span class="m-form__help"><i><strong>Fiabilité de 1 à 100</strong></i></span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-lg-1 col-form-label"><strong>Domicile</strong></label>
                    <div class="col-lg-3">
                        <input placeholder="Paris-SG" id="team_in" name="team_1" type="text" class="form-control m-input" required>
                        <span class="m-form__help"><i><strong>Exemple:</strong> Paris-SG</i></span>
                    </div>
                    <label class="col-lg-1 col-form-label"><strong>Exterieur</strong></label>
                    <div class="col-lg-3">
                        <input placeholder="Rennes" id="team_out" name="team_2" type="text" class="form-control m-input" required>
                        <span class="m-form__help"><i><strong>Exemple:</strong> Rennes</i></span>
                    </div>
                    <label class="col-lg-1 col-form-label"><strong>Résultat</strong></label>
                    <div class="col-lg-3">
                        <input placeholder="Paris-SG gagne de 2 buts ou +" type="text" name="team_win" class="form-control m-input" required>
                        <span class="m-form__help"><i><strong>Exemple</strong> PSG gagne de 2 buts ou +</i></span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-lg-1 col-form-label"><strong>Côte</strong> </label>
                    <div class="col-lg-3">
                        <input placeholder="1.76" id="nvd_bet" type="text" class="form-control m-input" name="bet" required>
                        <span class="m-form__help"><i><strong>Exemple</strong> 1.5 (mettre un point, pas une virgule !)</i></span>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions--solid">
                        <div class="row">
                            <div class="col-lg-5"></div>

                        </div>
                        <div class="col-lg-12">
                            <button style="width: 100%" type="submit" class="btn btn-secondary"> <i class="fa fa-plus"></i> Ajouter</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection