<?php

include_once __DIR__ . '/../../models/product.php'

?>

<main>
    <div class="container">
        <div class="row my-5">
            <?php foreach ($products as $key => $product) {?>  
                <div class="card col-3 p-2 my-1">
                    <img id="product" src="<?php echo $product->poster?>" alt="...">
                    <div class="card-body text-center">
                        <h2><?php echo $product->name ?></h2>
                        <h6> <strong>Category:</strong> <?php echo $product->category ?></h6>
                        <h6> <strong>Animal:</strong> <?php echo $product->animal ?></h6>
                        <h6> <strong>Class:</strong> <?php echo $product->isDomestic() ?></h6>
                        <h6> <strong>Price:</strong> <?php echo $product->price ?>$</h6>
                        <?php if ($product->animal == 'Cane'): ?>
                        <i class="fa-solid fa-dog"></i>
                        <?php else: ?>
                        <i class="fa-solid fa-cat"></i>
                        <?php endif; ?>
                        <?php try {
                            if ($product->availability == 0) {
                                throw new Exception('NON DISPONIBILE');
                            }
                        } catch (Exception $e) {
                            echo '<p class="text-danger"><strong>' . $e->getMessage() . '</strong></p>';
                        }?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</main>