<div class="col-xs-9">
<div class="page-header">
	<h1>New Story</h1>
	</div>
<form action="/tmp/index.php/topic/add" method="post">
<?php echo validation_errors(); ?>
<input type="text" name="title" placeholder="제목" class="span9" />
<textarea name="description" placeholder="본문" class="span9" rows="50"></textarea>
<div class="form_control">
<br>
<input id="addbtn" type="submit" class="btn" />
</div>
</form>

</div>

