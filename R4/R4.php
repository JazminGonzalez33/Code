<?php
include("cn.php");
$tabla = "SELECT * FROM tabla";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R2</title>

    <link href="style.css" rel="stylesheet">
</head>

<body>
    <table class="default">

        <thead>
            <tbody style="background: #fff ;">
                <tr>
                    <th scope="col">Lorem ipsum.</th>
                    <th>Lorem ipsum.</th>
                    <th>Lorem ipsum.</th>
                    <th>Lorem ipsum.</th>
                    <th>Lorem ipsum.</th>
                    <th>Lorem ipsum.</th>

                </tr>
            </tbody>
        </thead>

        <?php $resultado = mysqli_query($conexion, $tabla);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        <tbody style="background: #CBCFCF ;">
            <tr>
            <th>Lorem ipsum.</th>
                <th> <?php echo $row["Lorem ipsum 2"];?></th>
                <th> <?php echo $row["Lorem ipsum 3"];?></th>
                <th> <?php echo $row["Lorem ipsum 4"];?></th>
                <th> <?php echo $row["Lorem ipsum 5"];?></th>
                <th> <?php echo $row["Lorem ipsum 6"];?></th>
            </tr>
        </tbody>

        <tbody style="background: #fff ;">
            <tr>
            <th>Lorem ipsum.</th>
            <th> <?php echo $row["Lorem ipsum 1"];?></th>
            <th> <?php echo $row["Lorem ipsum 6"];?></th>
            <th> <?php echo $row["Lorem ipsum 4"];?></th>
            <th> <?php echo $row["Lorem ipsum 5"];?></th>
            <th> <?php echo $row["Lorem ipsum 3"];?></th>
            </tr>
        </tbody>
        <?php } mysqli_free_result($resultado); ?>

</body>

</html>