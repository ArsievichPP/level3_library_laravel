<div class="col">
    <table class="table table-bordered">
        <caption>Таблица книг</caption>
        <thead class="table-dark">
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Название книги</th>
            <th scope="col">Авторы</th>
            <th scope="col">Год</th>
            <th scope="col">Действия</th>
            <th scope="col">Просмотров</th>
            <th scope="col">Кликов</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->year}}</td>
                <td>
                    <form method="DELETE" name="delete" action="/admin/{{$book->id}}">
                        @csrf
                        @if($book->deleted_at === null)
                            <button class="btn-danger" type="submit"
                                    value="{{$book->id}}">delete
                            </button>
                        @else
                            <button class="btn disabled">delete
                            </button>
                        @endif
                    </form>
                </td>
                <td> {{$book->views}}</td>
                <td> {{$book->clicks}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">{{$books->links()}}</div>
</div>
