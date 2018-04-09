
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">

                      <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                 <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ;?>
                      <?php if (isset($_SESSION['success'])) {?>
                          <div  class="alert alert-success"> <?php echo $_SESSION['success'] ;?></div> 
                        <?php }?>
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>image</th>
                                            <th>suprimer</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($affiche as $key => $value) { ?>
                                
                                           <tr class="gradeU">
                                            <td><?php echo $value->id;?></td>
                                            <td>
                                            <div class="thumbnail" style="width: 250px; height:auto;">
                                               <img src="<?php echo base_url();?><?php echo $value->nom;?>"> 
                                            </div> 
                                            </td>
                                            <td><?php echo anchor("home/deleteslide/{$value->id}", 'Suprimer',['class'=>'fa fa-remove']); ?></td>
                                          
                                        </tr>
                                         <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    
                 </div>
             <!-- /. PAGE INNER  -->
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
