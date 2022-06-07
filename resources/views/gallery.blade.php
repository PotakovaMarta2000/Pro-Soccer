@include('layouts.header')
@include('layouts.banner')
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Soccer Media Start
			*************************************-->
			<section class="tg-main-section tg-soccermedia tg-haslayout">
				<div class="container">
					<div class="col-sm-12 col-xs-12 pull-right">
						<div class="row">

							<div id="filter-masonry" class="tg-soccermedia-content tg-soccermedia-content2 tg-haslayout">
								@foreach($gallery as $item)
								<div class="masonry-grid laliga">
									<div class="tg-project">
										<figure class="tg-postimg">
											<img src="{{ asset('storage/' . $item->poster) }}" alt="image description">
										</figure>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Soccer Media End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->

		@include('layouts.footer')

