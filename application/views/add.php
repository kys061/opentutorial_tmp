<div class="col-xs-12">
<div class="page-header">
	<h1>티켓 내용을 적어주세요</h1>
	</div>
<form action="/tmp/index.php/topic/add" method="post">
<?php echo validation_errors(); ?>
<input type="text" name="title" placeholder="제목" class="span12" />
<textarea name="description" placeholder="본문" class="span9" rows="50"></textarea>
<div class="form_control">
<br>
<input id="addbtn" type="submit" class="btn" />
</div>
</form>

</div>

