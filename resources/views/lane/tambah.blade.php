@extends('frontend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header">{{ __('Tambah Data Jalur') }}</div>
				
				<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" >
						@csrf
						<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Jalur') }}</label>

                            <div class="col-md-6">
                                <input id="ln_name" name="ln_name" type="text" class="form-control @error('ln_name') is-invalid @enderror" name="ln_name" value="{{ old('ln_name') }}" required autocomplete="ln_name" autofocus>

                                @error('ln_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
									{{ __('Simpan') }}
									<button type="submit" class="btn btn-primary">
										{{ __('Reset') }}
                                </button>
							</div>	
						</div>
       
		</table>

		</form>

</body>
</html>
@endsection