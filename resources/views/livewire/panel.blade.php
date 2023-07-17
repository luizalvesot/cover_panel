<div class="row">
    <div class="col-md-5">
     
    </div>
    
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-5 mb-3 mt-3">
                <label for="DDD" class="font-weight-bold"><strong>DDD</strong></label>
                <input type="text" class="form-control form-control" id="search" placeholder="DDD"
                        wire:model.debounce.200ms="search">
            </div>

            <div class="col-md-5 mb-3 mt-3">
                <label for="cidade" class="font-weight-bold"><strong>Cidade</strong></label>
                <input type="text" class="form-control form-control" id="search_cidade" placeholder="Cidade"
                        wire:model.debounce.200ms="search">
            </div>
        </div>
    
        <hr class="text-secondary mt-4 mb-4">
    
        <h5 class="m-3" align="center">Cidades Atendidas</h5>

        <table class="table table-striped shadow-sm table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">DDD</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">CNL Município</th>
                    <th scope="col">CNL Área Local</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $cidades as $cidade )
                <tr>
                    <td scope="row">{{ $cidade->ddd }}</td>
                    <td>{{ $cidade->name }}</td>
                    <td>{{ $cidade->cnl_municipio }}</td>
                    <td>{{ $cidade->cnl_area_local }}</td>
                    <td>{{ $cidade->estado }}</td>
                </tr>

               @empty
                <tr>
                    <th colspan="5">
                        <span class="text-danger">Sua pesquisa não encontrou resultados...</span>
                    </th>
                </tr>
              @endforelse
            </tbody>
        </table>
    </div>
</div>

