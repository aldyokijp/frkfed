<?php echo form_open('comment/edit/'.$comment['comment_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="comment_status" class="col-md-4 control-label"><span class="text-danger">*</span>Comment Status</label>
		<div class="col-md-8">
			<select name="comment_status" class="form-control">
				<option value="">select</option>
				<?php 
				$comment_status_values = array(
					'0'=>'Unable',
					'1'=>'Enable',
				);

				foreach($comment_status_values as $value => $display_text)
				{
					$selected = ($value == $comment['comment_status']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('comment_status');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="comment_subject" class="col-md-4 control-label"><span class="text-danger">*</span>Comment Subject</label>
		<div class="col-md-8">
			<input type="text" name="comment_subject" value="<?php echo ($this->input->post('comment_subject') ? $this->input->post('comment_subject') : $comment['comment_subject']); ?>" class="form-control" id="comment_subject" />
			<span class="text-danger"><?php echo form_error('comment_subject');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="comment_text" class="col-md-4 control-label"><span class="text-danger">*</span>Comment Text</label>
		<div class="col-md-8">
			<textarea name="comment_text" class="form-control" id="comment_text"><?php echo ($this->input->post('comment_text') ? $this->input->post('comment_text') : $comment['comment_text']); ?></textarea>
			<span class="text-danger"><?php echo form_error('comment_text');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>