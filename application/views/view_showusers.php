
                    <div class="span9">
                        <div class="content">
                          <table class="table">
                            <tr>
                                <th>ID#</th>
                                <th>Picture (If Chosen)</th>
                                <th>Name (If Chosen)</th>
                                <th>User Number</th>
                               
                                
                                   <th>Action</th>
                            </tr>
                          <?php
                           foreach ($allusers->result() as $key) {
                         

                                echo "<tr id='".$key->id."''>";

                                    echo "<td>".$key->id."</td>";
                                       if(($key->picture)){

                                    echo "<td><img src='".$key->picture."' width='32' /></td>";
                                  }
                                  else{
                                      echo "<td>Doh! No picture found</td>";
                                  }
                                     if(($key->Name)){
                                    echo "<td>".$key->Name."</td>";
                                      }
                                      else
                                      {
echo "<td>Doh! No name selected</td>";

                                      }
                                    echo "<td>".$key->email."</td>";
                                     echo "<td>
                                <select class='form-control actionboxrep' data-id='".$key->id."'>
                                  <option value='solved'>Select Action</option>
                                        <option value='delete'>Delete</option>
                                

                                     
                                </select>
</td>
                                     " ;  
                                    
                                echo "</tr>";
                            }

                          ?>
                          </table>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>

        <script>
          $(document).ready(function(){
              $(".actionboxrep").change(function(){
                   var sel = $(this).val();
                      var idd = $(this).attr("data-id");

if(sel == "delete"){
               var r =  confirm("Are you sure you want to take this action ?");
                if(r == true){

                 
                
                 
                    $.post("deleteUser",{
                      id : idd

                    },function(data){
                        $("#"+idd).hide(500);

                    });


                 }
                }
               

              });


          });
        </script>
     