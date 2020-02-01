
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?= $title?></h2>   
                        <!-- <h5>Welcome Jhon Deo , Love to see you back. </h5> -->
                        <p><?= $this->session->flashdata('message'); ?></p>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Form 
                          
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!-- <?= validation_errors(); ?> -->
                                 <?= form_open_multipart('Forms/add',array('id'=>'Add_form','method'=>'post',));?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input value="<?= set_value('name')?>" id="name"  name="name" type="text" class="form-control" />
                                          <?php echo form_error('name',"<div class='error' style='color:red'>","</div>");?>
                                        </div>
                                  </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Contact</label>
                                            <input name="contact" type="text" class="form-control" />
                                          <?php echo form_error('contact',"<div style='color:red'>","</div>");?>
                                        </div>
                                  </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                            <label>address</label>
                                            <input name="address" type="text" class="form-control" />
                                           <?php echo form_error('address',"<div style='color:red'>","</div>");?>
                                        </div>
                                  </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Image1</label>
                                            <input name="picture" type="file" class="form-control" />
                                          
                                        </div>
                                        
                                  </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Image2</label>
                                            <input name="picture1" type="file" class="form-control" />
                                          
                                        </div>
                                        
                                  </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                          <input type="submit" value="Submit" name="add" class="btn btn-primary" />
                                        </div>
                                        
                                  </div>
                                    
               <?= form_close();?>               
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
          
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   