  
<?php

$data = ($_SERVER['request_method'] == 'POST') $_POST : $_GET;

$lateNightSelect = isset($data['lateNight']);
$roadTripSelect = isset($data['roadTrip']);
$babySitSelect = isset($data['babySit']);

$lateNightValues = ['hour', 'minutes', 'adj', 'rooms', 'object'];
$roadTripValues = ['place', 'hour1', 'minutes1', 'adjective', 'sound'];
$babySitValues = ['age', 'room', 'timing', 'snd'];

$lateNightData = [];
$roadTripData = [];
$babySitData = [];

//for all the stuff gathered in data view it as a key,value pair
foreach ($data as $key => $value) {
    if(in_array($key, $lateNightValues)) {
        $lateNightData[$key] = $value;
    }
    elseif(in_array($key, $roadTripValues)) {
        $roadTripData[$key] = $value;
    }
    elseif(in_array($key, $babySitValues)) {
        $babySitData[$key] = $value;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadLibs</title>
    <!-- TODO: We're going to need some styling... -->
</head>

<body>
    <div>
        <?php if($lateNightSelect): ?>
            <div>
            <h2>A Late Night Drive</h2>
            <table>
            <tr>
            <th>Word Type</th>
            <th>Word</th>
            </tr>
            <?php foreach($lateNightData as $key => $value){
                echo "<tr><td> $key </td>";
                echo "<td> $value </td></tr>";
            } ?>
            </div>
        <?php endif; ?> 
    
        <?php if($roadTripSelect): ?>
            <div>
            <h2>The Road Trip</h2>
            <table>
            <tr>
            <th>Word Type</th>
            <th>Word</th>
            </tr>
            <?php foreach($lateNightData as $key => $value){
                echo "<tr><td> $key </td>";
                echo "<td> $value </td></tr>";
            } ?>
            </div>
        <?php endif; ?>  

        <?php if($babySitSelect): ?>
            <div>
            <h2>The Babysitting Job</h2>
            <table>
            <tr>
            <th>Word Type</th>
            <th>Word</th>
            </tr>
            <?php foreach($lateNightData as $key => $value){
                echo "<tr><td> $key </td>";
                echo "<td> $value </td></tr>";
            } ?>
            </div>
        <?php endif; ?>

    </div>

    <h3>Complete GET Array:</h3>
    <pre><?php print_r($_GET); ?></pre>

    <h3>Complete POST Array:</h3>
    <pre><?php print_r($_POST); ?></pre>


</body>

</html>
