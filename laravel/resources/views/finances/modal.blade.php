<div class="modal fade" id="newFinanceModal" tabindex="-1" role="dialog" aria-labelledby="newFinanceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newFinanceModalLabel">Cadastrar Nova Conta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('finances.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <input type="text" class="form-control" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="value">Valor</label>
                        <input type="number" class="form-control" name="value" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Tipo</label>
                        <select name="type" class="form-control" required>
                            <option value="pagar">A Pagar</option>
                            <option value="receber">A Receber</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
