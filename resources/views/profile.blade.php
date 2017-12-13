@extends('layouts.app')

@section('title', 'Perfil del Usuario')

@section('body-class', 'product-page')

@section('content')
<div class="main main-raised" style="margin: 0px 0px 0px; border-radius: 0px;">
<div class="container">

  <div class="section text-center" style="padding: 100px 0;">

  <div class="team">
    <div class="row">
      <img src="{{ Auth::user()->image }}" alt="Profile Picture" class="img-raised img-circle">
      <a href="{{ ('/products/create') }}" class="btn btn-success btn-round" style="margin-bottom: 100px;">Editar datos</a>
      <form action="/user/image" method="post" id="form-image" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="image" class="btn btn-info btn-round">Subir imagen</label>
        <input style="display: none;" type="file" name="image" id="image" accept="image/*" onchange='submit()'>
        <script>
          function submit() {
            document.getElementById('form-image').submit();
          }
        </script>
      </form>
      <br/>
      <table class="table">
          <thead>
              <tr>
                <td class="col-md-2 text-center">Nombre</th>
                <td class="col-md-3 text-center">E-mail</th>
                <td class="text-center">Fecha registro</th>
              </tr>
          </thead>
          <br><br><br>
          <tbody>
            <tr>
              <th class="col-md-2 text-center">{{Auth::user()->name}}</th>
              <th class="col-md-3 text-center">{{Auth::user()->email}}</th>
              <th class="text-center">{{date('d-m-Y', strtotime(Auth::user()->created_at))}}</th>
            </tr>
          </tbody>
        </table>
    </div>
  </div>

  </div>

  </div>

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
              Tudipa - Estudia a tu ritmo &copy; 2017 <a href="https://github.com/argentiun/Tudipa-Laravel" target="_blank"> | Github</a>
          </div>
      </div>
  </footer>
@endsection
