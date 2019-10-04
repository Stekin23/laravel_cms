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
                        <!-- date -->
                        <div class="s-12 l-1 post-date">
                            <p class="date">07</p>
                            <p class="month">mar</p>
                        </div>
                    </div>
                    <!-- text -->
                    <div class="post-text">
                        {!! $menu->content !!}
                    </div>
                </article>
                <!-- AD REGION -->
            </div>
            <!-- SIDEBAR -->
        </div>
    </section>
@endsection