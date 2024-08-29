<?php include "header_inc.php" ?>

    <ul id="master">
        <?php

            // $json = file_get_contents("data/data.json");
            // $exhibits = json_decode($json, true);

            include "classes.php";

            $db = new DB();
            $exhibits = $db->execute("SELECT * FROM Exhibits");

            foreach ($exhibits as $key => $object):
        ?>
            <li>
                <a href="details.php?index=<?php echo $key ?>">
                    <?php echo $object['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

<?php include "header_inc.php" ?>
