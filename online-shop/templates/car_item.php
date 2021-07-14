<?php 
include ("/src/getCars.php");
$cars = getCars ();
foreach ($cars as $k => $v) { ?>
    <div class="bg-white w-full border border-gray-100 rounded overflow-hidden shadow-lg hover:shadow-2xl pt-4"> <a class="block w-full h-40" href="#"><img class="w-full h-full hover:opacity-90 object-cover" src="<?php echo $v['image']; ?>"  alt="<?php $v['name'] ?>"></a>
        <div class="px-6 py-4">
            <div class="text-black font-bold text-xl mb-2">
                <a class="hover:text-orange" href="#">
                    <?php echo $v['name']; ?>
                </a>
            </div>
            <p class="text-grey-darker text-base"> <span class="inline-block"> <?php echo $v['price']; ?></span> <span class="inline-block line-through pl-6 text-gray-400"> <?php echo $v['old_price']; ?> </span> </p>
        </div>
    </div>
<?php } ?>
