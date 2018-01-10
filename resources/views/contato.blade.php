@extends('layouts.main')

@section('content')

  <div class="page-info">
    <div class="breadcrumb"><p><a href="/">Home</a> / <a href="/contato">Contato</a></p></div>
  </div>

  <div class="form-box">
    <div class="form-profile">
      <h2>Vamos conversar?</h2>
      <p>Vivamus mi nisl, convallis nec sagittis quis, lacinia pulvinar massa. Donec varius viverra nisl ut faucibus. Vestibulum ut massa vitae lectus pellentesque rutrum ut et quam. Fusce in dui sit amet magna gravida iaculis nec vitae turpis. Mauris non sapien dolor. Pellentesque tempor sagittis nibh nec volutpat. Praesent nisl neque, sagittis vitae dui eu, euismod fermentum tortor. Etiam scelerisque vel turpis volutpat facilisis.</p>
    </div>
    <div class="form-container">
      <form>
        <div class="form-group">
          <label for="name">Nome Completo</label>
          <input type="text" class="form-control" id="name" placeholder="Nome Completo">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="telefone">Telefone (Com o DDD)</label>
          <input type="text" class="form-control input-medium bfh-phone" data-format="+55 (dd) ddddd-dddd">
        </div>        
        <div class="form-group">
          <label for="mensagem">Mensagem</label>
          <textarea class="form-control" id="mensagem" rows="3" placeholder="Sua mensagem..."></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>    
    </div>
  </div>
  
@endsection