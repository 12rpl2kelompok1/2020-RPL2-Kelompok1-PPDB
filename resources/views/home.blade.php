@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                   @if (Session::has('sweetalert.alert'))
                        <script>
                            swal({!! Session::get('sweetalert.alert') !!});
                        </script>
                    @endif
                    @php
                        $siswa = App\Student::whereId_user(Auth::user()->id)->first();
                    @endphp
                    

                     @if($siswa->is_verified==0)

                    <a href="{{URL::to('siswa/create')}}">'anda belum mengisi biodata !'</a>

                     @else
                     Sudah Terverifikasi
                     @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
