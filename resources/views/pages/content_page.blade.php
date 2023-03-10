<div class="row gx-5 gy-5 pb-5">
    @foreach( $articles as $article)
        <div class="col-lg-4 col-md-6">
            <div class="card-list" style="width: 100%">
                @unless(empty($article->image))
                    <img src="{{$article->image}}" class="card-img-top p-5" style=" height: 90%; width: 100%" alt="">
                @else
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"
                         class="card-img-top " style="" alt="">
                @endif
                <div class="card-body ps-5 pe-5">
                    <h5 class="card-title"
                        style="font-size: 15px; line-height: 30px; height:2rem;">{{ $article->title}}</h5>
                    <p class="card-text text-white"
                       style="font-size: 20px; height:4rem; line-height: 20px;">{!! Str::limit(strip_tags($article->content)) !!}</p>
                    <a href="{{ route('article',['slug' => $article->slug]) }}" class="button-more">more</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{-- Pagination --}}
<div class="d-flex justify-content-center">
    {!! $articles->links() !!}
</div>
