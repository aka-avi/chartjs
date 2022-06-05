<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Count</title>
</head>
<body>
   <div style="width: 70vw;height:80vh">

      <canvas id="mychart" style="width: 100%; height:100%;"></canvas>
   </div>
<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
   <script>
      var count = <?php echo get_count_user(); ?>;
      // count = JSON.parse(count);
      month = count[0];
      users = count[1];
      console.log(count);
      ////
      // var xValues = [100,200,300,400,500,600,700,800,900,1000];
   var ctx = document.getElementById('mychart').getContext('2d');
new Chart(ctx, {
  type: "line",
  data: {
    labels: month,
    datasets: [{
      data: users,
      borderColor: "magenta",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});


   </script>
</body>
</html>