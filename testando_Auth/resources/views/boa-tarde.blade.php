@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Boa tarde, {{$nome}}</h1>
                    <h2> Bem vindo ao Curso!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection