<?php
if(!empty($list)){ ?>
<div class="portlet portlet-default">
  <div id="defaultPortlet" class="panel-collapse collapse in">
    <div class="portlet-body">
        <div class="table-responsive">
            <table id="table-list" class="table table-striped table-bordered table-hover table-green">
                <thead>
                    <tr>
                        <?php foreach($columns as $column):?>
                        <th>
                            <?php echo $column->display_as; ?>
                        </th>
                        <?php endforeach; ?>
                        <?php if(!$unset_delete || !$unset_edit || !empty($actions)): ?>
                        <th class="no-sorter">
                                <?php echo $this->l('list_actions'); ?>
                        </th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($list as $num_row => $row): ?>
                <tr class="<?php echo ($num_row % 2 == 1) ? 'even' : 'odd'; ?>">
                    <?php foreach($columns as $column):?>
                        <td>
                            <?php echo ($row->{$column->field_name} != '') ? $row->{$column->field_name} : '&nbsp;' ; ?>
                        </td>
                    <?php endforeach; ?>
                    <?php if(!$unset_delete || !$unset_edit || !empty($actions)):?>
                    <td>
                        <div class="tools">
                            <div class="btn-group">
                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><?php echo $this->l('list_actions'); ?>
                                    <span class="caret"></span>
                                </button>

                                <ul class="dropdown-menu pull-right" role="menu">
                                    <?php
                                    if(!$unset_edit):?>
                                        <li>
                                            <a href="<?php echo $row->edit_url?>" title="<?php echo $this->l('list_edit')?> <?php echo $subject?>">
                                                <i class="fa fa-edit"></i>
                                                <?php echo $this->l('list_edit') . ' ' . $subject; ?>
                                            </a>
                                        </li>
                                    <?php
                                    endif;
                                    if(!$unset_delete):
                                        form_open();
                                        ?>
                                        <li>
                                            <a href="javascript:void(0);" data-target-url="<?php echo $row->delete_url . '/csrf_s/'?>" title="<?php echo $this->l('list_delete')?> <?php echo $subject?>" class="delete-row" >
                                                <i class="fa fa-trash-o"></i>
                                                <?php echo $this->l('list_delete') . ' ' . $subject; ?>
                                            </a>
                                        </li>
                                    <?php
                                    form_close();
                                    endif;
                                    if(!empty($row->action_urls)):
                                        foreach($row->action_urls as $action_unique_id => $action_url):
                                            $action = $actions[$action_unique_id];
                                            ?>
                                            <li>
                                                <a href="<?php echo $action_url; ?>" class="<?php echo $action->css_class; ?> crud-action" title="<?php echo $action->label?>"><?php
                                                if(!empty($action->image_url)): ?>
                                                    <img src="<?php echo $action->image_url; ?>" alt="" />
                                                <?php
                                                endif;
                                                echo ' '.$action->label;
                                                ?>
                                                </a>
                                            </li>
                                        <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                        <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
	    </div>
    </div>
  </div>
</div>
<?php }else{ ?>
	<br/><?php echo $this->l('list_no_items'); ?><br/><br/>
<?php }?>