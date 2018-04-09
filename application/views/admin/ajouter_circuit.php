
        <div id="page-wrapper" >
            <div id="page-inner">
                 
                  <div class="row">
                      <div class="col-md-6 col-ms-6">
                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ;?>
                        <?php if (isset($_SESSION['success'])) {?>
                          <div  class="alert alert-success"> <?php echo $_SESSION['success'] ;?></div> 
                        <?php }?>
                        <form action="" method="POST">
                            <div class="form-group">
                              <label for="nom">Nom:</label>
                              <input class="form-control" type="text" name="nom" id="nom">
                            </div>
                            <div class="form-group">
                              <label for="localisation">localisation:</label>
                              <input class="form-control" type="text"  name="localisation" id="localisation">
                            </div>
                            <div class="text-center">
                              <button class="btn btn-primary" name="save" >Enregistrer</button>
                            </div>
                        </form>     
                      </div>


                       <div class="col-md-6" style="top: 15px">
                            <div class="col-md-2"></div>
                             <div class="col-md-8">
                             <div class="panel panel-primary">
                                          <div class="panel-heading">
                                              Circuit Existant
                                          </div>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Id circuit</th>
                                  <th>Distric</th> 
                                </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                  $query="SELECT id, nom FROM circuit "; 
                                  $query=$this->db->query($query);
                                  $result=$query->result();
                                  foreach ($result as $row) {?>
                                    <tr>               
                                  
                                  <td><?php echo $row->id;?> </td>
                                  <td><?php echo $row->nom;?></td>
                                  </tr>
                                <?php } ?>   
                              </tbody>     
                            </table>
                            </div>
                            </div>
                             <div class="col-md-2"></div>      
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
