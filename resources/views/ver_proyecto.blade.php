@extends('template')
@section('content')
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/css/bootstrap-image-gallery.css">
    <link rel="stylesheet" href="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/css/demo.css">
    <div class="container">
        <!-- The container for the list of example images -->
        <div id="links">
          <h1 class="titulo"><strong> {{ $nombre }} </strong></h1>
          <br>
          @foreach($imagenes as $in)
            <a data-gallery="" title="Natalia" href="{{ asset('imgProyectos') }}/{{ $in->ruta }}">
                <img src="{{ asset('imgProyectos') }}/{{ $in->ruta }}" width="150 px" height="150 px">
            </a>
          @endforeach
        </div>
        <br>
    </div>
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">×</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/js/bootstrap-image-gallery.js"></script>
    <script src="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/js/demo.js"></script>-->
@endsection
