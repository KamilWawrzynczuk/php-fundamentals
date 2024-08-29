<?php

// Databases in PHP - 1: custom providers, 2: PDO
//SQlite is enalbe by default

class DB {

    function execute($query) {
        // this is custom provider
        $db = new SQLite3('./data/data.db');
        $result = $db->query( $query );

        if ( $result ) {
            $all = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                array_push($all, $row);
            }
            return $all;
        } else {

        }
    }
}
