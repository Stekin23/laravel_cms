@extends('Front.main')
@section('content')
    <section id="article-section" class="line archive">
        <div class="margin">
            <div class="s-12 l-12">
                @foreach($news as $new)
                    <article class="margin-bottom">
                        <div class="post-1 line">
                            <div class="s-12 l-11 post-image">
                                <a href="{{route('Front.archive.view', $new->id)}}">
                                    <img src="{{asset('images/news/' . \App\Models\News::find($new->id)->img_url)}}" alt="Fashion">
                                </a>
                            </div>
                            <div class="s-12 l-1 post-date">
                                @php
                                    $myDate=new \Carbon\Carbon($new->created_at);
                                    $day=$myDate->format('j');
                                    $month=$myDate->format('M');
                                @endphp
                                <p class="date">{{$day}}</p>
                                <p class="month">{{$month}}</p>
                            </div>
                        </div>
                        <div class="post-text">
                            <a href="{{route('Front.archive.view', $new->id)}}">
                                <h2>{{$new->title}}</h2>
                            </a>
                            <p>
                                {!! substr(strip_tags($new->content),0,430) . '...' !!}
                            </p>
                            <a class="continue-reading" href="{{route('Front.archive.view', $new->id)}}">Continue reading</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection