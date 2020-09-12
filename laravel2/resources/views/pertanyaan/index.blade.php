@extends('template.master')

@section('title')
List Pertanyaan
@endsection

@section('content')
<div class="row-fluid ">
    @foreach($data as key => $d)
    <div class="col-sm-4 ">
        <div class="card-columns-fluid">
            <div class="card  bg-light" style="width: 22rem; ">
                <div class="card-body">
                    <h5 class="card-title">{{ $d['judul']}}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection