<div class="row">
    <div class="col-md-5">
        <div class="row ml-4 mt-5">
            <div class="row">
                <div class="col-md-5 mb-3 mt-3">
                    <label for="DDD" class="font-weight-bold"><strong>DDD</strong></label>
                    <input type="search" class="form-control form-control" id="search_ddd" placeholder="DDD"
                            wire:model.debounce.150ms="search_ddd">
                </div>
                <div class="col-md-5 mb-3 mt-3">
                    <label for="estado" class="font-weight-bold"><strong>Estado</strong></label> 
                    <select type="search" class="form-control form-control" id="search_estado" placeholder="Estado"
                    wire:model.debounce.150ms="search_estado">
                        <option value="">Selecione &darr;</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>            
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mb-3">
                    <label for="cidade" class="font-weight-bold"><strong>Cidade</strong></label>
                    <input type="search" class="form-control form-control" id="search_cidade" placeholder="Cidade"
                            wire:model.debounce.150ms="search_cidade">
                </div>
            </div>
        </div>
        <div class="text-danger" style="margin-right: 30%; margin-top: 8%">
            <h6>Preencha ao menos um dos filtros acima para facilitar encontrar a localidade desejada!</h6>
        </div>
    </div>
    
    <div class="col-md-7">
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
                <?php $__empty_1 = true; $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td scope="row"><?php echo e($cidade->ddd); ?></td>
                    <td><?php echo e($cidade->name); ?></td>
                    <td><?php echo e($cidade->cnl_municipio); ?></td>
                    <td><?php echo e($cidade->cnl_area_local); ?></td>
                    <td><?php echo e($cidade->estado); ?></td>
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <th colspan="5">
                        <span class="text-danger">Sua pesquisa não encontrou resultados...</span>
                    </th>
                </tr>
              <?php endif; ?>
            </tbody>
        </table>
    <?php echo e($cidades->links()); ?>

    </div>
</div>

<?php /**PATH C:\xampp\htdocs\Cover-Panel\resources\views/livewire/panel.blade.php ENDPATH**/ ?>