@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Pronostics</div>
                <div class="card-body">
                @foreach($pronos as $key => $item)
                    <div class="card mb-3 prono-card">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 style="font-weight: bold;" class="card-title">{{$item['team_1']}} - {{$item['team_2']}}</h5>
                                    <p class="card-text">
                                        <i><u>Pronostic</u>: {{$item['team_win']}}</i><br />
                                        <i><u>Côte</u>: {{$item['bet']}}</i><br />
                                        <i><u>Début du match</u>: {{$item['start_date']}}</i><br />
                                        <i><u>Posté le</u>: {{  date("d M Y", strtotime($item['created_at'])) }}</i>

                                    </p>
                                    @if (date("d M Y", strtotime($item['created_at'])) === date("d M Y", strtotime($date)))
                                        <span class="now-prono"><i class="fas fa-hourglass-half"></i> PRONOSTIC DU JOUR</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    @if ($item['bet_won_or_not'] === 2)
                                        <i style="color: #7f8c8d;" class="fas fa-question fa-9x"></i>
                                    @endif
                                    @if ($item['bet_won_or_not'] === 1)
                                        <i style="color: #e74c3c;" class="fas fa-times fa-9x"></i>
                                    @endif
                                    @if ($item['bet_won_or_not'] === 0)
                                        <i style="color: #2ecc71;" class="fas fa-check fa-9x"></i>
                                    @endif
                                </div>
                            </div>
                            @if (Auth::user()->role === "admin")
                            <button style="width: 100%; border-radius: 0px; background-color: #e74c3c;" type="submit" class="btn btn-danger mb-1"> <i class="fa fa-trash"></i> Supprimer</button>
                            <button style="width: 100%; border-radius: 0px; background-color: #7f8c8d" type="submit" class="btn btn-secondary"> <i class="fa fa-edit"></i> Modifier</button>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection