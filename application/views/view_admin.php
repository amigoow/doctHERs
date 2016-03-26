
                    <div class="span9">
                        <div class="content">
                          <?php
                            echo form_open("Site/imakeadmin");
                          ?>
                          <?php
                            if(isset($msg)){

echo "<div class='alert alert-success'>".$msg."</div>";
                            }
                          ?>
                              <label for="name">Name </label>  <input required  id="name" name="name" type="text" class="form-control" />
                              <label for="uname">Username </label>  <input required id="uname" name="uname" type="text" class="form-control" />
                              <label for="pass">Password </label>  <input required id="pass" name="pass" type="password" class="form-control" />
                              <label for="email">Email </label>  <input required id="email" name="email" type="email" class="form-control" />
                              
                              <br />
                              
                              <label >Manager Type</label>
                              <select name="mtype" required>
                                <option>Select Manager Type</option>
                                 <option value="full" >Full Control</option>
                                  <option value="err">Error Report Manager</option>
                                   <option value="users">Users Manager</option>
                                   <option value="posts">Posts Manager</option>
                                    <option value="loc">Location Manager</option>

                              </select>
                              <br />
                              <input type="submit" class="btn btn-success" value="Make Admin" />
                        <?php
                          echo form_close();
                        ?>
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
     