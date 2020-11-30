@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a href="{{url('products/new')}}">Novo Produto</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Lista de Produtos') }}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                            @foreach($products as $p)
                        <tbody>
                            <tr>
                                <td>{{$p->name}}</td>
                                <td>{{$p->description}}</td>
                                <td>R${{$p->price}}</td>
                                <td>{{$p->category}}</td>
                                <td><a href="products/{{$p->id}}/edit" class="btn btn-info">Editar</a></td>
                                
                                <td>
                                    <form action="products/delete/{{$p->id}}" method="post">
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
