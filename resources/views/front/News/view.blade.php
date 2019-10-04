@extends('Front.main')
@section('content')
    <section id="article-section" class="line">
        <div class="margin">
            <!-- ARTICLES -->
            <div class="s-12 l-12">
                <!-- ARTICLE 1 -->
                <article class="margin-bottom">
                    <div class="post-1 line">
                        <!-- image -->
                        <div class="s-12 l-11 post-image">
                            <img src="{{asset('images/news/' . \App\Models\News::find($news->id)->img_url)}}" alt="Fashion">
                        </div>
                        <!-- date -->
                        <div class="s-12 l-1 post-date">
                            @php
                                $myDate=new Carbon\Carbon($news->created_at);
                                $day=$myDate->format('j');
                                $month=$myDate->format('M');
                            @endphp
                            <p class="date">{{$day}}</p>
                            <p class="month">{{$month}}</p>
                        </div>
                    </div>
                    <!-- text -->
                    <div class="post-text">
                        <h1>{{$news->title}}</h1>
                        {!! $news->content !!}
                    </div>
                </article>
            </div>
            <!-- SIDEBAR -->
        </div>
    </section>
@endsection