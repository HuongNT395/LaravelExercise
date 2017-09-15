<form action="{{route('add.post')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    Title<input type="text" name="title"><br>
    Sumary<textarea name="summary"></textarea><br>
    Content<textarea name="content"></textarea><br>
    Like<input type="number" name="like"><br>
    Category_name<select name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select><br>
    User_name<select name="user_id">
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select><br>
    Image<input type="file" name="image">
    <button type="submit">ADD</button>
 </form>