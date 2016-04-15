<h1>Add</h1>
<?php echo form_open_multipart() ?>
<?php echo form_input('name') ?>
<?php echo form_input('description') ?>
<?php echo form_input('total') ?>
<?php
    echo form_input(
        array(
            'name' => 'image',
            'type' => 'file'
        )
    )
?>
<?php echo form_close() ?>
