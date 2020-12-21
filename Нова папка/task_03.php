<?php

$people = [
	[ 'name'=>'George' ,
	  'height'=> 1.75 . 'sm',
	  'weight'=> 72 . 'kg' ,
    ],
	[ 'name'=>'John' ,
	  'height'=> 1.90 . 'sm',
	  'weight'=> 96 . 'kg' ,
	],
	[ 'name'=>'Frank',
	  'height'=> 1.64 . 'sm',
	  'weight'=> 70 . 'kg' ,
	],
	[ 'name'=>'Fred'  ,
	  'height'=> 1.80 . 'sm' ,
	  'weight'=> 82 . 'kg' ,
	],
	[ 'name'=>'Tom',
	  'height'=> 1.85 . 'sm',
	  'weight'=> 91 . 'kg' ,
	],

];

echo "<table border = 1>";
 foreach ($people as $key => $value) {
 	echo "<thead>";
 	echo "<tr>";
 	 foreach ($value as $inner_key => $inner_value) {
 	 	echo "<th>";
 	 	echo $inner_key;
 	 	echo "</th>";
 	 }
 	 echo "</tr>";
 	 echo "</thead>";
 	 break;
 }