@extends('template.master')
@section('title')
Tambah Pertanyaan
@endsection

@section('content')
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Buat Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" class="form-control" id="tittle" name="judul" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Isi</label>
                <textarea name="isi" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>
<!-- /.card -->
@endsection