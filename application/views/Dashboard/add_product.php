<section class="main-content container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-left margin-b-2"><strong><?php echo $this->session->flashdata('item'); ?> </strong></div>
            <div class="card">
                <div class="card-heading card-default">Add Sub Category</div>
                <div class="card-block">
                    <form role="form" method="post" action="<?php echo base_url('dashboard/add_product'); ?>" enctype="multipart/form-data">

                        <div class="row">

                            <div class="col-md-4">
                                <select name="category_id" class="form-control" id="shool_name">
                                    <option value="">Select Category</option>
                                    <?php foreach ($category as $cat) { ?>
                                        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['category_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select name="subcategory_id" class="form-control" id="shool_name">
                                    <option value="">Select Sub Category</option>
                                    <?php foreach ($subcategories as $sub) { ?>
                                        <option value="<?php echo $sub['id']; ?>"><?php echo $sub['subcategory_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <input type="text" placeholder="Enter Product name" name="product_name" class="form-control" id="name">
                                </div>

                            </div>
                        </div>


                        <div class="row">
                           
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <input type="text" placeholder="Enter Title" name="title" class="form-control" id="name">
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group ">
                                    <input type="number" placeholder="Enter Product price" name="price" class="form-control" id="name">
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>








                        <button type="submit" class="btn btn-sm btn-primary AddLocation">Add Product</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-md-12">
            <div class="card">
                <div class="card-heading card-default">
                    Category
                </div>
                <div class="card-block">
                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Name</th>
                                 <th>Title</th>
                                 <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                         <tbody id="ListLocation">
                            <?php
                            $count = 1;
                            foreach ($products as $p) {
                                ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $p['category_name']; ?></td>
                                    <td><?php echo $p['product_name']; ?></td>
                                    <td><?php echo $p['title']; ?></td>
                                     <td><?php echo $p['price']; ?></td>
                                    <td><img src="<?php echo base_url('images')."/".$p['image']; ?>" height="150" width="150"></td>
                                    <td><button class="btn btn-primary edit-btn" data-id="<?php echo $p['id']; ?>">Edit</button></td>
                                </tr>
<?php } ?>

                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="locationModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                <h5 class="modal-title" id="exampleModalLabel">Edit Location</h5>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="text" class="form-control location-name" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control add-name" value="">
                    </div>
                    <div class="clearfix">
                        <button type="button" class="btn  btn-primary pull-right save-change">Save Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

