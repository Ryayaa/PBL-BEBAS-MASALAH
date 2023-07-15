@extends('adminlte::page')

@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>

<div class="container">
        <h1>Tambah Berita</h1>

    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div>
    <form action="{{ route('dashboard.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="thumbnail_berita">Thumbnail Berita</label>
            <input type="file" name="thumbnail_berita" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="judul_berita">Judul Berita</label>
            <input type="text" name="judul_berita" class="form-control">
        </div>
        <div class="form-group">
            <label for="konten_berita">Konten Berita</label>
            <input name="konten_berita" id="editor">
        </div>
        <div class="form-group">
            <label for="status_berita">Status Berita</label>
            <select name="status_berita" class="form-control">
                <option value="published">Published</option>
                <option value="draft">Draft</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>  
</div>
@stop

@section('css')
<style>
    .ck-editor__editable {
        min-height: 10rem;
    }
</style>
@stop

@section('js')
<script>
    ClassicEditor
        .create( document.querySelector ( '#editor' ), {
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'blockQuote', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                ],
                shouldNotGroupWhenFull: false
            }
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
@stop
