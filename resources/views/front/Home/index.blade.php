@extends('Front.main')
@section('content')
    <section id="home-section" class="line">
        <div class="margin">
            <!-- ARTICLES -->
            <div class="s-12 l-12">
                <div class="slider-container">
                    <div class="flexbox-slider flexbox-slider-1">
                        @foreach($news as $new)
                            <div class="flexbox-slide">
                                <a href="{{route('Front.archive.view', $new->id)}}">
                                    <img src="{{asset('images/news/' . \App\Models\News::find($new->id)->img_url)}}" alt="Slide Image">
                                    <div class="text-block">
                                        <h3 style="color: white">{{$new->title}}</h3>
                                        <div class="text">
                                            {!! substr(strip_tags($new->content),0,180) . '...' !!}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- SIDEBAR -->
        </div>
    </section>
@endsection