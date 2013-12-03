<?php
/* Template Name: PODS TO JSON*/
//header('Content-type: application/json');

global $pods;
print_r($pods);
$pod_id = $pods->pod_id;
print("datatype_id ".$pod_id." ");
$result = pod_query("SELECT * FROM wp_pod_fields where datatype = " . $pod_id);
$v = 1;
$callback = $_GET["method"];
$base_json = $callback . "({";
$json_data .= $base_json;
while ($row = mysql_fetch_assoc($result)) {
	if ($base_json != $json_data) $json_data .= ",";
	$row_name = $row["name"];
	$json_data .= "\"" . $row_name . "\":\"" . str_replace("\"","'",$pods->data[$row_name]) . "\"";
}
$json_data .= "})";
echo $json_data;
?>