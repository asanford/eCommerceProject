<?php
	include 'database.php';

	function ratings($result)
	{
		while($item = mysql_fetch_array($result))
		{
			$name = $item['Product Name'];
			$description = $item['Description'];
			$sku = $item['SKU'];
			$url = $item['Product Image'];
			$score = $item['Score'];
			$ratings = $item['Ratings'];
			$price = $item['Price'];
										
			print "
				<div class = 'item'>
					<a href = '#' alt = '$name'>
						<img src = 'img/products/$url.jpg' alt = '$description - $sku'>
						<p>$name</p>
					</a>
					
					<div class = 'rating'>
						<div class = 'stars'>
							<a href = '#' alt = 'Rating'>
			";
			
			if($ratings == "0")
			{
				$rating = "Not Yet Rated";
			}
			
			else
			{
				$rating = $score/$ratings;
				
				if($rating > 0 && $rating < 0.50)
				{
					for($i = 1; $i <= 5; $i++)
					{
						print "<img src = 'img/stars/star_empty.png' alt = 'Rating'>";
					}
				}
				
				else if($rating >= 0.75 && $rating < 1.50)
				{
					print "<img src = 'img/stars/star_full.png' alt = 'Rating'>";
					
					for($i = 1; $i <= 4; $i++)
					{
						print "<img src = 'img/stars/star_empty.png' alt = 'Rating'>";
					}
				}
				
				else if($rating >= 1.50 && $rating < 2.50)
				{
					for($i = 1; $i <= 2; $i++)
					{
						print "<img src = 'img/stars/star_full.png' alt = 'Rating'>";
					}
					
					for($i = 1; $i <= 3; $i++)
					{
						print "<img src = 'img/stars/star_empty.png' alt = 'Rating'>";
					}
				}
				
				else if($rating >= 2.50 && $rating < 3.50)
				{
					for($i = 1; $i <= 3; $i++)
					{
						print "<img src = 'img/stars/star_full.png' alt = 'Rating'>";
					}
					
					for($i = 1; $i <= 2; $i++)
					{
						print "<img src = 'img/stars/star_empty.png' alt = 'Rating'>";
					}
				}
				
				else if($rating >= 3.50 && $rating < 4.50)
				{
					for($i = 1; $i <= 4; $i++)
					{
						print "<img src = 'img/stars/star_full.png' alt = 'Rating'>";
					}
					
					print "<img src = 'img/stars/star_empty.png' alt = 'Rating'>";
				}
				
				else if($rating >= 4.50)
				{
					for($i = 1; $i <= 5; $i++)
					{
						print "<img src = 'img/stars/star_full.png' alt = 'Rating'>";
					}
				}
			}
			
			print "
							</a>
						</div>
					</div>
					
					<div class = 'price'>
						<a href = '#' alt = '$price'>
							$$price
						</a>
					</div>
				</div>
			";
		}
	}
?>