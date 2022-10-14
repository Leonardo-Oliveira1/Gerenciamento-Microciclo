<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Registrar novo item no estoque</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-4">
                        <label for="item_name" class="form-label">Nome do item</label>
                        <input type="text" id="item_name" class="form-control" required placeholder="Digite o nome do item">
                    </div>

                    <div class="col mb-4">
                        <label for="category" class="form-label">Categoria</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option selected disabled>--</option>
                            <option value="1">Reagentes</option>
                            <option value="2">Vidrarias</option>
                            <option value="3">Plásticos e EPIS</option>
                            <option value="3">Bactérias</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-4">
                        <label for="html5-date-input" class="col-md-2 col-form-label">vencimento</label>
                        <div class="col-md-11">
                            <input class="form-control" type="date" value="2022-06-18" id="html5-date-input" />
                        </div>
                    </div>

                    <div class="col mb-4">
                        <label for="item_name" class="form-label">Utilizado no experimento:</label>
                        <input type="text" id="item_name" class="form-control" placeholder="Experimento em que é utilizado">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-4">
                        <label for="container_type" class="form-label">Tipo do recipiente</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option selected disabled>--</option>
                            <option value="1">Pote</option>
                            <option value="2">Tubo</option>
                            <option value="3">Unidade</option>
                            <option value="3">Caixa</option>
                            <option value="3">Falcon</option>
                            <option value="3">Pacote</option>
                            <option value="3">Pacote com 50 unidades cada</option>
                            <option value="3">Pacote com 100 unidades cada</option>
                            <option value="3">Pacote com 500 unidades cada</option>
                            <option value="3">Pacote com 1000 unidades cada</option>
                        </select>
                    </div>

                    <div class="col mb-4">
                        <label for="volume" class="form-label">Volume (ou peso)</label>
                        <input type="number" id="volume" class="form-control" placeholder="0">
                    </div>


                    <div class="col mb-4">
                        <label for="unit_type" class="form-label">Medida</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option selected disabled>--</option>
                            <option value="1">Kg</option>
                            <option value="1">g</option>
                            <option value="1">L</option>
                            <option value="1">ml</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="brand_name" class="form-label">Marca do produto</label>
                        <input type="text" id="brand_name" class="form-control" placeholder="Digite o nome da marca">
                    </div>

                    <div class="col mb-4">
                        <label for="quantity_in_stock" class="form-label">Quantidade no estoque</label>
                        <input type="number" id="quantity_in_stock" class="form-control" placeholder="0">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Registrar item</button>
            </div>

        </div>
    </div>
</div>
