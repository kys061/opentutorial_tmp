
<div class="col-xs-3">
       
	<!--Sidebar content-->
	<?php if($this->session->userdata('is_login')){ ?>
	<ul class="nav nav-list bs-docs-sidenav affix">
		<?php
		foreach($topics as $entry){
			?>
			<li><a href="/tmp/index.php/topic/post/<?=$entry->id?>" class="topic_contents"><i class="icon-chevron-right"></i><?=$entry->title?></a></li>
			<?php
		}
		?>
	</ul>
	<?php } else { ?>
	<?php } ?>
</div>
