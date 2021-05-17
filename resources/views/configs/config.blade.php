@extends('adminlte::page')

@section('title', 'Modifica tus secciones')

@section('content')

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="showimages"></div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">Configura las paginas que quieres guardar</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-right mb-3">
                                <a href="{{ route('configs.index') }}" class="btn btn-primary">Volver al Panel</a>
                            </div>
                            <div class="col-md-12 mb-12">
                                <form method="post" action="{{ route('configs.update',$config->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label><input type="checkbox" value="contacto" name="category[]"> Contacto</label>
                                        <label><input type="checkbox" value="tiempo" name="category[]"> El Tiempo</label>
                                        <label><input type="checkbox" value="galeria" name="category[]"> Galeria</label>
                                        <label><input type="checkbox" value="mercadillo" name="category[]"> Mercadillo</label>
                                        <label><input type="checkbox" value="noticias" name="category[]"> Noticias</label>
                                        <label><input type="checkbox" value="webcams" name="category[]"> Webcams</label>
                                    </div>
                            </div>
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
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
@endsection