<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header border-0 text-right pb-0">
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
        </div>
        <div class="modal-body pt-0">
            <form id="form-add-register">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h5><i class="fas fa-plus-circle"></i> Criar nova planilha</h5>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div id="div-input-codigo" class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" value="" required />
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div id="div-input-descricao" class="form-group">
                            <label for="descricao">Descricao</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" value="" required />
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div id="div-input-versao" class="form-group">
                            <label for="versao">Versão</label>
                            <input type="text" class="form-control" id="versao" name="versao" value="" required />
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div id="div-input-cadastro" class="form-group">
                            <label for="cadastro">Cadastro</label>
                            <input type="date" class="form-control" id="cadastro" name="cadastro" value="" required />
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div id="div-input-tipo" class="form-group">
                            <label for="tipo">Tipo</label>
                            <input type="text" class="form-control" id="tipo" name="tipo" value="" required />
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div id="div-input-situacao" class="form-group">
                            <label for="situacao">Situação</label>
                            <select class="form-control" id="situacao" name="situacao">
                                <option value="ativo">Ativo</option>
                                <option value="inativo">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 offset-lg-3 col-lg-6 mt-3">
                        <button type="submit" class="btn btn-outline-default btn-block" id="button-add-register">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>