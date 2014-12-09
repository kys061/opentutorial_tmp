
<div class="col-xs-12">
	<?php if($this->session->userdata('is_login')){ ?>
	<table class="table table-bordered table-hover">
		
		<caption><h1>OPEN TICKET</h1></caption>

		<thead>
			<tr>
				<th>티켓 넘버</th>
				<th>내     용</th>
				<th>시     간</th>
			</tr>
		</thead>
		<tbody >
			<?php
		//echo count($topics);
			foreach($topics as $entry){
				?>
				<tr>
					<td><a href="#" class="topic-id"><?=$entry->id?></a></td>
					<td><a href="/tmp/index.php/topic/post/<?=$entry->id?>" class="topic_contents"><?=$entry->title?></a></td>
					<td><a href="#" class="topic-created"><?=$entry->created?></a></td>
				</tr>
				<?php
			}
			?>
			<tr>
			<td></td>
			<td><?php echo $pages; ?></td>
			</tr>
		</tbody>
	</table>
	<?php } else { ?>
	<?php } ?>

</div>
<div class="col-xs-12"> 
	
					<div class="btn-group pull-right">
						<a href="/tmp/index.php/topic/add" class="btn btn-small">ADD</a>
			</div>
		

</div>


