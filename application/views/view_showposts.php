
                    <div class="span9">
                        <div class="content">
                          <table class="table">
                            <tr>
                                <th>ID#</th>
                                <th>Posts</th>
                                <th>Posted By</th>
                                
                                <th>Likes</th>
                                
                                   <th>Action</th>
                            </tr>
                          <?php
                           foreach ($allposts->result() as $key) {
                         

                                echo "<tr id='".$key->postid."''>";

                                    echo "<td>".$key->postid."</td>";
                                    

                                    echo "<td>".$key->status."</td>";
                                 
                                  
                                    echo "<td>".$key->postedby."</td>";
                                     echo "<td>".$key->likes."</td>";
                                     echo "<td>
                                <select class='form-control actionboxrep' data-id='".$key->postid."'>
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

                 
                
                 
                    $.post("deletePost",{
                      id : idd

                    },function(data){
                        $("#"+idd).hide(500);

                    });


                 }
                }
               

              });


          });
        </script>
     