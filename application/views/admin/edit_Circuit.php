
        <div id="page-wrapper" >
            <div id="page-inner">
                 <div class="container">
                  <div class="row">
      <div class="col-md-4 col-ms-6">
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ;?>
      <?php if (isset($_SESSION['success'])) {?>
        <div  class="alert alert-success"> <?php echo $_SESSION['success'] ;?></div> 
      <?php }?>
      
  <?php foreach ($recuperation as $key => $value) { ?>

      <?php echo form_open("home/updateCircuti/{$value->id}",['classs'=>'form-horizontal']);?>
      <fieldset>
       
        <div class="form-group">
          <label>nom</label>

          
            <?php echo form_input(['name'=>'nom','class'=>'form-control','value'=>$value->nom]);?>
       
        </div>
        
        <div class="form-group">
          <label >localisation</label>
       
           <?php echo form_input(['name'=>'localisation','class'=>'form-control', 'value'=>$value->localisation]);?>
            
       
        </div>
     
        <div class="form-group">
       
            <?php echo form_submit(['value'=>'Reset' ,'class'=>'btn btn-default']);?>
           
            <?php echo form_submit(['value'=>'Enregistrer' ,'class'=>'btn btn-primary']);?>
            
     
        </div>
      </fieldset>
    <?php echo form_close();?>

  <?php  } ?>


      </div>
      
    </div>
                                        



                 </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>
