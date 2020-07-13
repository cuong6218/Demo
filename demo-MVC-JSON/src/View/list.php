<a href="index.php?page=add">Add Product</a>
<a href="index.php?page=reset">Reset Data</a>


<table>
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
    </tr>
    <?php if (empty($listProduct)): ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($listProduct as $key => $product): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $product->getId() ?></td>
                <td><?php echo $product->getName() ?></td>
                <td><?php echo $product->getPrice() ?></td>
                <td><?php echo $product->getDesc() ?></td>
                <td><a href="index.php?page=update&id=<?php echo $product->getId() ?>">Update</a></td>
                <td><a onclick="return confirm('Are you sure?')"
                       href="index.php?page=delete&id=<?php echo $product->getId() ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

