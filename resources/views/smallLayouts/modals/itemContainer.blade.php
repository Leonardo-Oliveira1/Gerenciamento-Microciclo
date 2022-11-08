<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Registrar novo tipo de recipiente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <form method="POST" action="{{ route('register_container_type') }}" enctype='multipart/form-data'>
                @csrf

                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-4">
                            <label for="container_name" class="form-label">Nome do recipiente</label>
                            <input type="text" id="container_name" name="container_name" class="form-control" placeholder="Digite o nome do recipiente">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Registrar recipiente"></input>
                </div>
            </form>
        </div>
    </div>
</div>
