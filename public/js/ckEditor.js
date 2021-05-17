$(document).ready(function() {
    $('.ckeditor').ckeditor();
});

CKEDITOR.replace('wysiwyg-editor', {
    filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});