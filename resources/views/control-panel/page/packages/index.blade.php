@extends('control-panel/base/index')
@section('title', 'Packages')
@section('content')

<div class="page-header">
  <h3 class="page-title">Data Packages
    <a href="{{ route('control-panel.packages.create') }}" class="btn btn-sm btn-gradient-info ml-3"><span class="material-icons">add</span></a>
  </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Packages</a></li>
      <li class="breadcrumb-item active" aria-current="page">List</li>
    </ol>
  </nav>
</div>

<div class="card">
  <div class="card-body">
    <table class="table table-hover w-100">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Best Seller</th>
          <th>User Counter</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

      {{-- looping data --}}
	    @foreach($data as $c => $r)
  	    <tr>
	      	<td>{{ $c + $data->firstItem() }}</td>
	      	<td>{{$r->name}}</td>
          <td>
            <a href="#!" onclick="$('#best-{{ $r->id }}').submit()" class="btn btn-sm btn-gradient-{{$r->best_seller == 1 ? 'info' : 'secondary'}}">{{$r->best_seller ? 'Iya' : 'Tidak'}}</a>

            <form id="best-{{ $r->id }}" method="post" action="{{ route('control-panel.packages.best-seller') }}" class="d-none">
              @csrf
              @method('post')
              <input type="hidden" name="id" value="{{ $r->id }}">
            </form>
          
          </td>
          <td>

            <form method="post" action="{{ route('control-panel.packages.user-counter') }}" class="d-flex" style="height: 30px;">
              @csrf
              @method('post')

              <input type="hidden" name="id" value="{{ $r->id }}">
              <input name="counter" value="{{ $r->user_counter }}" type="text" class="form-control form-control-sm currency" placeholder="Users Counter" style="width: 120px;height: 30px;">
              <button class="btn btn-sm btn-gradient-primary ml-1" type="submit">Submit</button>
            </form>
          
          </td>
	      	<td>
            <a href="#!" onclick="$('#status-{{ $r->id }}').submit()" class="btn btn-sm btn-gradient-{{$r->status == 1 ? 'info' : 'secondary'}}">{{$r->status ? 'Aktif' : 'Nonaktif'}}</a>

            <form id="status-{{ $r->id }}" method="post" action="{{ route('control-panel.packages.change-status') }}" class="d-none">
              @csrf
              @method('post')
              <input type="hidden" name="id" value="{{ $r->id }}">
            </form>
          </td>
          <td align="right">
            <a href="{{ route('control-panel.packages.edit', ['package' => $r->id]) }}" class="btn btn-sm btn-gradient-primary"><span class="material-icons">edit</span></a>
            <a href="#!" onclick="$('#delete-{{ $r->id }}').submit()" class="btn btn-sm btn-gradient-danger"><span class="material-icons">delete</span></a>
            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')" id="delete-{{ $r->id }}" method="post" action="{{ route('control-panel.packages.destroy', ['package' => $r->id]) }}" class="d-none">
              @csrf
              @method('delete')
            </form>
          </td>
      	</tr>
	    @endforeach

      {{-- empty states --}}
      @if($data->count() == 0)
        <tr>
          <td colspan="5" align="center">
            <h5>Data kosong</h5>
          </td>
        </tr>
      @endif

      </tbody>
    </table>

    {{$data->links()}}

  </div>
</div>

@endsection

@section('scripts-bottom')
<script type="text/javascript">
  

  function formatNumber(n) {
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
  }

  $('.currency').on('keyup', function() {
    const value = this.value.replace(/,/g, '');
    this.value = formatNumber(value)
  });


</script>
@endsection