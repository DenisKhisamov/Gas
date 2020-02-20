<?php

$results=\DB::queryFetchRows("call objects_get_list(%d);");

$data = array();
foreach ($results as $result)
{
    $data['type'] = 'Feature';
    $data['id'] = $result['id'];
    $data['geometry'] = '"type":"point", "coordinates":['.$result['lat'].', '.$result['lon'].' ]';
}

//$json_data = array ( 'type'=>"FeatureCollection", $data);
echo json_encode($data);
/*$CONNECT = mysqli_connect("localhost", "gas_engine", "ojFBvnr7ckJpisGD!!", "gas_engine");
$Query = mysqli_query($CONNECT, 'SELECT * FROM `objects`');
while ($Row = mysqli_fetch_assoc($Query))
{
    $data = array();
    $data["lon"]=$Row['lat'];
    $data["lat"]=$Row['lng'];
    $data["name"]=$Row['name'];
    $data["id"]=$Row['id'];
    $data["address"]=$Row['address'];
    $rows[]=$data;
}
echo json_encode($rows);*/