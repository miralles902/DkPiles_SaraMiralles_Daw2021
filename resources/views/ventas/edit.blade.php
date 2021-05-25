@extends('adminlte::page')

@section('title', 'Editar Venta')
     
@section('content')
<!DOCTYPE html>
<head>
<!-- ckeditor template -->
<script src="//cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script>
</head>
<body>
    <div class="row">
        
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ventas.index') }}">Volver al panel</a>
            </div>

    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('ventas.update',$venta->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo:</strong>
                    <input type="text" name="titulo" value="{{ $venta->titulo }}" class="form-control" placeholder="titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Autor:</strong>
                    <input type="text" name="autor" value="{{ $venta->autor }}" class="form-control" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Precio:</strong>
                    <input type="number" name="precio" value="{{ $venta->precio }}" class="form-control" placeholder="precio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre del Vendedor:</strong>
                    <input type="text" name="nombre_vendedor" value="{{ $venta->nombre_vendedor}}" class="form-control" placeholder="nombre_vendedor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contacto del vendedor:</strong>
                    <input type="text" name="contacto_vendedor" value="{{ $venta->contacto_vendedor }}" class="form-control" placeholder="contacto_vendedor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detalles:</strong>
                    <textarea class="ckeditor form-control" style="height:150px" name="detail" placeholder="Detail">{{ $venta->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagen:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $venta->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
</body>
<!-- Ckeditor script -->
<script src="{{ asset('js/ckEditor.js') }}"></script>
</html>
@endsection