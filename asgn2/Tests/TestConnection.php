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
try {
    $rowId = $db->insert($insertSql);
    printf("\nFirst row id inserted: %s\n", $rowId);
} catch (Exception $e) {
    die($e->getMessage());
}

// Should have at least one row
$selectSql = sprintf("SELECT * FROM User WHERE id = %d", $rowId );
try {
    $newRow = $db->select($selectSql, $verbose=True);
    assert(count($newRow) > 0);
} catch (Exception $e) {
    die($e->getMessage());
}

// Insert another row into the database
$insertSql = "INSERT INTO User (firstname, lastname) VALUES ('Jane', 'Doe')";
try {
    $row2Id = $db->insert($insertSql);
    printf("\nSecond row id inserted: %s\n", $row2Id);
    $selectSql = sprintf("SELECT * FROM User WHERE id = %d", $row2Id );
    $insertedRow = $db->select($selectSql, $verbose=True );
} catch (Exception $e) {
    die($e->getMessage());
}

// Update the last row inserted
try {
    $updateSql = sprintf("UPDATE User set lastname = 'foo' where id = %d", $row2Id);
    $db->update($updateSql);
    $selectSql = sprintf("SELECT * FROM User WHERE id = %d", $row2Id );
    printf("\nAfter update:\n");
    $updatedRow = $db->select($selectSql, $verbose=True );
} catch (Exception $e) {
    die($e->getMessage());
}

// Delete the first row added
printf("\nNumber of rows before delete: %d\n", $db->count_rows());
$deleteSql = sprintf("DELETE FROM User where id = %d", $rowId);
try {
    $db->delete($deleteSql);
    printf("\nNumber of rows after delete: %d\n", $db->count_rows());
} catch (Exception $e) {
    printf($e);
}

// Disconnect from the database
$db->disconnect();

?>
