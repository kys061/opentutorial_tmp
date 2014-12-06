<div class="col-xs-9">

<div class="page-header">
	<h1>Modify Contents</h1>
	</div>

<form action="/tmp/index.php/topic/modify/<?php echo $this->uri->segment(3);?>" method="post">
<?php echo validation_errors(); ?>
<input class="span12" type="text" name="title" value="<?=$topic->title?>" />
<textarea class="span12" rows="15" name="description"><?php echo $topic->description; ?></textarea>
<input type="submit" class="btn" />
</form>
</div>

