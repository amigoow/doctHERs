
                    <div class="span9">
                        <div class="content">
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
                         

                                echo "<tr id='".$key->id."''>";

                                 echo "<td>".$key->title."</td>";
                                    echo "<td>".$key->link."</td>";
                                    

                                    echo "<td>".$key->shortdesc."</td>";
                                 
                                  
                                    echo "<td>".$key->madeby."</td>";
                                     echo "<td><img src='http://localhost/amigo/".$key->image."' /></td>";
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

                 
                
                 
                    $.post("deletead",{
                      id : idd

                    },function(data){
                        $("#"+idd).hide(500);

                    });


                 }
                }
               

              });


          });
        </script>
     