
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                             </br>
                             <a class="btn btn-primary" href="<?php echo site_url();?>/Home/ajoutimage/">Ajouter nouvelle image</a>

                        </div>    
                    </div>
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>image</th>
                                            <th>id_Scircuit</th>
                                            <th>Chanager</th>
                                            <th>suprimer</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($affiche as $key => $value) { ?>
                                
                                           <tr class="gradeU">
                                            <td><?php echo $value->id;?></td>
                                            <td>
                                            <div class="thumbnail" style="width: 100px; height: 75px;">
                                               <img src="<?php echo base_url();?><?php echo $value->nom;?>" alt="<?php echo $value->alt;?>"> 
                                            </div> 
                                            </td>
                                            <td><?php echo $value->id_Scircuit;?></td>
                                            <td class="center"><?php echo anchor("home/editesousCircuit1/{$value->id}", 'Modifier',['class'=>'fa fa-edit']); ?> </td>
                                            <td><?php echo anchor("home/deletegallery/{$value->id}", 'Suprimer',['class'=>'fa fa-remove']); ?></td>
                                          
                                        </tr>
                                         <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                   
            </div>
         
        </div>
        </div>
        </div>
     
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
