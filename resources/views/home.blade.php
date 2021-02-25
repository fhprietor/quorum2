@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inicio</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                    <div class="align-content-md-center links">
                        <!--
                        <div>
                            <a href="{{ url('/admin_polls/admin/polls') }}">MODERADOR</a>
                        </div>
                        -->
                        <div>
                            <a class="btn btn-info btn-sm" href="{{ url('/admin_polls/polls/lists') }}">Entrar a votaciones</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
