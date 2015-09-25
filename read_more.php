<?php 

echo  "dfhfhsdhfdsfhsdhfdkjshfh chfdhf
jdfgdfgjdfgdfgdf
dfhdfhjdhfdhf
fjdfhdjfhsjf";
?>
<?php echo strlen($string) >= 500 ? 
			substr($string, 0, 490) . ' <a href="read_more.php">[Read more]</a>' : 
				$string;?>