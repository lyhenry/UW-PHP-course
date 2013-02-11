<?php

require('Bootstrap.php');

$db = new NS_Connection\Connection( array(
                'host'     => 'localhost',
                'username' => 'username',
                'password' => 'password',
                'dbname'   => 'ass2'
            ) );

// connect to database, expect to
try {
    $db->connect();
} catch(\RuntimeException $e) {
    die( 'fails to establish database connection, error:'. $e->getMessage() );
}

// Insert a row into the database
$insertSql = "INSERT INTO User (firstname, lastname) VALUES ('John', 'Smith')";
$rowId = $db->insert($insertSql);
printf("\nFirst row id inserted: %s\n", $rowId);

// Should have at least one row
$selectSql = sprintf("SELECT * FROM User WHERE id = %d", $rowId );
$newRow = $db->select($selectSql, $verbose=True);
assert(count($newRow) > 0);

// Insert another row into the database
$insertSql = "INSERT INTO User (firstname, lastname) VALUES ('Jane', 'Doe')";
$row2Id = $db->insert($insertSql);
printf("\nSecond row id inserted: %s\n", $row2Id);
$selectSql = sprintf("SELECT * FROM User WHERE id = %d", $row2Id );
$insertedRow = $db->select($selectSql, $verbose=True );

// Update the last row inserted
$updateSql = sprintf("UPDATE User set lastname = 'foo' where id = %d", $row2Id);
$db->update($updateSql);
$selectSql = sprintf("SELECT * FROM User WHERE id = %d", $row2Id );
printf("\nAfter update:\n");
$updatedRow = $db->select($selectSql, $verbose=True );

// Delete the first row added
printf("\nNumber of rows before delete: %d", $db->count_rows());
$deleteSql = sprintf("DELETE FROM User where id = %d", $rowId);
$db->delete($deleteSql);
printf("\nNumber of rows after delete: %d\n", $db->count_rows());

// Disconnect from the database
$db->disconnect();

?>
