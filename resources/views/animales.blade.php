@extends('template.layout')
  
@section('Titulo')
  {{$Animal['Nombre']}}
@endsection

@section('Cuerpo')
<div class="section-container">
  <div class="container">
    <div class="text-center section-container-spacer">
      <h2 class="with-project-number"><span class="project-number">{{$Animal['ID']}}
      </span>{{$Animal['Nombre']}}</h2>
    </div>
    <div class="row section-container-spacer">
      <img src="{{$Animal['Imagen']}}" class="img-responsive" style="width:2000px, height:1000px">

      <h4>Nombre Latino: {{$Animal['Nombre_latino']}}</h4>
      <br>
      <p><b>Tipo: </b>{{$Animal['Tipo']}}</p>
      <p><b>Tiempo Activo: </b>{{$Animal['Tiempo_activo']}}</p>
      <p><b>Longitud Mínima: </b>{{$Animal['Longi_min']}} ft</p>
      <p><b>Longitud Máxima: </b>{{$Animal['Longi_max']}} ft</p>
      <p><b>Peso Mínimo: </b>{{$Animal['Peso_min']}} lbs</p>
      <p><b>Peso Máximo: </b>{{$Animal['Peso_max']}} lbs</p>
      <p><b>Esperanza de Vida: </b>{{$Animal['Esperanza_vida']}} años</p>
      <p><b>Habitat: </b>{{$Animal['Habitat']}}</p>
      <p><b>Dieta: </b>{{$Animal['Dieta']}}</p>
      <p><b>Rango Geográfico: </b>{{$Animal['Rango_geo']}}</p>
    </div>

    <div class="row">
      <h4>Otros Animales</h4>
    
      <div class="col-md-6">
      <img src="{{$Animal_1['Imagen']}}" class="img-responsive" style="width: 2000px; height:500px">
      <p><a href="{{route('animales', $Animal_1['ID'])}}" class="btn btn-primary btn-lg">{{$Animal_1['Nombre']}}</a></p>
      </div>
    
      <div class="col-md-6">
      <img src="{{$Animal_2['Imagen']}}" class="img-responsive" style="width: 2000px; height:500px">
      <p><a href="{{route('animales', $Animal_2['ID'])}}" class="btn btn-primary btn-lg">{{$Animal_2['Nombre']}}</a></p>
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
            <a href="{{route('animales', $id-1)}}" title="" class="project-nav left"><span class="project-number">{{$id-1}}</span>Anterior</a>
          </li>
        </ul>
        <p class="h5 navbar-text">Dinoanimales<i class="fa fa-chevron-down arrow-down" aria-hidden="true"></i></p>

        <ul class="navbar-nav nav navbar-right">
          <li>
            <a href="{{route('animales', $id+1)}}" title="" class="project-nav right"><span class="project-number">{{$id+1}}</span>Siguiente</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection