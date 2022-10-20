<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Você está prestes a tornar um usuário administrador!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p>O usuário terá permissão para <strong>adicionar, alterar e deletar registros além de poder adicionar novos usuários ao sistema</strong>. </p>
            </div>
            <form method="POST" action="/admin/makeAdmin/{{ $collaborator->id }}" enctype='multipart/form-data'>
                @csrf
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Tornar administrador"></input>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Modal-->
