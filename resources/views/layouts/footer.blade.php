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

            <div class="col l3 s12 offset-l3">
                <h5 class="white-text">Social</h5>
                <ul>
                        <a class="white-text" target="_blank" href="https://www.facebook.com/sodecaunionltda/">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Copyright &copy; 2017 Copyright Holder All Rights Reserved.
        </div>
    </div>
</footer>
