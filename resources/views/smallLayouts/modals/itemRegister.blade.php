<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Registrar novo item no estoque</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="POST" action="/items/register_item" enctype='multipart/form-data'>
                @csrf


                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-4">
                            <label for="item_name" class="form-label">Nome do item</label>
                            <input type="text" id="item_name" name="item_name" class="form-control" required placeholder="Digite o nome do item">
                        </div>

                        <div class="col mb-4">
                            <label for="category" class="form-label">Categoria</label>
                            <select class="form-select" name="category" id="category" required>
                                <option value="" selected>--</option>
                                <option value="Reagentes">Reagentes</option>
                                <option value="Vidrarias">Vidrarias</option>
                                <option value="Plásticos e EPIs">Plásticos e EPIs</option>
                                <option value="Bactérias">Bactérias</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-4">
                            <label for="expiration_date" class="col-md-2 col-form-label">vencimento</label>
                            <div class="col-md-11">
                                <input class="form-control" name="expiration_date" type="date" required id="expiration_date" />
                            </div>
                        </div>

                        <div class="col mb-4">
                            <label for="used_in" class="form-label">Utilizado no experimento:</label>
                            <input type="text" id="used_in" name="used_in" class="form-control" required placeholder="Experimento em que é utilizado">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-4">
                            <label for="container_type" class="form-label">Tipo do recipiente</label>
                            <select class="form-select" name="container_type" id="container_type" required>
                                <option value="" selected>--</option>
                                <option value="Pote">Pote</option>
                                <option value="Tubo">Tubo</option>
                                <option value="Unidade">Unidade</option>
                                <option value="Caixa">Caixa</option>
                                <option value="Falcon">Falcon</option>
                                <option value="Pacote">Pacote</option>
                                <option value="3">Pacote com 50 unidades cada</option>
                                <option value="3">Pacote com 100 unidades cada</option>
                                <option value="3">Pacote com 500 unidades cada</option>
                                <option value="3">Pacote com 1000 unidades cada</option>
                            </select>
                        </div>

                        <div class="col mb-4">
                            <label for="volume" class="form-label">Volume (ou peso)</label>
                            <input type="number" name="volume" id="volume" class="form-control" required placeholder="0.00">
                        </div>


                        <div class="col mb-4">
                            <label for="unit_type" class="form-label">Medida</label>
                            <select class="form-select"  name="unit_type" id="unit_type" required>
                                <option value="" selected>--</option>
                                <option value="Kg">Kg</option>
                                <option value="g">g</option>
                                <option value="L">L</option>
                                <option value="ml">ml</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <label for="brand_name" class="form-label">Marca do produto</label>
                            <input type="text" name="brand_name" id="brand_name" class="form-control" required placeholder="Digite o nome da marca">
                        </div>

                        <div class="col mb-4">
                            <label for="quantity_in_stock" class="form-label">Quantidade no estoque</label>
                            <input type="number" name="quantity_in_stock" id="quantity_in_stock" class="form-control" required placeholder="0">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Registrar item"></input>
                </div>


            </form>
        </div>
    </div>
</div>
