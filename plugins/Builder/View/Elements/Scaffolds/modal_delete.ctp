<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel"><?php echo $singularHumanName; ?> - Delete item</h4>
</div>
<div class="modal-body">
    <p>Do you want delete this item?</p>
    <hr/>
    <?php echo $this->Form->create('ScaffoldDelete'); ?>
    <input id="export-data" name="export-data" type="submit" class="btn btn-danger" value="Delete" />
    <?php echo $this->Form->end(); ?>
</div>
<div class="modal-footer">
    <small>Use datagrid view</small>
</div>
