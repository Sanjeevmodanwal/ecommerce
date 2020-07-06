<section class="main-content container">
    <div class="row">
        <div class="col-md-4">
            <div class="text-left margin-b-2"><strong><?php echo $this->session->flashdata('item'); ?> </strong></div>
            <div class="card">
                <div class="card-heading card-default">Add Sub Category</div>
                <div class="card-block">
                    <form role="form" method="post" action="<?php echo base_url('dashboard/add_subcategory'); ?>" enctype="multipart/form-data">

                        <select name="category_id" class="form-control" id="shool_name">
                            <option value="">Select Category</option>
                            <?php foreach ($category as $cat) { ?>
                                <option value="<?php echo $cat['id']; ?>"><?php echo $cat['category_name']; ?></option>
                            <?php } ?>
                        </select>


                        <div class="form-group ">
                            <label>Name</label>
                            <input type="text" placeholder="Name" name="sub_categoryname" class="form-control" id="name">
                        </div>


                        <div class="form-group ">
                            <label>Upload image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary AddLocation">Add Sub Category</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-md-8">
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
                                <th>Sub category name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="ListLocation">

                            <?php
                            $count = 1;

                            foreach ($subcategories as $cat) {
                                ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td class="lname<?php echo $cat['id']; ?>"><?php echo $cat['category_id']; ?></td>
                                    <td class="ladd<?php echo $cat['id']; ?>"><?php echo $cat['subcategory_name']; ?></td>
                                    <td class="ladd<?php echo $cat['id']; ?>"><img src="<?php echo base_url('images') . "/" . $cat['image']; ?>" height="150" width="150"></td>
                                    <td><button class="btn btn-primary edit-btn" data-id="<?php echo $cat['id']; ?>">Edit</button></td>
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

