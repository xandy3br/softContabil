<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Retencao'), ['action' => 'edit', $retencao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Retencao'), ['action' => 'delete', $retencao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $retencao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Retencoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Retencao'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="retencoes view large-10 medium-9 columns">
    <h2><?= h($retencao->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($retencao->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($retencao->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contas A Pagar') ?></h4>
    <?php if (!empty($retencao->contas_a_pagar)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Forma Pagamento Id') ?></th>
            <th><?= __('Fornecedor Id') ?></th>
            <th><?= __('Numero Documento') ?></th>
            <th><?= __('Valor Documento') ?></th>
            <th><?= __('Valor Liquido') ?></th>
            <th><?= __('Parcelas') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($retencao->contas_a_pagar as $contasAPagar): ?>
        <tr>
            <td><?= h($contasAPagar->id) ?></td>
            <td><?= h($contasAPagar->forma_pagamento_id) ?></td>
            <td><?= h($contasAPagar->fornecedor_id) ?></td>
            <td><?= h($contasAPagar->numero_documento) ?></td>
            <td><?= h($contasAPagar->valor_documento) ?></td>
            <td><?= h($contasAPagar->valor_liquido) ?></td>
            <td><?= h($contasAPagar->parcelas) ?></td>
            <td><?= h($contasAPagar->created) ?></td>
            <td><?= h($contasAPagar->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ContasAPagar', 'action' => 'view', $contasAPagar->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ContasAPagar', 'action' => 'edit', $contasAPagar->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContasAPagar', 'action' => 'delete', $contasAPagar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagar->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contas A Receber') ?></h4>
    <?php if (!empty($retencao->contas_a_receber)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Cliente Id') ?></th>
            <th><?= __('Forma Recebimento Id') ?></th>
            <th><?= __('Conta Empresa Id') ?></th>
            <th><?= __('Numero Documento') ?></th>
            <th><?= __('Valor Documento') ?></th>
            <th><?= __('Valor Liquido') ?></th>
            <th><?= __('Parcelas') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($retencao->contas_a_receber as $contasAReceber): ?>
        <tr>
            <td><?= h($contasAReceber->id) ?></td>
            <td><?= h($contasAReceber->cliente_id) ?></td>
            <td><?= h($contasAReceber->forma_recebimento_id) ?></td>
            <td><?= h($contasAReceber->conta_empresa_id) ?></td>
            <td><?= h($contasAReceber->numero_documento) ?></td>
            <td><?= h($contasAReceber->valor_documento) ?></td>
            <td><?= h($contasAReceber->valor_liquido) ?></td>
            <td><?= h($contasAReceber->parcelas) ?></td>
            <td><?= h($contasAReceber->created) ?></td>
            <td><?= h($contasAReceber->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ContasAReceber', 'action' => 'view', $contasAReceber->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ContasAReceber', 'action' => 'edit', $contasAReceber->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContasAReceber', 'action' => 'delete', $contasAReceber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAReceber->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
