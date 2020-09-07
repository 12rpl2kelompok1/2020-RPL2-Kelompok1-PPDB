 @extends('layouts.app')

@section('content')
 @if (session('Success Message'))
                            <div class="alert alert-success">
                               {{ session('Success Message') }} 
                        </div>
                    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Biodata Siswa') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{URL::to('siswa/create')}}">
						@csrf
						<div class="form-group row">
                            <label for="student_name" class="col-md-4 col-form-label text-md-right">{{ __('Nama lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="student_name" type="text" class="form-control @error('student_name') is-invalid @enderror" name="student_name" value="{{old('student_name')}}" required autocomplete="student_name" autofocus>

                                @error('student_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                            <div class="col-md-6">
                               <input type="radio" name="gender" value="laki-laki"> Laki-Laki <br>
                               <input type="radio" name="gender" value="perempuan"> Perempuan <br>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Agama') }}</label>

                            <div class="col-md-6">
                                <input id="religion" type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}" required autocomplete="religion" autofocus>

                                @error('religion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="addres" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="addres" type="text" class="form-control @error('addres') is-invalid @enderror" name="addres" value="{{ old('addres') }}" required autocomplete="addres" autofocus>

                                @error('addres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="last_school" class="col-md-4 col-form-label text-md-right">{{ __('Asal Sekolah') }}</label>

                            <div class="col-md-6">
                                <input id="last_school" type="text" class="form-control @error('last_school') is-invalid @enderror" name="last_school" value="{{ old('last_school') }}" required autocomplete="last_school" autofocus>

                                @error('last_school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="fathers_name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Ayah') }}</label>

                            <div class="col-md-6">
                                <input id="fathers_name" type="text" class="form-control @error('fathers_name') is-invalid @enderror" name="fathers_name" value="{{ old('fathers_name') }}" required autocomplete="fathers_name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="fathers_occupation" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan Ayah') }}</label>

                            <div class="col-md-6">
                                <input id="fathers_occupation" type="text" class="form-control @error('fathers_occupation') is-invalid @enderror" name="fathers_occupation" value="{{ old('fathers_occupation') }}" required autocomplete="fathers_occupation" autofocus>

                                @error('fathers_occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="mothers_name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Ibu') }}</label>

                            <div class="col-md-6">
                                <input id="mothers_name" type="text" class="form-control @error('mothers_name') is-invalid @enderror" name="mothers_name" value="{{ old('mothers_name') }}" required autocomplete="mothers_name" autofocus>

                                @error('mothers_occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="mothers_occupation" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan Ibu') }}</label>

                            <div class="col-md-6">
                                <input id="mothers_occupation" type="text" class="form-control @error('mothers_occupation') is-invalid @enderror" name="mothers_occupation" value="{{ old('mothers_occupation') }}" required autocomplete="mothers_occupation" autofocus>

                                @error('mothers_occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Jalur') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
                                <select class="form-control" name="ln_id" id="basic-select">
                               @if ($jalur->count())
                               @foreach($jalur as $bebas)
                               <option value="{{$bebas->ln_id}}" {{$ln_id ?? '' == $bebas->ln_id}}>{{$bebas->ln_name}}</option>
                               @endforeach
                               @endif
                               </select>
                                @error('name')
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
                                </button>
                            </div>
                        </div>
				
						</form>
                     <a href="/siswa">''</a> 
                    
                </div>
            </div>
        </div>
    </div>
</div>
 @include('sweetalert::alert')
@endsection

	
