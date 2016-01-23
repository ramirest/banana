<div class="portlet portlet-default">
    <div class="portlet-body">
        <div class="table-responsive">
            <?php echo isset($msg)?$msg:''; ?>
            <?php
            if($this->session->flashdata('pagamento'))
                echo $this->session->flashdata('pagamento');
            ?>
            <table id="table-geral" class="table table-striped table-bordered table-hover table-green">
                <thead>
                <tr>
                    <th>Associado</th>
                    <th>Fatura/Sid</th>
                    <th>Valor</th>
                    <th>Vencimento</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                if($pedidos !== FALSE):
                    $i = 0;
                    foreach ($pedidos->result() as $p):
                        $i++;
                        if(($i % 2) == 0)
                            $classe = 'odd';
                        else
                            $classe = 'even';
                        ?>
                        <tr class="<?php echo $classe; ?> gradeX">
                            <td><?php echo $p->associado; ?></td>
                            <td><?php echo  $p->fid.' / '.$p->sid; ?></td>
                            <td><?php echo 'R$ '.$p->valor; ?></td>
                            <td><?php echo $this->data->mysql_to_human($p->dtvencimento); ?></td>
                            <td><?php echo $this->cart->check_status($p->status); ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown">AÃ§Ã£o <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <?php echo form_open('escritorio-virtual/pedidos/pagar_fatura_venda/'.$p->fid.'/'.$p->aid); ?>
                                            <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmacao" data-title="Confirmar pagamento" data-message="Tem certeza de que deseja confirmar o pagamento desta fatura?">
                                                <i class="fa fa-money"></i> Confirmar pagamento
                                            </button>
                                            <?php echo form_close(); ?>
                                        </li>
                                    </ul>
                                    <!-- ConfirmaÃ§Ã£o -->
                                    <div class="modal modal-flex fade" id="confirmacao" tabindex="-1" role="dialog" aria-labelledby="confirmacaoLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="confirmacaoLabel">Confirma pagamento?</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Tem certeza de que deseja confirmar o pagamento deste associado?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">NÃ£o</button>
                                                    <button type="button" class="btn btn-danger" id="confirm">Sim</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.confirmaÃ§Ã£o-->

                                </div>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                endif;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>	