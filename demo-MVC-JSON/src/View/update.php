<form method="post">
    <input type="text" name="id" value="<?php echo $product->getId() ?>" placeholder="type id">
    <input type="text" name="name" value="<?php echo $product->getName() ?>" placeholder="type name">
    <input type="text" name="price" value="<?php echo $product->getPrice() ?>" placeholder="type price">
    <input type="text" name="desc" value="<?php echo $product->getDesc() ?>" placeholder="type desc">
    <input type="submit" value="Update">
</form>

