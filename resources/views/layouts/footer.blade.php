<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="{{ route('enviar') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">Nombre:</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Correo:</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-action-subject prefix white-text"></i>
                            <input id="icon_subject" name="subject" type="text" class="validate white-text">
                            <label for="icon_subject" class="white-text">Asunto:</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="body" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Mensaje:</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Enviar
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col l5 s12 offset-l1">
              <p class="white-text"><strong> Teléfonos: 7811801 - 3135681843 - 3135682500 </strong></p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.6762991688458!2d-75.89061840309876!3d8.752856398160967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a2ffb2273fa03%3A0x29813c858ba5870e!2sSodeca!5e0!3m2!1ses!2sus!4v1492650189444" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Copyright &copy; 2017 Copyright Holder All Rights Reserved.
        </div>
    </div>
</footer>
