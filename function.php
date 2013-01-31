<?php
function insert_data($db, $date, $contents, $norms, $amount, $area, $unit_price, $price) {
    $query = "INSERT INTO contents VALUES ( NULL, \"$date\", \"$contents\", \"$norms\", \"$amount\", \"$area\", \"$unit_price\", \"$price\" )";
    return $db->query($query);
}

function delete_data($db, $id) {
    $query = "DELETE FROM contents WHERE id = $id";
    return $db->query($query);
}
?>