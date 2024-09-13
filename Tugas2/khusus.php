<?php 	
include('koneksi.php');

// Using Study_programs and leveraging polymorphism to display specific data
$db = new Study_programs();
$data_spesifik = $db->TampilkanDataSpesifik();  // Fetch specific study program data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        /* Content styling */
        .content {
            text-align: center;
            padding: 50px;
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin: 30px 10%;
            border-radius: 15px;
        }

        h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #04AA6D;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Button styling */
        .button {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: white;
            background-color: #04AA6D;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            display: inline-block;
        }

        .button:hover {
            background-color: #038857;
        }
    </style>
</head>
<body>

    <div class="content">
        <h1>Data</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <?php 
            foreach($data_spesifik as $row){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <?php 
            }
            ?>
        </table>

        <a href="index.php" class="button">Back to Home</a>
    </div>

</body>
</html>
