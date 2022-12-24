<!DOCTYPE html>
<html>
    <body>
        
        <?php
require 'connect.php';
        $product = [];
        $product[] = [
            'price' => 34.99,
            'image' => file_get_contents("https://i.ebayimg.com/images/g/wfQAAOSwjkFfohV5/s-l400.jpg"),
            'name' => 'The Promised Neverland Manga Series Volumes 1-4'
        ];
        $product[] = [
            'price' => 13.00,
            'image' => file_get_contents("https://static.wikia.nocookie.net/yakusokunoneverland/images/6/65/Volume_3_Illustration.png/revision/latest/scale-to-width-down/250?cb=20181004221458"),
            'name' => 'The Promised Neverland Manga Series Volume 3',
        ];
        $product[] = [
            'price' => 24.00,
            'image' => file_get_contents("https://i.postimg.cc/7Y75ZqVD/2020-0260.jpg"),
            'name' => 'The Promised Neverland Manga Series Volumes 1-3'
        ];

		$sql = "INSERT INTO products(price, image, name) VALUES(:price, :image, :name)";
        foreach ($product as $products) {
            $stmt = $pdo->prepare($sql);
            $stmt->execute($products);
        }
        echo "Records have been inserted!";
        ?>
    </body>
</html>