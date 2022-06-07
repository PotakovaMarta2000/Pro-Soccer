@include('layouts.header')
@include('layouts.banner')
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-section-name">
							<h2>Последние новости</h2>
						</div>
						@foreach($news as $item)
						<div class="col-sm-11 col-xs-11 pull-right">
							<div class="tg-blogpost tg-blogpostlist">
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<article class="tg-post">
											<figure class="tg-postimg">
												<img src="{{ asset('storage/' . $item->poster) }}" alt="image description">
												</figure>
											<div class="tg-posttitle">
												<h3>
													<a href="{{route('news.show', [$item->slug]) }}">
														{{ $item->title }}
													</a>
												</h3>
											</div>
											<div class="tg-description">
									<p>{!! $item->discription !!}</p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
</main>
		<!--************************************
				Main End
		*************************************-->
@include('layouts.footer')
