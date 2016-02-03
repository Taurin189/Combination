<h2>Viewing <span class='muted'>#<?php echo $group->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $group->name; ?></p>

<?php echo Html::anchor('group/edit/'.$group->id, 'Edit'); ?> |
<?php echo Html::anchor('group', 'Back'); ?>