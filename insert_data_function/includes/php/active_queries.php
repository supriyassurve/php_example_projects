<?php

$conn_string = "host=hostname port=5432 dbname=demodb user=username password=user_password";
$conn = pg_connect($conn_string);

function select($table) {
  $query = "SELECT * FROM $table;";
  $result = pg_query($query);
  $ret = array();
  while ($row = pg_fetch_assoc($result)) {
    $ret[] = $row;
  }
  return $ret;
}

/**
 * For Inserting a single record
 * @param array $record <p>Array of single record</p>
 * @param string $model <p>Table name in which you want to make changes</p>
 */
function insert_record($record, $model) {
  $fields = count($record);
  if ($fields > 0) {
    $i = 0;
    $k = 0;
    $insert = "INSERT INTO " . $model . " (";

    foreach ($record as $key => $value) {
      $k++;
      $insert .= $key;
      if ($fields > $k) {
        $insert .= ", ";
      }
    }

    $insert .= ") VALUES (";
    foreach ($record as $key => $value) {
      $i++;
      if (gettype($value) == 'string') {
        $insert .= " '" . pg_escape_string($value) . "'";
      } else {
        $insert .= $value;
      }

      if ($fields > $i) {
        $insert .= ", ";
      }
    }

    $insert .= ")";
    $result = pg_query($insert);
    return pg_affected_rows($result);
  }
}

/**
 * For Inserting multiple records
 * @param array $records <p>Array of records</p>
 * @param string $model <p>Table name in which you want to make changes</p>
 */
function insert_multiple_records($records, $model) {
  foreach ($records as $record) {
    insert_record($record, $model);
  }
}

?>
