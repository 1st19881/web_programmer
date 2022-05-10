<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('../connection/connect.php');  
$query = "SELECT * FROM product";
$result = mysqli_query($conn, $query)or die ("Error in query: $query
query " . mysqli_error());
$i=1;
?>
<table class="table table-striped  table-responsive " id="example1" align="center">
    <thead class="thead-dark">
        <tr class="info">
            <th scope="col">#</th>
            <th width="15%" class="text-nowrap" scope="col">สินค้า</th>
            <th width="15%" class="text-nowrap" scope="col">ภาพหลัก</th>
            <th width="15%" class="text-nowrap" scope="col">ภาพย่อย</th>
            <th width="15%" scope="col">PDF</th>
            <th width="20%" class="text-nowrap" scope="col">เพิ่มเมื่อ</th>
            <th width="15%" scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['product_name']; ?></td>
        <td><img src="image-main/<?php echo $row_p['img_main']; ?>" width="100%" alt=""></td>
        <td><img src="image/<?php echo $row_p['img']; ?>" width="100%" alt=""></td>
        <td><a href="pdf/<?php echo $row_p['file_pdf']; ?>" target="_blank"><?php echo $row_p['file_pdf']; ?></a></td>
        <td><?php echo $row_p['date']; ?></td>
        <td>
            <div class="d-flex">
                <a href="index.php?act=edit&id=<?php echo $row_p['id']; ?>" class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="product_db.php?act=delete&id=<?php echo $row_p['id']; ?>" class="btn btn-danger btn-flat"
                    onclick="return confirm('ต้องการลบสินค้า ID : <?php echo $row_p['id']; ?>')">ลบ</a>
            </div>
        </td>
    </tr>
    <?php }  ?>
</table>