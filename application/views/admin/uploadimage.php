
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <?php echo form_open_multipart('Home/image_upload/' , array('id' => 'img'));?>
                          <h3 style="color:#C90000;text-decoration: underline;font-family: Times">Pour Ajouter image pour les Itineraires</h3>
                          <br>
                          <br>
                          <div class="form-group">
                          <label>Choisissez un fichier à telecharger</label>
                            <input type="file" name="nom" tabindex="2" required class="form-control">
                        </div>
                        <div class="form-group">
                        <label>Nom de l'image</label>
                          <input type="text" name="alt" placeholder="alt" tabindex="1" required class="form-control">
                        </div>
                         <div class="form-group">
                         <label>Choisissez un itineraire</label>
                          <select required class="form-control" name="id_Scircuit">
                                             
                                <?php 
                                $query="SELECT id FROM sous_circuit order by id"; 
                                $query=$this->db->query($query);
                                $result=$query->result();
                                foreach ($result as $row) {?>
                                  <option>
                                    <?php echo $row->id ;?> 
                                   
                                   
                                
                                  </option>
                                    
                                <?php } ?>
                          </select> 
                        </div>
                        <div class="form-group">
                          <button type="submit" id="img-submit" data-submit="Sending" class="btn btn-primary">Ajouter</button>
                        </div>
                        </form>
                   
                          <br>
                          <br>
                     <hr>
                        <?php echo form_open_multipart('Home/image_uploadslide/' , array('id' => 'img'));?>
                          <h3 style="color:#C90000;text-decoration: underline;font-family: Times">Pour ajouter image pour le slide</h3>
                           <br>
                          <br>
                          <div class="form-group">
                            <input type="file" name="nom" tabindex="2" required class="form-control">
                        </div>
                        
                         
                      
                        <div class="form-group">
                          <button type="submit" id="img-submit" data-submit="Sending" class="btn btn-primary">Ajouter</button>
                        </div>
                        </form>
                    </div>
                 <div class="col-md-6" style="top: 15px">
                            <div class="col-md-1"></div>
                             <div class="col-md-10">
                             <div class="panel panel-primary">
                                          <div class="panel-heading">
                                              REFERENCE POUR Id_Circuit
                                          </div>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Id Itineraire</th>
                                  <th>Itineraire</th> 
                                </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                  $query="SELECT id, nom FROM sous_circuit "; 
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
                             <div class="col-md-1"></div>      
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
