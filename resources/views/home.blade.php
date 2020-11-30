@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Seja Bem vindo!') }}
                </div>
                <div class="card-body"><a href="{{url('users')}}">Lista Usuarios</a></div>
                <div class="card-body"><a href="{{url('products')}}">Lista Produtos</a></div>
                <div class="card-body"><a href="{{url('categories')}}">Lista Categorias</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
