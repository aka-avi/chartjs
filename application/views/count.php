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
   <button class="click">hello</button>
<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
   <script>

      var count = <?php echo get_count_user(0, 12); ?>;
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

   <script>
      $(document).on('click', '.click', function(){
         $.ajax({
            url: 'http://localhost/ci3/index.php/welcome/get_user_ct',
            type: 'POST',
            data: {role: 1,time:12 },
            success:function(response){
      response = JSON.parse(response);
      month = response[0];
      users = response[1];
      console.log(response);
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
            }
         })
      })
   </script>
</body>
</html>