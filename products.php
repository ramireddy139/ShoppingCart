<h1>Products</h1>
        <table>
            <tr>
                <th>NAme</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php
            require('databaselink.php');
            
 $sql = "SELECT * FROM  `product` WHERE 1";

$query = mysql_query($sql);
while($row = mysql_fetch_assoc($query))
{
    ?>
 <tr>
     <td><?php echo $row['description']; ?></td>
     <td><?php echo $row['price']; ?></td>
     <td><a href="index.php?page=products&action=add&id=<?php echo $row['id']; ?>">Add to cart</a></td>
 </tr>   
<?php
}
?>

                
            
        </table>
    <!-- 
< ?php 
                $sql = "SELECT * FROM  `product` WHERE 1";
                $query = mysql_query($sql) or die(mysql_error());
                while($row = mysql_fetch_assoc($query)){
            ?>
            <tr>
           
            <td>< ?php echo $row['description']; ?></td>
            <td>&< ?php echo $row['price']; ?></td>
            <td><a href="index.php?page=products&action=add&id=< ?php echo['id']; ?>">Add to Cart</a></td>
            </tr>
            < ?php 
                }
            ?>
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
    
-->