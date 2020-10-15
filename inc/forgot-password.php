<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header border-0 text-right pb-0">
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
        </div>
        <div class="modal-body pt-0">
            <form id="form-forgot">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="text-uppercase text-login">Easypac</h5>
                        <p><small>Informe o e-mail para recuperação da senha</small></p>
                    </div>
                    <div class="col-12">
                        <div id="div-feedback-forgot" class="mb-3"></div>
                        <div id="div-input-email" class="form-group mb-3">
                            <input type="email" class="form-control" id="email" name="email" value="" required />
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="col-12 offset-lg-3 col-lg-6 mt-3">
                        <button type="button" class="btn btn-outline-default btn-block" id="button-forgot" onclick="removeModal()">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>