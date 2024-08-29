<?php include "header_inc.php" ?>

        <?php

        // REQUEST ALL ERRORS TO BE REPORTED
        ini_set("display_erros", 1);
        ini_set("display_startup_errors", 1);
        error_reporting(E_ALL);

            // $json = file_get_contents("data/data.json");
            // $exhibits = json_decode($json, true);

            include "classes.php";

            $db = new DB();
            try {
                $exhibits = $db->execute("SELECT * FROM Exhibits");
                $index =$_GET['index'];
                $object = [];
                if( $index < count($exhibits)) {
                   array_push($exhibits[$index], $object);
                }
            } catch(Exception $e) {
                echo "<h4>ERROR</h4>";
            }



        ?>

            <article>
            <h2>
                <?php
                    echo $object['title'] ?? null;
                ?>
            </h2>
            <p>
                <?php
                echo $object['description'] ?? null;
                ?>
            </p>
            <img
                src=
                <?php
                    echo 'gallery/' . $object['image'] ?? "";
                ?>
                    fetchpriority="high" decoding="sync">
            </article>

<?php include "footer_inc.php" ?>

