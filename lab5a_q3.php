<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
        function calculateArea($width, $length) {
            $area = $width * $length;
            return $area;
        }

        $w = 4;
        $l = 2;
        $result = calculateArea($w, $l);
    ?>

    <p>
        <b>The area of a rectangle with a width of <?php echo $w; ?> and <?php echo $l; ?> is <?php echo $result; ?></b>
    </p>
</body>
</html>