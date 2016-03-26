
                    <div class="span9">
                        <div class="content">

<script src="<?php echo base_url(); ?>application/assests/scripts/highcharts.js" type="text/javascript"></script>


<?php
   $this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 1 DAY) AND NOW()');
    $q = $this->db->get();
 

$this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 3 DAY) AND NOW()');
    $q1 = $this->db->get();



$this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 5 DAY) AND NOW()');
    $q2 = $this->db->get();

$this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
    $q3 = $this->db->get();

$this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 9 DAY) AND NOW()');
    $q4 = $this->db->get();

    $this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 11 DAY) AND NOW()');
    $q5 = $this->db->get();

    $this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 13 DAY) AND NOW()');
    $q6 = $this->db->get();

        $this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 15 DAY) AND NOW()');
    $q7 = $this->db->get();

            $this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 18 DAY) AND NOW()');
    $q8 = $this->db->get();

                $this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 21 DAY) AND NOW()');
    $q9 = $this->db->get();

            $this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 23 DAY) AND NOW()');
    $q10 = $this->db->get();

                $this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 27 DAY) AND NOW()');
    $q11 = $this->db->get();


                $this->db->select('*')->from("posts");
    $this->db->where('timepost BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');
    $q12 = $this->db->get();


                $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) =  '01'");
    $q13 = $this->db->get();


                $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) =  '02'");
    $q14 = $this->db->get();

        $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) = '03'");
    $q15 = $this->db->get();

        $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) = '04'");
    $q16 = $this->db->get();

            $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) = '05'");
    $q17 = $this->db->get();

        $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) = '06'");
    $q18 = $this->db->get();

        $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) = '07'");
    $q19 = $this->db->get();

        $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) ='08'");
    $q20 = $this->db->get();

        $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) ='09'");
    $q21 = $this->db->get();

        $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) = '10'");
    $q22 = $this->db->get();
        

        $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) = '11'");
    $q23 = $this->db->get();

      $this->db->select('max(likes) as maxlikes')->from("posts");
    $this->db->where("month(timepost) = '12'");
    $q24 = $this->db->get();




?>
<script src="<?php echo base_url(); ?>application/assests/scripts/exporting.js" type="text/javascript"></script>
<script>
  $(function () {

    $('#container1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Liked Posts'
        },
        subtitle: {
            text: 'Source: BeMyAmigo'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Like Posts'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Likes',
            data: [

            <?php
              foreach ($q13->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>, 

  <?php
              foreach ($q14->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>

             , 

  <?php
              foreach ($q15->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>
             , 

  <?php
              foreach ($q16->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>
             , 
  <?php
              foreach ($q17->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>
             , 
  <?php
              foreach ($q18->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>
             , 
  <?php
              foreach ($q19->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>
             , 

  <?php
              foreach ($q20->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>
             , 

  <?php
              foreach ($q21->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>
             , 
  <?php
              foreach ($q22->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>

             , 
  <?php
              foreach ($q23->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>
,
  <?php
              foreach ($q24->result() as $key) {
                if($key->maxlikes)
                {

              echo $key->maxlikes; 

              }
              else{

                echo "0";
              } 
            }
             ?>

             ]

        }]
    });


    $('#container').highcharts({
        title: {
            text: 'Monthly Number Of Posts',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: BeMyAmigo Data-Center',
            x: -20
        },
        xAxis: {
            categories: ['1','3', '5', '7', '9','11','13','15','18','21','23', '27', '30']
        },
        yAxis: {
            title: {
                text: 'Number Of Posts'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [
{
            name: '',
            data: []
        },
        {
            name: 'Posts',
            data: [<?php echo $q->num_rows() ?>,<?php     echo $q1->num_rows(); ?>, <?php     echo $q2->num_rows(); ?>, <?php     echo $q3->num_rows(); ?>, ,  <?php     echo $q4->num_rows(); ?>, <?php     echo $q5->num_rows(); ?>, <?php     echo $q6->num_rows(); ?>, <?php     echo $q7->num_rows(); ?>, <?php     echo $q8->num_rows(); ?>, <?php     echo $q9->num_rows(); ?>, <?php     echo $q10->num_rows(); ?>, <?php     echo $q11->num_rows(); ?>, <?php     echo $q12->num_rows(); ?>]
        }

        ]
    });
});
</script>

<div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<br />

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>




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
     