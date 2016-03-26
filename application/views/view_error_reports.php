
                    <div class="span9">
                        <div class="content">
                          <table class="table">
                            <tr>
                                <th>Ref#</th>
                                <th>Report</th>
                                <th>Status</th>
                                <th>Initiatated By</th>
                                   <th>Action</th>
                            </tr>
                          <?php
                           foreach ($er as $key) {
                                echo "<tr id='".$key->id."''>";

                                    echo "<td>".$key->id."</td>";

                                    echo "<td>".$key->reporterror."</td>";

                                    echo "<td>".$key->status."</td>";

                                    echo "<td>".$key->madeby."</td>";
                                     echo "<td>
                                <select class='form-control actionboxrep' data-id='".$key->id."'>
                                  <option value='solved'>Select Action</option>
                                        <option value='solved'>Mark as Solved</option>
                                
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

                 
                
                 
                    $.post("deleteReport",{
                      id : idd

                    },function(data){
                        $("#"+idd).hide(500);

                    });


                 }
                }
                else
                  if(sel == "solved")
                {
  var r =  confirm("Are you sure you want to take this action ?");
                if(r == true){

  $.post("updatestatusreport",{
                      id : idd

                    },function(data){
                        location.reload();

                    });

                }
              }

              });


          });
        </script>
     