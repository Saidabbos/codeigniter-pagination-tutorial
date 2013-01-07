<?php

foreach ($posts as $key => $value) 
{
	echo '<h1>'. $value->title . '</h1>';
	echo '<p>'. $value->body . '</p>';
}

?>


<?php echo $pagination_links; ?>



