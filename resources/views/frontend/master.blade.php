@include('frontend.head')


<body>

	 <div id="preloader"></div>

    <!-- Choose Layout -->
    

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        @include('sweetalert::alert')

    	@include('frontend.sidebar')
    	 <div class="ecaps-page-content">
			@include('frontend.header')
            <div class="main-content dashboard-pt">
			  @yield('content')
      

</body>
@include('frontend.footer')
