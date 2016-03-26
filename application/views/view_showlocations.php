
                    <div class="span9">
                        <div class="content">

                          <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>




</script>

                          <table class="table">
                            <tr>
                                <th>Location Of</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                  <th>Viewer</th>
                                
                                   <th>Action</th>
                            </tr>
                          <?php
                           foreach ($allloc->result() as $key) {
                         

                                echo "<tr id='".$key->usernumber."''>";

                                    echo "<td>".$key->usernumber."</td>";
                                    
                                    echo "<td>".$key->lat."</td>";
                                    echo "<td>".$key->lng."</td>";
                                     echo '<td> <a id="modal-963427" href="#modal-container-963427" role="button" data-lat="'.$key->lat.'" data-long="'.$key->lng.'" class="btn showmap" data-toggle="modal">View on Map</a></td>';
                                     echo "<td>
                                <select class='form-control actionboxrep' data-id='".$key->usernumber."'>
                                  <option value='solved'>Select Action</option>
                                        <option value='delete'>Delete</option>
                                

                                     
                                </select>
</td>
                                     " ;  
                                    
                                echo "</tr>";
                            }

                          ?>
                          </table>
                          <div id="mtr">
   <div id="googleMap" style="width:100%;height:380px;"></div>
</div>
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

         

$(".showmap").click(function(){


var lat = $(this).attr('data-lat');
var lon = $(this).attr('data-long');


  initialize(lat,lon);


});

 function initialize(lat,lng) {
     
        var mapOptions = {
            center: new google.maps.LatLng(lat,lng),
            zoom: 8,
              mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
var myCenter=new google.maps.LatLng(lat,lng);

  new google.maps.Marker({
        position: myCenter,
        map: map
    });

    }
    


/*
var myCenter=new google.maps.LatLng(0,0);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}
*/


        
              $(".actionboxrep").change(function(){
                   var sel = $(this).val();
                      var idd = $(this).attr("data-id");

if(sel == "delete"){
               var r =  confirm("Are you sure you want to take this action ?");
                if(r == true){

                 
                
                 
                    $.post("deleteloc",{
                      id : idd

                    },function(data){
                        $("#"+idd).hide(500);

                    });


                 }
                }
               

              });


          });
        </script>
     