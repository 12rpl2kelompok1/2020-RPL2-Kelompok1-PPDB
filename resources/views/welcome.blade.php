<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PPDB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <img src="{{URL::to('assets/images/Logo Smk.png')}}">
                <h2>SMK MAHAPUTRA CERDAS UTAMA</h2>
                <table align="center" border="1">
                <thead>
                    <tr>
                    <th>LANGKAH LANGKAH PENDAFTARAN PPDB ONLINE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="justify">1. Klik Register, Masukan data Nama dan Email pendaftaran, jangan 
                            lupa masukan Password yang mudah di ingat. <br>
                            2. Setelah Klik Simpan akan muncul form Login masukan Email dan 
                            Password yang di isi di Register.<br>
                            3. Lalu Save, Muncul Klik belum Mengisi Formulir.<br>
                            4. Tampil form Formulir, isikan data siswa yang ingin didaftarkan.<br>
                            5. Klik Save lalu muncul Data Berhasil DIsimpan. <br>
                            6. Tekan Logout, Selesai.</td>
                    </tr>
                </tbody>
                </table>
                    
                </div>
            </div>
        </div>
    </body>
</html>