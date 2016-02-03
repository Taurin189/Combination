<h2>Viewing <span class='muted'>#<?php echo $member->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $member->name; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $member->user_id; ?></p>
<p>
	<strong>Group id:</strong>
	<?php echo $member->group_id; ?></p>

<?php echo Html::anchor('member/edit/'.$member->id, 'Edit'); ?> |
<?php echo Html::anchor('member', 'Back'); ?>