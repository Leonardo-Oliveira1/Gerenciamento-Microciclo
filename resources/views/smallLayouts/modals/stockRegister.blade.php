<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Adicionar novo item no estoque</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form onsubmit="loading('main_container')" method="POST" action="{{ route('register_stock') }}" enctype='multipart/form-data'>
                <div id="loading" style="display: none; z-index: 10; position: absolute; left: 247px; top: 234px;">
                    <img src="{{ asset('assets/img/loading.gif') }}" width="50" style="opacity: 1.0; filter: contrast(900%);" alt="">
                </div>
                @csrf


                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-4">
                            <label for="item_id" class="form-label">Nome do item <span style="color: red;">*</span></label>
                            <select class="form-select" name="item_id" id="item_id" required>
                                <option value="" selected>--</option>
                                @foreach($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-4">
                            <label for="expiration_date" class="col-md-2 col-form-label">vencimento<span style="color: red;">*</span></label>
                            <div class="col-md-11">
                                <input class="form-control" name="expiration_date" type="date" required id="expiration_date" />
                            </div>
                        </div>
                        <div class="col mb-4" style="margin-top: 5px;">
                            <label for="quantity" class="form-label">Quantidade no estoque <span style="color: red;">*</span></label>
                            <input type="number" name="quantity" id="quantity" class="form-control" min="0" required placeholder="0">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-4">
                            <label for="lote" class="col-md-2 col-form-label">lote<span style="color: red;"></span></label>
                            <div class="col-md-11">
                                <input class="form-control" name="lote" type="text" placeholder="L000000" required id="lote" />
                            </div>
                        </div>
                        <div class="col mb-4" style="margin-top: 5px;">
                            <label class="form-label">preço <span style="color: red;"></span></label>
                            <input type="text" class="form-control" data-affixes-stay="true" data-prefix="R$ " data-thousands="," data-decimal="." id="preco" value="R$ 0.00" required><br>
		                    <script type="text/javascript">$("#preco").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: true});</script>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-4" style="margin-top: 5px;">
                            <label for="fabricante" class="form-label">fabricante <span style="color: red;"></span></label>
                            <input type="text" name="fabricante" id="fabricante" class="form-control" required placeholder="">
                        </div>
                        <div class="col mb-4">
                            <label for="fornecedor" class="col-md-2 col-form-label">fornecedor<span style="color: red;"></span></label>
                            <div class="col-md-11">
                                <input class="form-control" name="fornecedor" type="text" required id="fornecedor" />
                            </div>
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
