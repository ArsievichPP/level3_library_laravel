@extends('main/layout')


@section('content')
    <section id="main" class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    @include('admin/books_table')
                </div>
                <div class="col">
                    @include('admin/form')
                </div>
            </div>
        </div>
    </section>
@endsection
