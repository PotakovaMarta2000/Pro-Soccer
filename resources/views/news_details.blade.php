@include('layouts.header')
@include('layouts.banner')
<div class="col-sm-11 col-xs-11 pull-right">
                <div class="tg-blogpost tg-blogpostlist">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <article class="tg-post">
                                <figure class="tg-postimg">
                                    <img src="{{ asset('storage/' . $news->poster) }}" alt="image description">
                                    </figure>
                                <div class="tg-posttitle">
                                    <h3>
                                        {{ $news->title }}
                                    </h3>
                                </div>
                                <div class="tg-description">
                            <p>{!! $news->discription !!}</p>
                                </div>
                            </article>
                        </div>
                    </div>
            </div>
</div>
@include('layouts.footer')