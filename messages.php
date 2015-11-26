<?php include('libs/messages.php'); ?>
<?php include('includes/top.php'); ?>
<h1>liste des messages</h1>
<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>creator</th>
			<th>date</th>
			<th>message</th>
		</tr>
	</thead>
	<tbody>
		<?=build_html_messages(include('data/messages.php'));?>
	</tbody>
</table>
<button type="button" id="previous">Previous</button>
<button type="button" id="next">Next</button>
<?php
if($PageNo > 1) {
    echo "<a href='http://".$_SERVER["HTTP_HOST"]."/product.php?page=".($PageNo-1)."'>Prev</a>";
}

// We loop over all the numbered pages here
for($p = 1;$p <= ?;$p++) {
    echo "<a href='http://".$_SERVER["HTTP_HOST"]."/product.php?page=" . $p . "'>" . $p . "</a>";
}

// Next link goes after the numbers (if there are any pages left)
if(($PageNo + 1) <= $p) {
    echo "<a href='http://".$_SERVER["HTTP_HOST"]."/product.php?page=".($PageNo+1)."'>Next</a>";
?php>


<?php include('includes/bottom.php'); ?>