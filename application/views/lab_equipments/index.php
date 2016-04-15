<h1>Lab Equipments</h1>
<a href="<?php echo base_url() ?>lab_equipments/add">Add Equipment</a>
<table class="w3-table-all" style="width:100%">
    <tbody>
        <tr>
        	<th>Id</th>
        	<th>Equipment Name</th>
        	<th>Total</th>
        	<th>Actions</th>
        </tr>
        <?php foreach ($query as $data): ?>
        <tr>
        	<td><?php echo $data->id ?></td>
        	<td><?php echo $data->name ?></td>
        	<td><?php echo $data->total ?></td>
        	<td>
        	    <a href="<?php echo base_url() ?>lab_equipments/view/<?php echo $data->id ?>">View</a>
        	    <a href="<?php echo base_url() ?>lab_equipments/delete/<?php echo $data->id ?>">Delete</a>
        	</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
