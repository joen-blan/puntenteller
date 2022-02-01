<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>

<link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />
<?php include("includes/head-tag-contents.php");?>



  <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Klas');
        data.addColumn('number', 'Punten');
        data.addColumn({label: 'Style', type:'string', role:'style'});
        data.addRows([


            <?php
            
            
            $sql = "SELECT klas, punten, color FROM puntenlijst";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo "['" . $row["klas"]. "', " . $row["punten"]. ", 'color: ".$row["color"] . "'],";}
}
            
            
            ?>

            
            
            
          
        ]);

        // Set chart options
        var options = {
            title:'',
            hAxis: {fontSize: 30},
            legend: {position: 'none'},
           
        };

       // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);}
 </script>





</head>
<body>

<?php include("includes/navigation.php");?>

<div class="container">
    <div class="content has-text-centered" >

	</div>
</div>
<div class="block">

<section class="hero is-link ">
  <div class="hero-body">
    <p class="title has-text-centered is-1 is-spaced">DE SPEELPLAATSBEKER</p>
    <p class="title has-text-centered">
      Opdracht van de maand:
    </p>
    <p class="subtitle has-text-centered">
      <?php
            
            
            $sqlopdracht = "SELECT opdracht FROM tblOpdracht WHERE ID = '1'";
            $opdracht = $conn->query($sqlopdracht);

            if ($opdracht->num_rows > 0) {
            // output data of each row
             while($row = $opdracht->fetch_assoc()) {
             echo $row["opdracht"];}
}
            
            
            ?>
    </p>
  </div>
</section>
</div>



<div id="chart_div" style="width:50; height:1000"></div>



<?php include("includes/footer.php");?>

</body>
</html>