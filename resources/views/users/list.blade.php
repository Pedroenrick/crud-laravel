@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a href="{{url('users/new')}}">Novo usuário</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Lista de Usuários') }}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                            @foreach($usuarios as $u)
                        <tbody>
                            <tr>
                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>
                                <td><a href="users/{{$u->id}}/edit" class="btn btn-info">Editar</a></td>
                                
                                <td>
                                    <form action="users/delete/{{$u->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                                
                               
                            </tr>
                        </tbody>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
