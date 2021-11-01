<div class="row">
	<div class="col-lg-12 text-center">
		<h5 class="montserrat font-32 font-600">Paket Hosting Singapura yang Tepat</h5>
		<h5 class="montserrat font-25 font-300 alpha-8">Diskon 40% + Domain dan SSL Gratis untuk Anda</h5>
	</div>

	<div class="col-lg-12">
		<div class="deck mt-lg-5 mt-3">
			@foreach($data as $i => $r)
			<div class="deck-item {{$r->best_seller ? 'best-seller' : ''}}">
				<div class="deck-item--head">
					<h5 class="name">{{$r->name}}</h5>
					<div class="price">
						@if(isset($r->price_parsed['before']))
							<div class="before">{{ $r->price_parsed['before'] }}</div>
						@endif
						<div class="after">
							<span class="bigger">{{ $r->price_parsed['after'][0] }}</span>
							<span class="smaller">{{ $r->price_parsed['after'][1] }}</span>
						</div>
					</div>

					<div class="users"><b>{{ $r->user_counter }}</b> pengguna</div>
				</div>
				<div class="deck-item--content">
					{!! $r->data_parsed['content'] !!}
				</div>
				<div class="deck-item--action">
					<a class="{{$r->best_seller ? 'button-core' : 'button-black'}} py-2" href="#!">Pilih sekarang</a>
				</div>
			</div>{{-- /.deck-item --}}
			@endforeach
		</div>
	</div>
</div>

@section('scripts-bottom')
<script type="text/javascript">
	$('li:contains("★")').addClass('text-primary')
</script>
@endsection