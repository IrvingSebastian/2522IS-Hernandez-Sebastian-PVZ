@extends('template.layout')
  
@section('Titulo')
  {{$Dino['Nombre']}}
@endsection

@section('Cuerpo')
<div class="section-container">
  <div class="container">
    <div class="text-center section-container-spacer">
      <h2 class="with-project-number"><span class="project-number"> 
      </span> </h2>
    </div>
    <div class="row section-container-spacer">
      <img src="" class="img-responsive" style="width:2000px, height:1000px">

      <h4>Nombre Latino: </h4>
      <br>
      <p><b>Tipo: </b></p>
    </div>

    <div class="row">
      <h4>Otros Dinosaurios</h4>
    
      <div class="col-md-6">
      <img src="" class="img-responsive" style="width: 2000px; height:500px">
      <p><a href="" class="btn btn-primary btn-lg"></a></p>
      </div>
    
      <div class="col-md-6">
      <img src="" class="img-responsive" style="width: 2000px; height:500px">
      <p><a href="" class="btn btn-primary btn-lg"></a></p>
      </div>
    </div>
  </div>
</div>



<div class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <ul class="navbar-nav nav">
          <li>
            <a href="{{route('dinosaurios', $id-1)}}" title="" class="project-nav left"><span class="project-number"> </span>Anterior</a>
          </li>
        </ul>
        <p class="h5 navbar-text">Dinoanimales<i class="fa fa-chevron-down arrow-down" aria-hidden="true"></i></p>

        <ul class="navbar-nav nav navbar-right">
          <li>
            <a href="{{route('dinosaurios', $id+1)}}" title="" class="project-nav right"><span class="project-number"> </span>Siguiente</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection