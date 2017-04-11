<div class="section scrollspy" id="work">
    <div class="container">
        <h2 class="header text_b">Proyectos </h2>
        <div class="row">
          @foreach($proyectos as $in)
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('imgProyectos')}}/{{$in->imagen_principal}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"> <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="/ver_proyecto/{{ $in->nombreProyecto }}/{{ $in->id }}">{{$in -> nombreProyecto}}</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{$in -> nombreProyecto}}<i class="mdi-navigation-close right"></i></span>
                        <p><?php echo $in->caracteristicas; ?></p>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
