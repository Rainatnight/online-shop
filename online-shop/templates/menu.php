<?php 
include ("/src/getMenu.php");
function menu () 
{   
	$menuArr = getMenu ();
	$sortedMenu = arraySort($menuArr, 'sort', SORT_ASC);
	$helpArr = $sortedMenu;
	foreach ($helpArr as $k => $v) {
		$a = cutString($v['title'], 15, '...');
		$sortedMenu[$k]['title'] = $a;
	} 
	return $sortedMenu;
}

function coloringItem ($out) 
{
	$currentpage = $_SERVER['REQUEST_URI'];
	$parsedPage = parse_url($currentpage, PHP_URL_PATH);
	if ($parsedPage == $out) {
		return true;
	} else {
		return false;
	}
}
  
$sortedMen = menu ();
?>

<section class="bg-white py-4">
	<ul class="list-inside bullet-list-item flex flex-wrap justify-between -mx-5 -my-2">
		<?php foreach($sortedMen as $out ) { ?>
			<li class="px-5 py-2">
				<a class="text-gray-600 hover:text-orange" href="<?php echo $out['path'] ?>">
					<?php if (coloringItem($out['path'])) {  ?> <font color="orange"> <?php echo $out['title']; ?> </font>
						<?php  } else { echo $out['title'];} ?>
				</a>
			</li>
			<?php } ?>
	</ul>
</section>
