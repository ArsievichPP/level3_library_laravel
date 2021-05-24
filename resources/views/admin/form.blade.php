<div class="col">
    <form enctype="multipart/form-data" action="/admin/addBook" method="post">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="book_name">Название книги</label>
                    <input name="book_name" type="text" class="form-control" id="book_name"
                           placeholder="Введите название"><br>

                    <label for="year">Год</label>
                    <input name="year" type="number" class="form-control" id="year" placeholder="Год"><br>

                    <label for="about_book">Описание</label>
                    <textarea class="form-control" name="about_book" id="about_book" rows="3"></textarea><br>
                </div>
            </div>
            <div class="col">
                <div class="row-cols-2">
                    <label for="author_1">Автор 1</label>
                    <input type="text" class="form-control" name="author_1" id="author_1"
                           placeholder="Ф.И.О автора">
                    <label for="author_2">Автор 2</label>
                    <input type="text" class="form-control" name="author_2" id="author_2"
                           placeholder="Ф.И.О автора">
                    <label for="author_3">Автор 3</label>
                    <input type="text" class="form-control" name="author_3" id="author_3"
                           placeholder="Ф.И.О автора">

                    <label class="text-danger">Если авторов < 3, оставьте поля пустыми!</label><br>

                    <label>Загрузить обложку книги:</label><br>
                    <input type="file" class="form-control-file" name="image" id="image">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Добавить книгу →</button>
    </form>
</div>
