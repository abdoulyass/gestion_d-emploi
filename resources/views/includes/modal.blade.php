<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="top: -52%; left: -69%; transform: translate(49%, 33%); width: 600px; height: 400px;">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background: none; border: none; font-size: 23px; width: 64px; padding: 7px; margin-left: 88%; margin-top: 3px;"> <i class="fa-solid fa-xmark"></i></button>
            <div class="modal-body">
                <div class="frame">
                    <form>
                        <div>
                            <div class="row">
                                <div class="col">
                                    @auth
                                    <div class="dropzone">
                                        <div class="text" style="display: flex; flex-direction:column">
                                            <p>Faites glisser ou cliquez pour Télécharger le fichier</p>
                                            <p>(.doc, .docx, .pdf, .rtf, .txt. Taille max. 2MB)</p>
                                        </div>
                                        <input type="file" class="upload-input" />
                                    </div>
                                    @endauth
                                    @guest
                                    <div class="dropzone">
                                        vous n'êtes pas authentifié
                                    </div>
                                    @endguest
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="margin-top: 169px; margin-left: 61px; margin-right: 64px;">
                                <label for="exampleInputEmail1">numero telephone</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter numero">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                        <div class="modal-footer" style='padding: 0; border: none;'>
                            <button type="button" class="btn btn-secondary" style="background:" data-dismiss="modal">diposer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
