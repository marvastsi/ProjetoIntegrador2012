<div class="rrcs index">
    <h2><?php echo __('Registros de Reclamações de Clientes'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('Cód.'); ?></th>
            <th><?php echo $this->Paginator->sort('Dono/Cliente'); ?></th>
            <th><?php echo $this->Paginator->sort('Data'); ?></th>
            <th><?php echo $this->Paginator->sort('Produto'); ?></th>
            <th><?php echo $this->Paginator->sort('Placa'); ?></th>
            <th><?php echo $this->Paginator->sort('Anexo'); ?></th>
            <th><?php echo $this->Paginator->sort('Setor/Empresa'); ?></th>
            <th class="actions"><?php echo __(' '); ?></th>
        </tr>
        <?php foreach ($rrcs as $rrc): ?>
            <tr>
                <td><?php echo h($rrc['Rrc']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($rrc['User']['nome'], array('controller' => 'users', 'action' => 'view', $rrc['User']['id'])); ?>
                </td>
                <td><?php echo h(formata_data($rrc['Rrc']['dataCriacao'])); ?>&nbsp;</td>
                <td><?php echo h($rrc['Rrc']['produto']); ?>&nbsp;</td>
                <td><?php echo h($rrc['Rrc']['placa']); ?>&nbsp;</td>
                <td> <a href="<?php echo h($rrc['Rrc']['anexo']); ?>" > <?php echo h($rrc['Rrc']['anexo']); ?> </a></td> 
                <td><?php echo h($rrc['Rrc']['setorOuEmpresa']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Anexo'), array('action' => 'addAnexo', $rrc['Rrc']['id'])); ?>
                    <?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $rrc['Rrc']['id'])); ?>
                    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $rrc['Rrc']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $rrc['Rrc']['id']), null, __('Are you sure you want to delete # %s?', $rrc['Rrc']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Página {:page} de {:pages}.')
        ));
        ?>	</p>

    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('Próximo') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Opções'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Cadastrar RRC'), array('action' => 'add')); ?></li>
    </ul>
</div>
