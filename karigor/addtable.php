<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>




<div class="container-fluid mt-5">

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between border-0 mb-3">
            <h3 class="card-title">Add Table row</h3>
        </div>
        <div class="card-body">

        <form action="code.php" method="POST" enctype="multipart/form-data">
                <div >
                    <div class="row mb-5 mt-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Product Name <span class="star">*</span></h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="product_name" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-4">
                            <h5 style="margin-bottom: 13px !important;">Type <span class="star">*</span> </h5>
                            <h5 style="margin-bottom: 13px !important;">Catgories <span class="star">*</span> </h5>
                            <h5>Link <span class="star">*</span> </h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="type" class="form-control">
                            <select name="catagorie"  class="form-control mb-2">
                                <option selected>Select catagories</option>
                                <option>Treadmill</option>
                                <option>Elliptical</option>
                                <option>Home gym</option>
                            </select>
                            <input type="text" name="link" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Features <span class="star">*</span></h5>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control summernote" name="feature" rows="3"></textarea>
            
                        </div>
                    </div>
                </div>

                <hr>
                <div id="image" style="background-color: #4167D5" class="p-5 rounded-lg">
                    <div class="row shadow-lg p-4">
                        <div class="col-md-4">
                        <h5 class="text-light">Product image <span class="star">*</span></h5>
                        <h5 class="text-light">Brand image <span class="star">*</span></h5>
                        <h5 class="text-light">price image <span class="star">*</span></h5>
                            
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 image-row mx-auto">
                                    <input type="file" name="product_img" class="form-control">
                                    <input type="file" name="brand_img" class="form-control">
                                    <input type="file" name="price_img" class="form-control">

                                </div>
                                

                            </div>


                        </div>

                    </div>


                </div>
                <button type="submit" name="add_table_btn" class="btn btn-primary btn-lg float-right mt-3 shadow">Add
                    table row</button>
                <a href="table.php" class="btn btn-danger btn-lg mt-3 shadow float-right mr-2">Cancel</a>
            </form>

            

        </div>
    </div>



</div>

















<?php include ("includes/plugin.php")?>
