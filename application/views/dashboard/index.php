<p class="lead">Tweet here</p>
<form method="post" class="form-signin">
	<textarea name="tweet" rows="3" placeholder="Type your tweet here"></textarea><br>
	<button class="btn btn-success btn-primary" type="submit">Tweet</button>
</form>

<h2>My Tweets</h2>

<table class="table table-striped table-bordered">
	<thead>
	<tr>
		<td>Time</td>
		<th>Tweet</th>
	</tr>
	</thead>
	<tbody>

	<?php foreach ($tweets as $tweet): ?>
	<tr>
		<td><?php echo $tweet->created?></td>
		<td><?php echo $tweet->content?></td>
	</tr>
		<?php endforeach?>

	</tbody>
</table>