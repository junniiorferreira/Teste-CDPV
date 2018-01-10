@extends('layouts.main')

@section('content')
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background: url('http://htmlcolorcodes.com/assets/images/html-color-codes-color-tutorials-hero-00e10b1f.jpg'); background-size: cover;">
          <div class="layer-container">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <p>Louren Ipsum 1</p>
            </div>               
          </div>
      </div>
      <div class="swiper-slide" style="background: url('http://eskipaper.com/images/perfect-wallpaper-4.jpg'); background-size: cover;">
          <div class="layer-container">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <p>Louren Ipsum 2</p>
            </div>             
          </div>
      </div>
      <div class="swiper-slide" style="background: url('https://www.walldevil.com/wallpapers/a39/wallpaper-yellow-green-abstract-background-web-media.jpg'); background-size: cover;">
          <div class="layer-container">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <p>Louren Ipsum 3</p>
            </div>               
          </div>
      </div>      
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <div class="about-container">
    <h2>Seja bem vindo!</h2>
    <p>Vivamus mi nisl, convallis nec sagittis quis, lacinia pulvinar massa. Donec varius viverra nisl ut faucibus. Vestibulum ut massa vitae lectus pellentesque rutrum ut et quam. Fusce in dui sit amet magna gravida iaculis nec vitae turpis. Mauris non sapien dolor. Pellentesque tempor sagittis nibh nec volutpat. Praesent nisl neque, sagittis vitae dui eu, euismod fermentum tortor. Etiam scelerisque vel turpis volutpat facilisis.</p>
    <p>Donec vel fermentum arcu. Mauris congue erat in ornare feugiat. Nam tempus ornare pretium. Etiam eu elit est. Pellentesque consequat erat elit, ac placerat felis pellentesque quis. Proin rhoncus nunc id mauris dignissim faucibus. Maecenas ornare consequat rutrum. Aliquam fringilla ut dolor a ullamcorper. Duis orci lectus, faucibus non odio ac, laoreet bibendum neque.</p>
    <div class="about-block">
      <img src="{{ asset('images/bootstrap.jpg') }}">
      <h2>Bootstrap</h2>      
      <p>Vivamus mi nisl, convallis nec sagittis quis, lacinia pulvinar massa. Donec varius viverra nisl ut faucibus. Vestibulum ut massa vitae lectus pellentesque rutrum ut et quam</p>
    </div>
    <div class="about-block">
      <img src="{{ asset('images/jquery.png') }}">
      <h2>Jquery</h2>      
      <p>Vivamus mi nisl, convallis nec sagittis quis, lacinia pulvinar massa. Donec varius viverra nisl ut faucibus. Vestibulum ut massa vitae lectus pellentesque rutrum ut et quam.</p>
    </div>
    <div class="about-block">
      <img src="{{ asset('images/laravel.jpg') }}">
      <h2>Laravel</h2>      
      <p>Vivamus mi nisl, convallis nec sagittis quis, lacinia pulvinar massa. Donec varius viverra nisl ut faucibus. Vestibulum ut massa vitae lectus pellentesque rutrum ut et quam</p>
    </div>            
  </div>

<!--   <div class="bio-container">
    <div class="bio-cover">     
      <img src="{{ asset('images/bio.jpg') }}">
      <blockquote>Seja um padrão de qualidade. As pessoas não estão acostumadas a um ambiente onde o melhor é o esperado.</blockquote> 
      <p>Steve Jobs</p>     
    </div>
  </div> -->

  <!-- Swiper JS -->
  <script src="{{ asset('js/swiper.min.js') }}"></script>
  
@endsection