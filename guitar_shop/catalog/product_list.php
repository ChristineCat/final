<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<div id="content">
    <h1><?php echo $current_category['categoryName']; ?></h1>
    <?php if (count($products) == 0) : ?>
        <p>There are no products in this category.</p>
    <?php else: ?>
        <?php foreach ($products as $product) : ?>
        <p>
            <a href="?action=view_product&amp;product_id=<?php
                      echo $product['productID']; ?>">
                <?php echo $product['productName']; ?>    
                
                
                

                <?php 	$image_filename = $product_code . '_s.png'; ?>                	
                <?php 	$image_path = '../images/' . $image_filename; ?>
   				<?php  	$image_alt = ''?>
   				<img src="<?php $image_filename; ?>">
                <?php echo $image_filename['productName']; ?>    
                
                         
			</a>
        </p>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<?php include '../view/footer.php'; ?>