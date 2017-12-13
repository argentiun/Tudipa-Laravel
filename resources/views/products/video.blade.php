@extends('layouts.app')

@section('title', 'Bienvenido a Tudipa - Estudia a tu ritmo')

@section('body-class', 'landing-page')

@section('content')

<div class="container">
    <iframe width="1000" height="800"
      src="https://www.youtube.com/embed/{{$product->video}}">
    </iframe>
</div>

<footer class="footer">
      <div class="container">
          <nav class="pull-left">
      <ul>
        <li>
          <a href="#">
            Cursos
          </a>
        </li>
        <li>
          <a href="#">
             Enseña
          </a>
        </li>
        <li>
          <a href="#">
             Faq
          </a>
        </li>
        <li>
          <a href="#">
            Términos y condiciones
          </a>
        </li>
      </ul>
          </nav>
          <div class="copyright pull-right">
              Tudipa - Estudia a tu ritmo &copy; 2017 | <a href="https://github.com/argentiun/Tudipa-Laravel" target="_blank" style="color: #40a9f4;"> Github</a>
          </div>
      </div>
  </footer>
@endsection
