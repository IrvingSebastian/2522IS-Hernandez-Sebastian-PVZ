@extends('template.layout')

@section('Titulo')
  Inicio - Dinosaurios
@endsection

@section('Cuerpo')
<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="text-center section-container-spacer">
          <h2 class="with-project-number"><span class="project-number">00</span>Dinosaurios y su información que
          no necesitabas saber</h2>
        </div>
        <div class="row section-container-spacer">
          <div class="col-md-4">
              <div class="section-container-spacer">
                <h3>Entrega del Proyecto</h3>
                <p>13 de Marzo, 2022</p>
              </div>

              <h4 class="template-title-example">Equipo Colaborador</h4>
              <ul >
                <li>Luis Fernando Hernández García</li> 
                <li>Gabriela Menéndez Gómez</li>
                <li>Irving Gregorio Sebastián Ildefonso</li>
                <li>Fernando Vargas Bautista</li>
              </ul>
          </div>
          <div class="col-md-8">
            <h3>¿Qué son los dinosaurios?</h3>
            <p>Caminan sobre el planeta tierra desde mucho tiempo antes que los hombres, 
              existen cientos de miles de especies sobre ellos, y aunque creemos que los 
              conocemos, en realidad son todavía un misterio en su comportamiento, 
              conductas, biología y diversidad, hablamos de los <b>animales</b>.</p>
            <p>Cuando clasificamos a los seres vivos, lo hacemos principalmente en dos tipos:
              plantas y animales. Los animales son aquellos seres vivos capaces de moverse, 
              y que carecen de clorofila y de paredes celulares, es decir que son muy 
              distinto de las plantas. Bajo ese concepto, los humanos son incluidos dentro del 
              grupo de los animales, aunque a diferencia de estos poseen la capacidad de 
              pensar.</p>
            <p>El animal es un organismo pluricelular que, por lo general, presenta la capacidad 
              de movimiento y sensibilidad. Se caracteriza por poseer muchas células eucariotas, 
              carentes de una pared celular y de pigmentos fotosintéticos, y además de ser 
              heterótrofo, su nutrición se efectúa principalmente por ingestión a través 
              de una cavidad interna, algunos animales se alimentan de otros seres vivos, 
              y su reproducción suele ser sexual. La morfología de un animal es muy diversa, 
              existe tanto de forma microscópica (un gusano) como de gran tamaño (una ballena), 
              al igual que su anatomía es muy distinta entre las especies.</p>
            <p>Para dar a conocer un poco más acerca de estos dinosaurios hemos realizado esta página
              que consulta información de una API, misma que fue consultada por 2 miembros del equipo. 
              Al igual que con los animales, si deseas consultar cualquier información puedes usar los botones
              de navegación de Siguiente y Anterior o dar clic en los botones debajo de las 
              imágenes que aparecen a continuación.
            </p>
          </div>
        </div>


        <img src="" alt="" class="img-responsive" style="width: 5000px">
        <p><a href="" class="btn btn-primary btn-lg">XD</a></p>

        <blockquote class="text-center large-spacing">
            <p>"Los animales nacen como son, lo aceptan y eso es todo. Viven con mayor paz que las personas"</p>
            <small class="pull-right">Gregory Maguire</small>
        </blockquote>
        
        <div class="row">
            <div class="col-md-6">
            <img src="" class="img-responsive" style="width: 2000px; height:500px">
            <p><a href="" class="btn btn-primary btn-lg">XD</a></p>
            </div>

            <div class="col-md-6">
            <img src="" class="img-responsive" style="width: 2000px; height:500px">
            <p><a href="" class="btn btn-primary btn-lg">XD</a></p>
            </div>
        </div>

        <img src="" class="img-responsive" style="width: 5000px">
        <p><a href="" class="btn btn-primary btn-lg">XD</a></p>

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
            <a href="#" title="" class="project-nav left"><span class="project-number">00</span>Anterior</a>
          </li>
        </ul>
        <p class="h5 navbar-text">Dinoanimales<i class="fa fa-chevron-down arrow-down" aria-hidden="true"></i></p>

        <ul class="navbar-nav nav navbar-right">
          <li>
            <a href="" title="" class="project-nav right"><span class="project-number">01</span>Siguiente</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection