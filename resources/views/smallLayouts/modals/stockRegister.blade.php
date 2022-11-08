<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Adicionar novo item no estoque</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="POST" action="{{ route('register_stock') }}" enctype='multipart/form-data'>
                @csrf


                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-4">
                            <label for="item_name" class="form-label">Nome do item <span style="color: red;">*</span></label>
                            <select class="form-select" name="item_name" id="item_name" required>
                                <option value="" selected>--</option>
                                @foreach($items as $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
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
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Registrar item"></input>
                </div>


            </form>
        </div>
    </div>
</div>
