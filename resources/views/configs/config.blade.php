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

                                    <table class="table table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th><input type="checkbox" onClick="toggle(this)" /> Seleccionar/Deseleccionar todos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> <input type="checkbox" value="tiempo" name="category[]"> El Tiempo</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" value="webcams" name="category[]"> Webcams</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" value="contacto" name="category[]"> Contacto</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" value="galeria" name="category[]"> Galeria</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value="mercadillo" name="category[]"> Mercadillo</td>
                                            </tr>
                                            <tr>
                                                <td> <input type="checkbox" value="noticias" name="category[]"> Noticias</td>
                                            </tr>
                                        </tbody>
                                    </table>
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

@section('js')
<script>
    function toggle(source) {
        checkboxes = document.getElementsByName('category[]');

        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }

    }
</script>
@stop