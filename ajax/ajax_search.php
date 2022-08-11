<?php
if (!empty($_POST['searchText'])) {
	$search = $_POST['searchText'];
	$search = mb_eregi_replace("[^a-zа-яё0-9 ]", '', $search);
	$search = trim($search);
 
	$mysql = new mysqli('localhost','root','','BasedSuitDB');
    $temp1 = $mysql->query("SELECT * FROM `product` WHERE name like '%$search%' ");
    $mysql->close();
	$i = 1;
	while($products = $temp1->fetch_assoc()):  
	if($i == 4):?>
						</div>
						<?php $i = 1?>
					<?php endif?>
					<?php if($i == 1):?>
						<div class="container d-flex flex-row">
					<?php endif?>
					<?php ++$i?>
					<div class="card  col-md-3 w-25 h-25 col-10 mt-5 mx-auto">
						<div class="d-flex border-0 flex-row-reverse">
						</div> 
						<img class='mx-auto img-thumbnail' src="../styles/img/<?php echo $products['image']?>.webp" width="auto" height="auto" />
						<div class="card-body text-center mx-auto">
							<h5 class="card-title"><?php echo $products['name']?></h5>
							<p class="card-text"><?php echo $products['price']?> ₽</p>
							<p><button>Добавить в корзину</button></p>
						</div>
					</div>					
                <?php endwhile?>
				</div>
				<?php
}
?>
