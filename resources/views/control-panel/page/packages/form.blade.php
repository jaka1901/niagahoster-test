@extends('control-panel/base/index')
@section('content')
@php
	$price= null;
	if(isset($data)){
		$price = $data->data_parsed['price'];
	}
@endphp

<div class="page-header">
  <h3 class="page-title">Add Packages</h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('control-panel.packages.index') }}">Packages</a></li>
      <li class="breadcrumb-item active" aria-current="page">Add</li>
    </ol>
  </nav>
</div>

<div class="card">
	<div class="card-body">

		<form method="post" action="{{ !isset($data) ? route('control-panel.packages.store') :  route('control-panel.packages.update', ['package' => $data->id]) }}" class="forms-sample">
			@csrf
			@if(isset($data))
				@method('put')
			@else
				@method('post')
			@endif

			<div class="form-group">
				<label>Name</label>
				<input value="{{ $data->name ?? '' }}" name="name" type="text" class="form-control" placeholder="Package Name" required>
			</div>

			<div class="form-group" id="price-wrapper">
				<label>Price</label>
				<input name="price" type="text" class="form-control currency" placeholder="Price" required>
			</div>

			<div class="form-group">
				<div class="row" id="discount-wrapper" style="display: none;">
					<div class="col-lg-6">
						<div class="form-group mb-0">
							<label>Price (before discount)</label>
							<input name="price_before" type="text" class="form-control currency" placeholder="Price">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group mb-0">
							<label>Price (after discount)</label>
							<input name="price_after" type="text" class="form-control currency" placeholder="Price">
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="form-check form-check-flat form-check-primary">
					<label class="form-check-label">
						<input name="discount" type="checkbox" class="form-check-input" id="discount-trigger"> Discount?
					</label>
				</div>
			</div>


			<div class="form-group">
				<label>Content</label>
				<textarea name="content" placeholder="Use list for content" id="content">
					{!! $data->data_parsed['content'] !!}
				</textarea>
			</div>

			<hr>

			<button class="btn btn-gradient-success" type="submit">Save</button>
		</form>
	</div>
</div>
@endsection

@section('scripts-bottom')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js" integrity="sha512-t4CFex/T+ioTF5y0QZnCY9r5fkE8bMf9uoNH2HNSwsiTaMQMO0C9KbKPMvwWNdVaEO51nDL3pAzg4ydjWXaqbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	var editor = $('#content').trumbowyg({
		btns: [
			['strong','unorderedList']
		]
	});

	function formatNumber(n) {
		return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
	}

	$('.currency').on('keyup', function() {
	  const value = this.value.replace(/,/g, '');
	  this.value = formatNumber(value)
	});


	$(document).ready(function(){
		let $discount = $('#discount-trigger')


		@if(isset($data))

			@if(!$price['price'])
				$discount.prop('checked', true).trigger('change')
			@endif

			@if($price['price'])
				let currentPrice = '{{$price['price']}}'
				$('input[name="price"]').val(currentPrice).trigger('keyup')
			@endif

			@if($price['price_before'])
				let currentPriceBefore = '{{str_replace('.','', $price['price_before'])}}'
				$('input[name="price_before"]').val(currentPriceBefore).trigger('keyup')
			@endif

			@if($price['price_after'])
				let currentPriceAfter = '{{str_replace('.','', $price['price_after'])}}'
				$('input[name="price_after"]').val(currentPriceAfter).trigger('keyup')
			@endif

		@endif
	})

	$('#discount-trigger').on('change', function(){
		let $price = $('#price-wrapper')
		let val = $(this).is(':checked');
		let $wrap = $('#discount-wrapper')

		$('#price-wrapper input, #discount-wrapper input').val('')

		if(val == true){
			$price.hide().find('input').removeAttr('required')
			$wrap.show().find('input').attr('required','')
		}else{
			$price.show().find('input').attr('required','')
			$wrap.hide().find('input').removeAttr('required')
		}
	})

</script>
@endsection

@section('scripts-top')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
