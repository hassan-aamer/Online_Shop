<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات </title>
    <style>
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 20px;
            box-shadow: 1px 1px 15px silver;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: 87%;
        }
    </style>
</head>
<body>
    <center>
        <h3>لوحة تحكم الادمن</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM products");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
            <main>
                <div class='card' style='width: 15rem;'>
                    <img src='$row[image]' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row[name]</h5>
                        <p class='card-text'>$row[price]</p>
                        <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف منتج</a>
                        <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
                    </div>
                </div>
            </main>
        </center>
        ";
    }
    ?>

    
</body>
</html>