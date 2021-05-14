<!DOCTYPE html>
<html>

<head>
    <title>DK Piles - Mercadillo</title>
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- ckeditor template -->
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/textStyle.css') }}">
    
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        @yield('content')
    </div>

</body>

<!-- Ckeditor script -->
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });

    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

</html>