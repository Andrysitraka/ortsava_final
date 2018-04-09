
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>GESTIOND DE DESTINATION</h2>   
                        <h5>Pour gerer la destination </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             CIRCUIT
                        </div>
                        <div class="panel-body">
                         <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ;?>
      <?php if (isset($_SESSION['success'])) {?>
        <div  class="alert alert-success"> <?php echo $_SESSION['success'] ;?></div> 
      <?php }?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Circuit</th>
                                            <th>Localisation(s)</th>
                                            <th>Mettre à jourt</th>  
                                             <th>Suprimer</th>
                                                                         
                                        </tr>
                                    </thead>
                                    <tbody>


                                     <tr class="active">

                                     
                                        <?php foreach ($affich_all_circuit as $record) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $record->id;?></td>
                                            <td><?php echo $record->nom;?></td>
                                            <td><?php echo $record->localisation;?></td>
                                            <td class="center"><?php echo anchor("home/editCircuit1/{$record->id}", 'Modifier',['class'=>'fa fa-edit']); ?></td>
                                            <td><?php echo anchor("home/deleteCircuit/{$record->id}", 'Suprimer',['class'=>'fa fa-remove' ,'onclick'=>"ConfirmDelete()"] );?></td>
                                          
                                            <?php } ?>
              
                                 
                                          
                                        </tr>

                                           

                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->



                     <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ITINERAIRE PRINCIPALE
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nom itineraire</th>
                                            <th>contenu(s)</th>
                                           
                                            <th> Contact</th> 
                                            <th>Mettre à jourt</th>  
                                            <th>Suprimer</th>
                                                                         
                                        </tr>
                                    </thead>
                                    <tbody>


                                     <tr class="active">

                                     
                                        <?php foreach ($affich_all_sous_circuit as $record) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $record->id;?></td>
                                            <td><?php echo $record->nom;?></td>
                                            <td><?php echo  substr($record->contenu,0,100)?>......</td>
                                          
                                            
                                            <td><?php echo $record->email;?></td>
                                            <td class="center"><?php echo anchor("home/editesousCircuit1/{$record->id}", 'Modifier',['class'=>'fa fa-edit']); ?> </td>
                                            <td><?php echo anchor("home/deleteSousCircuit/{$record->id}", 'Suprimer',['class'=>'fa fa-remove']); ?></td>
                                          
                                            <?php } ?>
              
                                 
                                          
                                        </tr>

                                           

                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
               
                    <!--  end  Context Classes  -->
                
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>

         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
