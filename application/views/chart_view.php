<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chart using codeigniter and morris.js</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>">
  </head>
  <body>
    <h2>Chart using Codeigniter and Morris.js</h2>

    <div id="graph"></div>

    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script>
    <script>
        Morris.Area({
          element: 'graph',
          data: <?php echo $data;?>,
          xkey: 'year',
          ykeys: ['purchase', 'sale', 'profit'],
          labels: ['Purchase', 'Sale', 'Profit']
        });
    </script>
  </body>
</html>
