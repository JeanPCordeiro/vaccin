@extends('adminlte::page')

@section('title', 'VaccinPau')

@section('content_header')
    <h1 class="m-0 text-dark">Bienvenue</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    Vous êtes identifié(e) en tant que <B>{{ Auth::user()->name }}</B>.<BR><BR>
                    Vous disposez d'une habilitation de niveau <B>{{ Auth::user()->level }}</B> :<BR>
                    <ul>
                    <I>
                    <li>Le niveau 0 n'a aucun droit,</li>
                    <li>Le niveau 1 permet de consulter des informations,</li>
                    <li>Le niveau 2 permet en plus de modifier des informations,</li>
                    <li>Le niveau 3 permet l'administration complète de l'application.</li>
                    </I>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
