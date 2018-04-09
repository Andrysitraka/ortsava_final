<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ;?>
                        <div class="col-md-8">
                     <?php foreach ($recuperation as $key => $value) { ?>
                      <?php echo form_open("home/updateSousCircuti/{$value->id}",['classs'=>'form-horizontal']);?>

                        
                           
                             
                       
                                        <div class="form-group">
                                            <label>Nom</label>
                                          
                                             <?php echo form_input(['name'=>'nom','class'=>'form-control', 'value'=>$value->nom ]);?>
                                            
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Contenu</label>
                                            
                                             <?php echo form_textarea(['name'=>'contenu','class'=>'form-control' , 'value'=>$value->contenu]);?>
                                        </div>

                                        <div class="form-group">
                                            <label>Contact phone</label>
                                            
                                             <?php echo form_input(['name'=>'phone','class'=>'form-control'  , 'value'=>$value->phone]);?>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Contact email</label>
                                           
                                             <?php echo form_input(['name'=>'email','class'=>'form-control' ,'value'=>$value->email]);?>
                                            
                                        </div>
                                        
                                        <button type="reset" class="btn btn-default">Reset </button>
                                        <button type="submit"  class="btn btn-primary">Enregistrer </button>
                            <?php  } ?>

                                 


                    <?php echo form_close();?>

                    </div>
                       
                    </div>


                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>