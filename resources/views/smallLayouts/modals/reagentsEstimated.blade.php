<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Registrar dados do reagente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-4">
                        <label for="reagent_name" class="form-label">Nome do reagente</label>
                        <input type="text" id="reagent_name" class="form-control" placeholder="Digite o nome do reagente">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="volume" class="form-label">g de reagente p/ 1 litro</label>
                        <input type="number" id="volume" class="form-control" placeholder="0">
                    </div>

                    <div class="col mb-4">
                        <label for="price" class="form-label">Custo por kg (previsão)</label>
                        <input type="text" data-affixes-stay="true" data-prefix="R$ " data-thousands="," data-decimal="." class="form-control" id="price" value="R$ 0.00" required><br>
                    </div>

                    <div class="col mb-4">
                        <label for="unit_type" class="form-label">Reagente suficiente em estoque?</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option selected disabled>--</option>
                            <option value="1">Sim</option>
                            <option value="1">Não</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Registrar dados</button>
            </div>

        </div>
    </div>
</div>
