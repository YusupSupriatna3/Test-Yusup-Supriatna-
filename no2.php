<?php
function bubble_Sort($arr )
{
	do
	{
		$tukar = false;
		for( $i = 0, $c = count( $arr ) - 1; $i < $c; $i++ )
		{
			if( $arr[$i] > $arr[$i + 1] )
			{
				list( $arr[$i + 1], $arr[$i] ) = array( $arr[$i], $arr[$i + 1] );
				$tukar = true;
			}
		}
	}
	while( $tukar );
return $arr;
}
 $test_array = array(3, 0, 2, 5, -1, 4, 1,-2);
echo "Awal :\n";
echo implode(', ',$test_array );
echo "\nAkhir\n:";
echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
?>