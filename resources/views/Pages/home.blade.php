@extends('master.masterpage',[
    'title'=> 'LHF Desenvolvimentos'
])
@section('content')
  @include('components.preloader')

  <!-- ***** Header Area Start ***** -->
  @include('components.header')

  @include('components.banner')

  @include('components.about')

  @include('components.services')
  
  @include('components.quote')

  @include('components.portfolio')
  
  @include('components.posts')  

  @include('components.form')

  @include('components.footer')


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('assets/js/owl-carousel.js')}}"></script>
  <script src="{{url('assets/js/animation.js')}}"></script>
  <script src="{{url('assets/js/imagesloaded.js')}}"></script>
  <script src="{{url('assets/js/custom.js')}}"></script>

@endsection
