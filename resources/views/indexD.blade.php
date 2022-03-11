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
            <p>Los <b>dinosaurios</b> se encuentran entre las criaturas más impresionantes que jamás hayan 
              poblado la Tierra. No obstante, a menudo se incluye por error en esta categoría a 
              animales extintos que en realidad no son dinosaurios ni parientes cercanos de estos. 
              Su aspecto más o menos parecido puede inducir fácilmente a error.</p>
            <p>De hecho, los dinosaurios fueron muy diversos. Los paleontólogos han reconocido más 
              de 1,000 especies distintas de aves, desde pequeños cazadores de insectos plumosos 
              hasta gigantes que crecieron hasta llegar a medir más de 100 pies de largo y pesar 
              más de 70 toneladas. Había dinosaurios con cuernos, dinosaurios acorazados, 
              dinosaurios con cabeza de cúpula, dinosaurios con cresta, dinosaurios de cuello largo,
              dinosaurios con garras en forma de hoz y dinosaurios desgarradores de carne. 
              La mayoría vivió una existencia completamente terrestre, pero algunos con frecuencia 
              se metieron en lagos y ríos mientras que también hubo un linaje que aleteó y 
              revoloteó en el aire, evolucionando hacia las aves que son los únicos dinosaurios 
              vivos en la actualidad.</p>
            <p>A diferencia de los reptiles que vemos hoy en día, los dinosaurios caminaban con 
              sus patas directamente debajo de sus caderas. Por ejemplo, los cocodrilos se 
              mueven gateando por el suelo y casi parecen estar arrastrándose sobre sus vientres. 
              Los dinosaurios caminaban de manera erecta.</p>
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
            <p>"Todo el mundo piensa que va a ser diferente para ellos. Los dinosaurios también lo pensaban"</p>
            <small class="pull-right">Kathryn Davis</small>
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