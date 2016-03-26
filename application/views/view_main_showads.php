<div class="row" style="padding-top:80px;">
		<div class="col-md-10 col-md-offset-1" style="  background: #fff;box-shadow: 0px 2px 10px rgba(0,0,0,0.6);padding: 20px;">
		
<?php
$this->db->select()->from("ads");
$this->db->where("madeby",$this->session->userdata['userin']['username']);
$ads = $this->db->get();

?>
		 <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Short Desc</th>
                                
                                <th>Made By</th>
                                

                                <th>Image</th>
                                
                                   <th>Action</th>
                            </tr>
                          <?php
                           foreach ($ads->result() as $key) {
								$this->db->select()->from("adsdata");
								$this->db->where("adid",$key->id);
								$q = $this->db->get();


                                echo "<tr id='".$key->id."''>";

                                 echo "<td>".$key->title."</td>";
                                    echo "<td>".$key->link."</td>";
                                    

                                    echo "<td>".$key->shortdesc."</td>";
                                 
                                  
                                    echo "<td>".$key->madeby."</td>";
                                     echo "<td><img src='http://localhost/amigo/".$key->image."' width='300' /></td>";
                                     echo "<td>
                                <select class='form-control actionboxrep' data-id='".$key->id."'>
                                  <option value='solved'>Select Action</option>
                                        <option value='delete'>Delete</option>
                                

                                     
                                </select>
</td>
                                     " ;  
                                    
                                echo "</tr>";
                               echo "<tr>";
                               	echo "<th>Clicks</th>";

                               echo "</tr>";
                               echo "
                               <tr>
                               		<td>".$q->num_rows()."</td>
                               </tr>";


                            }

                          ?>
                          </table>
		



		</div>
</div>
        <script>
          $(document).ready(function(){
              $(".actionboxrep").change(function(){
                   var sel = $(this).val();
                      var idd = $(this).attr("data-id");

if(sel == "delete"){
               var r =  confirm("Are you sure you want to take this action ?");
                if(r == true){

                 
                
                 
                    $.post("../site/deletead",{
                      id : idd

                    },function(data){
                        $("#"+idd).hide(500);

                    });


                 }
                }
               

              });


          });
        </script>
</body>
</html>