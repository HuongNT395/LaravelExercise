<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <title>News</title>
</head>
<body>
<div class="container">
    <header>
        <div class="col-lg-2">
            <a href="#">write a story</a>
        </div>
        <div class="col-lg-5">
            <a href="#">News</a>
        </div>
        <div class="col-lg-2">
            <a href="">sign in</a> / <a href="#">sign up</a>
        </div>
        <div class="col-lg-3">
            <form method="post">
                <input type="search">
                <button type="submit">search</button>
            </form>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            @foreach($categories as $category)
                <li><a href="#">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </nav>
    <article>
        <div id="text">
            <h2>Interesting ideas that set your mind in motion.</h2>
            <h4>Hear directly from the people who know it best. From tech to politics to creativity and more — whatever your interest, we’ve got you covered.</h4>
            <p>
                <a href="#"><button class="button button-blue">Get started</button></a>
                <a href="#"><button>Learn more</button></a>
            </p>
        </div>
        <div id="img">
            <img src="{{asset('images/sea.jpg')}}">
        </div>
    </article>
    <article id="tops">
        <p><a>Tops story</a></p>
        <ul>
            @foreach($posts as $post)
                <li>
                    <div class="common">
                        <div class="image">
                            <img src="{{asset('storage/images/post/'.$post->image)}}">
                        </div>
                        <div class="content">
                            <h2>{{$post->title}}</h2>
                            <h5>{{$post->summary}}</h5>
                        </div>
                        <div class="author">
                            {{$post->user->name}}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </article>
</div>
</body>
</html>