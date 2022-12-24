<!DOCTYPE html>
<html>
    <body>
        
        <?php
require 'connect.php';
        $char = [];
        $char[] = [
            'name' => 'Emma',
            'image' => file_get_contents("https://64.media.tumblr.com/e748b681707c0d89c18ccc95c0a0503f/tumblr_ppx0m7VAwx1sx8ybdo1_400.png"),
            'description' => 'Living in Grace Field House, Emma is one of the smartest children there, along with Norman and Ray. After discovering the secret of the world they live in, and determined to do anything, go to any lengths to protect her family, she escapes.'
        ];
        $char[] = [
            'name' => 'Norman',
            'image' => file_get_contents("https://64.media.tumblr.com/570f123e0a36ac55e781d2ec15bf92a2/tumblr_ps1l68keLz1wy0iyg_500.png"),
            'description' => 'Being the smartest child at Grace Field House , Norman plans to escape along with his family, after discovering the truth. He assists in training the other children to escape by playing tag, a game that he is a master in playing.',
        ];
        $char[] = [
            'name' => 'Ray',
            'image' => file_get_contents("https://66.media.tumblr.com/e05f952c8bad7be80be5a34f801dbc2a/efaf56a99d393e29-09/s640x960/502f624dfbf63115c9761fdfd1403fa758bf7523.jpg"),
            'description' => 'Discovering the truth when he was six years old, Ray has been a double-agent, pretending to work for Mama, while actually helping his friends. Ray is one of the most smartest kids at Grace Field House, alongside Emma and Norman and escapes with the kids.'
        ];
        $char[] = [
            'name' => 'Yuugo',
            'image' => file_get_contents("https://vignette.wikia.nocookie.net/vsbattles/images/0/09/Yuugo71.png/revision/latest?cb=20180721234435"),
            'description' => 'Yugo is an escapee from the Glory Bell orphanage. Himself, along with his friends, escaped 13 years ago. Eventually, Yugo ended up at B06-32, one of the few shelters left by William Minerva.'
        ];
        $char[] = [
            'name' => 'Lucas',
            'image' => file_get_contents("https://i.pinimg.com/originals/30/95/b6/3095b62b621ca17249dc9e957404996e.jpg"),
            'description' => 'After escaping with his brother/best friend, Yuugo, Lucas ends up kidnapped and is forced to fight for his life.'
        ];
        $char[] = [
            'name' => 'Isabella',
            'image' => file_get_contents("https://i.pinimg.com/originals/8c/88/21/8c882119945fee39a39f65f922d50f2f.jpg"),
            'description' => 'At Grace Field House, Isabella is the youngest to be given the position of Mama. She takes care of all 38 children who live there.'
        ];
        $sql = "INSERT INTO characters(name, image, description) VALUES(:name, :image, :description)";
        foreach ($char as $character) {
            $stmt = $pdo->prepare($sql);
            $stmt->execute($character);
        }
        echo "Records have been inserted!";
        ?>
    </body>
</html>