<?php

require 'Item.php';
require 'Book.php';

$my_item = new Item();

// echo $my_item ->code;

$my_item ->name = 'TV';

// echo $my_item ->getListingDescription();

echo '<br>';
$book = new Book();

echo $book ->getCode();
// $book ->name = 'Hamlet';
// $book ->author = 'Shakespeare';

// echo $book -> getListingDescription();



/* const methods
define('MAXIMUM', 100);

define('COLOUR', 'red');
*/

/* Calling the static const 
echo Item::MAX_LENGTH;
*/
