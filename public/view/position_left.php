<?php if(!empty($modules)):?>
<div id="left" class="col-sm-3 hidden-xs">
<?php foreach($modules as $module):?>
<?php echo $module;?>
<?php endforeach;?>
</div>
<?php endif;?>