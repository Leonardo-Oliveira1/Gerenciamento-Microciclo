<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Registrar novo item no estoque</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="POST" action="{{ route('register_item') }}" enctype='multipart/form-data'>
                @csrf


                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-4">
                            <label for="item_name" class="form-label">Nome do item <span style="color: red;">*</span></label>
                            <input type="text" id="item_name" name="item_name" class="form-control" required placeholder="Digite o nome do item">
                        </div>
                        <div class="col mb-4">
                            <label for="used_in" class="form-label">Utilizado no experimento: </label>
                            <input type="text" id="used_in" name="used_in" class="form-control" placeholder="Experimento em que é utilizado">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col mb-4">
                            <label for="category" class="form-label">Categoria <span style="color: red;">*</span></label>
                            <select class="form-select" name="category" id="category" required>
                                <option value="" selected>--</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-4">
                            <label for="container_type" class="form-label">Tipo do recipiente <span style="color: red;">*</span></label>
                            <select class="form-select" name="container_type" id="container_type" required>
                                <option value="" selected>--</option>
                                @foreach($containers as $container)
                                <option value="{{ $container->name }}">{{ $container->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col mb-4">
                            <label for="volume" class="form-label">Volume (ou peso) <span style="color: red;">*</span></label>
                            <input type="number" name="volume" id="volume" class="form-control" required placeholder="0.00" step="any">
                        </div>


                        <div class="col mb-4">
                            <label for="unit_type" class="form-label">Medida <span style="color: red;">*</span></label>
                            <select class="form-select" name="unit_type" id="unit_type" required>
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
                            <label for="brand_name" class="form-label" >Marca do produto</label>
                            <input type="text" name="brand_name" id="brand_name" class="form-control" placeholder="Digite o nome da marca">
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
