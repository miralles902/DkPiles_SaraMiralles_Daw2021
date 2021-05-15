@extends('adminlte::page')

@section('title', 'crea')

@section('content')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="showimages"></div>
            </div>
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">Configura las páginas que quieres mostrar</h6>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-right mb-3">
                                <a href="{{ route('configs.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                        <form method="post" action="{{ route('configs.store') }}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label><strong>Category :</strong></label><br>
                                <label><input type="checkbox" name="category[]" value="contacto"> Contacto</label>
                                <label><input type="checkbox" name="category[]" value="tiempo"> El Tiempo</label>
                                <label><input type="checkbox" name="category[]" value="galeria"> Galeria</label>
                                <label><input type="checkbox" name="category[]" value="mercadillo"> Mercadillo</label>
                                <label><input type="checkbox" name="category[]" value="noticias"> Noticias</label>
                                <label><input type="checkbox" name="category[]" value="webcams"> Webcams</label>
                            </div>  
                            
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection