<?php
$connect = mysqli_connect("localhost", "root", "", "1aravel");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM product 
	WHERE title LIKE '%".$search."%'
	OR product_id LIKE '%".$search."%' 
	OR description LIKE '%".$search."%' 
	OR tax LIKE '%".$search."%' 
	OR sale_price LIKE '%".$search."%'
	limit 0,5
	";
}
else
{
	$query = "
	select *from product  ORDER BY product_id limit 0,5";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>title</th>
							<th>sale_price</th>
							<th>description</th>
							<th>tax</th>
							<th>product_id</th>
							<th>Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["title"].'</td>
				<td>'.$row["sale_price"].'</td>
				<td>'.$row["description"].'</td>
				<td>'.$row["tax"].'</td>
				<td>'.$row["product_id"].'</td>
				<td><a href="single_product.php?product_id='.$row["product_id"].'">Visit W3Schools.com!</a> </td>
				 
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
