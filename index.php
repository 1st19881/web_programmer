<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>หน้าแรก</title>
</head>
<style>
.card:hover {
    box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
}
</style>

<body>
    <div class="container">
        <?php 
    include('header.php'); 
    include('slider.php'); 
    ?>
        <?php
        include('connection/connect.php');  
        $query = "SELECT * FROM product ORDER BY id DESC" or die("Error:" . mysqli_error());
        $result = mysqli_query($conn, $query);
        ?>
        <div class="container">
            <section class="my-4">
                <div class="row ">
                    <?php foreach($result as $row){  ?>
                    <div class="col-md-4 col-lg-4 mb-2 col-sm-12">
                        <div class="card h-100">
                            <img class="card-img-top " src="admin/image-main/<?php echo $row['img_main']  ?>"
                                alt="Card image cap">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                    <?php }  ?>
                </div>
            </section>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>