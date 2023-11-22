<form action="{{$action}}" method="post">
    @csrf
    <button type="submit" class="btn btn-primary">Adicionar</button>
    <br><br>
    <span class="list-group d-flex" >
        <div class="list-group-item d-flex">
            <br>
            <div class="list-group-item d-flex">
                <div class="row mb-3" >
                    <label for="cliente" class="form-label">Dados do Cliente</label>
                    <div class="col-12">
                        <label for="nome" class="form-label">Nome:</label>
                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            class="form-control">
                    </div>
                    <div class="col-10">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text"
                               id="cpf"
                               name="cpf"
                               pattern="[0-9]{11}"
                               title="insira seu CPF (somente números)"
                               placeholder="insira seu CPF (somente números)"
                               class="form-control"
                        >
                    </div>
                    <div class="col-10">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text"
                               id="telefone"
                               name="telefone"
                               pattern="[0-9]{11}"
                               title="insira seu tel com DD(somente números)"
                               placeholder="insira seu tel com DD(somente números)"
                               class="form-control">
                    </div>
                </div>
            </div>

            <div class="d-flex"> </div>

            <div class="list-group-item d-flex">
                <div class="row mb-3" >
                    <label for="endereco" class="form-label">Endereço</label><br>
                    <div class="col-9">
                        <label for="Rua" class="form-label">Rua:</label>
                        <input type="text"  id="rua" name="rua" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="numero" class="form-label">Numero:</label>
                        <input type="number" id="numero" name="numero" class="form-control">
                    </div>
                    <div class="col-9">
                        <label for="complemento" class="form-label">Complemento:</label>
                        <input type="text"  id="complemento" name="complemento" class="form-control">
                    </div>
                    <div class="col-9">
                        <label for="bairro" class="form-label">Bairro:</label>
                        <input type="text"  id="bairro" name="bairro" class="form-control">
                    </div>
                    <div class="col-7">
                        <label for="cidade" class="form-label">Cidade:</label>
                        <input type="text"  id="cidade" name="cidade" class="form-control">
                    </div>

                    <div class="col-5">
                        <label for="estado" class="form-label">Estado:</label>
                        <select  id="estado" name="estado" class="form-select"><option selected>...</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </span>
</form>
