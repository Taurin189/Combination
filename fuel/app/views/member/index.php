<h2>Listing <span class='muted'>Members</span></h2>
<br>
<?php if ($members): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>User id</th>
			<th>Group id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($members as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->group_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('member/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('member/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('member/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Members.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('member/create', 'Add new Member', array('class' => 'btn btn-success')); ?>

</p>