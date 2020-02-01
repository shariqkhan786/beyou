
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
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
                            Edit Form  
                          
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                 <?= form_open_multipart('Forms/Edit',array('id'=>'Update_form'));?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="hidden" name="id" value="<?= $ViewDetailsToEdit1[0]->id?>">
                                            <input type="hidden" name="picture" value="<?= $ViewDetailsToEdit1[0]->picture?>">
                                            <input type="hidden" name="picture1" value="<?= $ViewDetailsToEdit1[0]->picture1?>">
                                            <input  name="name" value="<?= $ViewDetailsToEdit1[0]->name?>"  type="text" class="form-control" />
                                          
                                        </div>
                                  </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Contact</label>
                                            <input name="contact" value="<?= $ViewDetailsToEdit1[0]->contact?>" type="text" class="form-control" />
                                          
                                        </div>
                                  </div>
                                     <div class="col-md-12">
                                    <div class="form-group">
                                            <label>address</label>
                                            <input name="address" value="<?= $ViewDetailsToEdit1[0]->address?>" type="text" class="form-control" />
                                          
                                        </div>
                                  </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Image1</label>
                                             <?php if(!empty($ViewDetailsToEdit1[0]->picture)){ ?>
                                           <img style="width: 50px; height: 50px;" src="<?=base_url()?>uploads/pictures/<?= $ViewDetailsToEdit1[0]->picture?>">
                                           <?php } ?>

                                            <input name="picture" value="<?= $ViewDetailsToEdit1[0]->picture?>" type="file" class="form-control" />
                                          
                                        </div>
                                        
                                  </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Image2</label>
                                            <?php if(!empty($ViewDetailsToEdit1[0]->picture1)){ ?>
                                            <img style="width: 50px; height: 50px;" src="<?=base_url()?>uploads/pictures/<?= $ViewDetailsToEdit1[0]->picture1?>">
                                          <?php } ?>
                                            
                                            <input name="picture1" type="file" class="form-control" />
                                          
                                        </div>
                                        
                                  </div>
                                    <input type="submit" value="Submit" name="add" class="btn btn-primary" />
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
   