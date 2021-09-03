<?php

function bubble_Sort($num_array)
{
	do
	{
        $swapped = false;
        
		for( $i = 0, $c = count( $num_array ) - 1; $i < $c; $i++ )
		{
			if( $num_array[$i] > $num_array[$i + 1] )
			{
				list( $num_array[$i + 1], $num_array[$i] ) =
						array( $num_array[$i], $num_array[$i + 1] );
				$swapped = true;
			}
		}
	}
    while( $swapped );
    
return $num_array;

}

$num_array = array(3, 0, 2, 5, -1, 4, 1);

echo "Original Array :\n";
echo implode(', ',$num_array );

echo "<br>Sorted Array\n:";
echo implode(', ',bubble_Sort($num_array)). PHP_EOL;

?>