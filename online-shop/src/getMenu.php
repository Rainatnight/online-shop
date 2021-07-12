<?php 
function getMenu () 
{
	$menuArr = [
   		[
    		'title' => 'Главная',
    		'path' => '/',
   		 	'sort' => 0,
		],
		[
   			'title' => 'Каталог',
    		'path' => '/catalog/',
    		'sort' => 4,
		],
		[
    		'title' => 'Здесь точно больше пятнадцати символов',
    		'path' => '/about/',
    		'sort' => 1,
		],
		[
    		'title' => 'Второй',
    		'path' => '/contacts/',
    		'sort' => 2,
		],
		[
    		'title' => 'Третий',
    		'path' => '/help/',
    		'sort' => 3,
		],
	];
	return $menuArr;
} 