@extends('layouts.principal')

<div class="container mt-5">

    <div class="row justify-content-center">
    
        <div class="col-md-9 mt-5">
        <!-- Mensajes de guardado -->

        @if(session('articuloGuardado'))
        <div class="alert alert-success">
            {{session('articuloGuardado')}}
        </div>
        @endif

        
        <!-- Mensajes de validacion -->

        @if($errors->any())

        <div class="alert alert-danger">
        
            <ul>
            
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            
            </ul>
        
        </div>

        @endif

            <div class="card">
            
                <form action="{{url('/guardar')}}" method="POST">
                @csrf  
                
                    <div class="card-header text-center">Agregar Articulo</div>

                    <div class="card-body">
                    
                        <div class="row form-group">
                        
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9">

                        </div>
                    
                        <div class="row form-group">
                        
                        <label for="" class="col-2">Tipo</label>
                        <input type="text" name="tipo" class="form-control col-md-9">

                        </div>

                        <div class="row form-group">
                        
                            <label for="" class="col-2">Cantidad</label>
                            <input type="text" name="cantidad" class="form-control col-md-9">

                         </div>
                
                         <div class="row form-group">
                    
                             <label for="" class="col-2">Coste</label>
                             <input type="text" name="coste" class="form-control col-md-9">

                        </div>

                        <div class="row form-group">
                        
                            <button type="submit" class="btn btn-success col-md-9 offset-2">Guardar</button>

                        </div>

                    </div>
                </form>

            </div>


        </div>

    </div>
    <a class="btn btn-light btn-xs mt-5" href="{{url('/')}}"> &laquo Volver</a>

</div>