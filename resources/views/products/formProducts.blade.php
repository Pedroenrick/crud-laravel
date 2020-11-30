@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('products') }}">Produtos</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if(Request::is('*/edit'))
                    <form action="{{url('products/update')}}/{{$product->id}}" method ="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Nome: </label>
                            <input type="text" name="name" class="form-control" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDescription">Descrição:</label>
                            <input type="text" name="description" class="form-control" value="{{$product->description}}">
                        </div>     
                        <div class="form-group">
                            <label for="exampleInputPrice">Preço: </label>
                            <input type="text" name="price" class="form-control" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Categoria: </label>
                            <input type="text" name="category" class="form-control" value="{{$product->category}}">
                        </div>               
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @else

                    <form action="{{url('products/add')}}" method ="POST">
                    @csrf
                    <div class="form-group">
                            <label for="exampleInputName">Nome: </label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDescription">Descrição:</label>
                            <input type="text" name="description" class="form-control" >
                        </div>     
                        <div class="form-group">
                            <label for="exampleInputPrice">Preço: </label>
                            <input type="text" name="price" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategory">Categoria: </label>
                            <input type="text" name="category" class="form-control" >
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
