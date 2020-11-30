@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('users') }}">Categorias</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if(Request::is('*/edit'))
                    <form action="{{url('categories/update')}}/{{$category->id}}" method ="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Nome: </label>
                            <input type="text" name="name" class="form-control" value="{{$category->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                    @else

                    <form action="{{url('categories/add')}}" method ="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Nome: </label>
                            <input type="text" name="name" class="form-control">
                        </div>                   
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
