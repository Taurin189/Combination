<h2>Listing <span class='muted'>Groups</span></h2>
<br>
<?php if ($combi): ?>

<?php else: ?>
<p>No Combination Table. Please Shuffle.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('combination?shuffle=true', 'Shuffle', array('class' => 'btn btn-success')); ?>

</p>
