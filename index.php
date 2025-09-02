<?php

// Arrays

$names = ['Rot','John','Pato','Alexis'];

//print_r($names[0]);

//Adding a new value to an array

array_push($names, 'Chibs');
//print_r($names);


// Delete a value from an array
array_splice($names, 0, 1);
//print_r($names);

//updating an existing array value

$names[1] = 'Patrick';
print_r($names);



?>