<div class="block3" style=" background-image: url({{asset('images/background1.png')}}); height: 100vh; overflow: auto;">
    <div class="p-5" style="background-color: white; margin: 10% 10% 10% 10%; overflow: auto;">
        <h2 class="pt-2" style=" text-align: center; font-family: 'Anton-Regular';
        font-size: 30px;color: darkgoldenrod;  height: auto "> {{ $article->title  }} </h2>
        {!! $article->content !!}
    </div>
</div>
