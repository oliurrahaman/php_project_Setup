<?php include "header.php" ?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="" src="<?php echo $product['image'] ;?>" alt="">
                    <div class="card-body">
                        <h3><?php echo  $product['name'];?></h3>
                        <h4><?php echo  $product['price'];?></h4>
                        <p><?php echo  $product['description'];?></p>
                    </div>
                </div>

            </div>
            <?php  } ?>
        </div>

    </div>

</section>
<?php include "footer.php"?>
