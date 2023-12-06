<form action="{{$action}}" method="post">

    @csrf
    @isset($nome)
        @method('PUT')
    @endif
    <button type="submit" class="btn btn-primary">
        {{ isset($nome) ? "Atualizar" : "Adicionar" }}
    </button>
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
                            class="form-control"
                            value="{{ isset($nome) ? $nome : old('nome') }}"
                        >
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
                               value="{{ isset($nome) ? $cpf : old('cpf') }}"
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
                               class="form-control"
                               value="{{ isset($nome) ? $telefone : old('telefone') }}"
                        >
                    </div>
                </div>
            </div>

            <div class="d-flex"> </div>

            <div class="list-group-item d-flex">
                <div class="row mb-3" >
                    <label for="endereco" class="form-label">Endereço</label><br>
                    <div class="col-9">
                        <label for="rua" class="form-label">Rua:</label>
                        <input type="text"  id="rua" name="rua" class="form-control"
                               value="{{ isset($nome) ? $rua : old('rua') }}"
                        >
                    </div>
                    <div class="col-3">
                        <label for="numero" class="form-label">Numero:</label>
                        <input type="number" id="numero" name="numero" class="form-control"
                               value="{{ isset($nome) ? $numero : old('numero') }}"
                        >
                    </div>
                    <div class="col-9">
                        <label for="complemento" class="form-label">Complemento:</label>
                        <input type="text"  id="complemento" name="complemento" class="form-control"
                               value="{{ isset($nome) ? $complemento : old('complemento') }}"
                        >
                    </div>
                    <div class="col-9">
                        <label for="bairro" class="form-label">Bairro:</label>
                        <input type="text"  id="bairro" name="bairro" class="form-control"
                               value="{{ isset($nome) ? $bairro : old('bairro') }}"
                        >
                    </div>
                    <div class="col-7">
                        <label for="cidade" class="form-label">Cidade:</label>
                        <input type="text"  id="cidade" name="cidade" class="form-control"
                               value="{{ isset($nome) ? $cidade : old('cidade') }}"
                        >
                    </div>

                    <div class="col-5">
                        <label for="estado" class="form-label">Estado:</label>
                        <select  id="estado" name="estado" class="form-select">
                            <option selected>
                                {{ isset($nome) ? $estado : old('estado') }}
                            </option>
                                @foreach($ufs as $uf)
                                        <option >
                                            {{$uf}}
                                        </option>
                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </span>
</form>
