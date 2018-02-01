<div class="container">
	<div class="hero_section">
		<div class="row">
			<div class="col-lg-5 col-sm-7">
				<div class="top_left_cont zoomIn wow animated">
					{!! $page->text !!}
					<a href="{{ route('page',array('alias',$page->alias)) }}" class="read_more2">Read more</a> </div>
			</div>
			<div class="col-lg-7 col-sm-5">

				{!! Html::image('assets/img/'.$page->images) !!}
			</div>
		</div>
	</div>
	{!! link_to(route('home'),'Back') !!}
</div>
