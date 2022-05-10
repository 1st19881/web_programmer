<title>Product</title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container">
        <?php 
  error_reporting( error_reporting() & ~E_NOTICE );
  $act = (isset($_GET['act']) ? $_GET['act'] : '');
    if($act=="add"){
      echo '';
    }elseif($act=="edit"){
        echo '';
    }elseif($act=="delete"){
        echo '';  
    }else{?>
        <button type="button" class="btn btn-primary btn-flat my-3" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@mdo">เพิ่มสินค้า</button>
        <?php } 
   ?>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มสินค้า</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="product_db.php?act=add" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">ชื่อสินค้า: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="product_name" id=""
                                    placeholder="กรอชื่อสินค้า" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">ไฟล์ภาพ: <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="img_main"
                                            aria-describedby="inputGroupFileAddon01"
                                            accept="image/x-png,image/gif,image/jpeg" required>
                                        <label class="custom-file-label" for="inputGroupFile01">Choose Img_main</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="img"
                                            aria-describedby="inputGroupFileAddon01"
                                            accept="image/x-png,image/gif,image/jpeg" required>
                                        <label class=" custom-file-label" for="inputGroupFile01">Choose Img</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">ไฟล์ PDF: <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file_pdf"
                                            aria-describedby="inputGroupFileAddon01" accept=".pdf" required>
                                        <label class="custom-file-label" for="inputGroupFile01">Choose File_PDF</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-success btn-flat">บันทึก</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=='edit'){
            include('product_edit.php');
            }
            else{
            include('product_list.php');
            }
            ?>
</section>
<!-- /.content -->

<?php include('footer.php'); ?>