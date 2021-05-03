@extends('layouts.principal')
<div class="container mt-5">

    <div class="row justify-content-center">
    
        <div class="col-md-10">
        
            <h2 class="text-center mb-5">Articulos</h2>
            <a class="btn btn-success" href="{{url('/form')}}">Agregar articulo</a>

            @if(session('articuloBorrado'))

                <div class="alert alert-success">
                    {{session('articuloBorrado')}}
                </div>

            @endif

            <table class="table table-bordered table-striped text-center">
            
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Cantidad</th>
                        <th>Coste</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->nombre}}</td>
                        <td>{{$article->tipo}}</td>
                        <td>{{$article->cantidad}}</td>
                        <td>{{$article->coste}}</td>
                        <td>

                            <a href="{{ route('editform', $article->id) }}" class="btn btn-primary mb-1">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form action="{{route('borrar', $article->id)}}" method="POST">
                                @csrf @method('delete')

                                <button type="submit" 
                                onclick="return confirm('¿Seguro que quieres borrar este articulo?');" 
                                class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            
            </table>
            {{$articles->links()}}
        </div>
    
    </div>

</div>