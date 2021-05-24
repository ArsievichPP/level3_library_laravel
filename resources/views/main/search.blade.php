@extends('main/layout')

@section('content')
    <section id="main" class="main-wrapper">
        <div class="container">
            <div id="content" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @if($books->isNotEmpty())
                    @foreach($books as $book)
                        <div data-book-id="{{$book->id}}"
                             class="book_item col-xs-6 col-sm-3 col-md-2 col-lg-2">
                            <div class="book">
                                <a href="/book/{{$book->id}}"><img
                                        src="./img/{{$book->image}}"
                                        alt="{{$book->name}}">
                                    <div data-title="{{$book->name}}" class="blockI"
                                         style="height: 46px;">
                                        <div data-book-title="{{$book->name}}"
                                             class="title size_text"> {{$book->name}}
                                        </div>
                                        <div data-book-author="{{$book->author}}"
                                             class="author">{{$book->author}};
                                        </div>
                                    </div>
                                </a>
                                <a href="/book/{{$book->id}}">
                                    <button type="button" class="details btn btn-success">Читать</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Поиск не дал результатов!</p>
                @endif
            </div>
        </div>
    </section>
@endsection
