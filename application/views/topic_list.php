
<div class="col-xs-3">
       
	<!--Sidebar content-->
	<ul class="nav nav-list bs-docs-sidenav affix">
		<?php
		foreach($topics as $entry){
			?>
			<li><a href="/tmp/index.php/topic/post/<?=$entry->id?>"><i class="icon-chevron-right"></i><?=$entry->title?></a></li>
			<?php
		}
		?>
	</ul>
</div>
