
<div class="col-xs-9"> 
	<article>
				<div class="page-header">
					<h1><?=$topic->title?></h1>
				</div>
				<?php if($this->session->userdata('is_login')){ ?>
					<div class="btn-group pull-right">
						<a href="/tmp/index.php/topic/add" class="btn btn-small">ADD</a>
						<a href="/tmp/index.php/topic/modify/<?php echo $this->uri->segment(3);?>" class="btn btn-small">MODIFY</a>
						<a href="/tmp/index.php/topic/delete/<?php echo $this->uri->segment(3);?>" type="submit" class="btn btn-danger btn-small">DELETE</a>
				</div>
				<?php } else { ?>
				<?php } ?>
			<div id="write_time"><span class="label label-info"><?=kdate($topic->created)?></span></div>
			<br>
			<div class="well well-large"><?=auto_link($topic->description)?></div>

	</article>
</div>



  								