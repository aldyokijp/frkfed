<div class="pull-right">
	<a href="<?php echo site_url('comment/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Comment Id</th>
		<th>Comment Status</th>
		<th>Comment Subject</th>
		<th>Comment Text</th>
		<th>Actions</th>
    </tr>
	<?php foreach($comments as $c){ ?>
    <tr>
		<td><?php echo $c['comment_id']; ?></td>
		<td><?php echo $c['comment_status']; ?></td>
		<td><?php echo $c['comment_subject']; ?></td>
		<td><?php echo $c['comment_text']; ?></td>
		<td>
            <a href="<?php echo site_url('comment/edit/'.$c['comment_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('comment/remove/'.$c['comment_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    
</div>
