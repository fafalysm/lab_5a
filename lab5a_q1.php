<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            text-align: left;
        }
        td {
            padding: 8px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <?php
        $name= "Che Nor Fatihah binti Sairee Jasmi";
        $matNum= "AI220186";
        $course= "BIP";
        $yearStudy="3";
        $address="Kolej Kediaman Tun Fatimah, UTHM";
    ?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name";?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matNum; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>