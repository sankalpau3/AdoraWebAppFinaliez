<!--
<script src="/pjs/amcharts.js"></script>

<script src="/charts/Charts.js"></script>-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Purchasing Information
      <small>Monthly sales information</small>
    </h1>
  </section>

  <!-- Main content -->
  <div id="chartdiv"></div>

  <script type="text/javascript">
	var chart = AmCharts.makeChart("chartdiv", {
	  "type": "serial",
	  "theme": "light",
	  "marginRight": 70,
	  "dataProvider": <?php echo $displey; ?>,
	  "valueAxes": [{
	    "axisAlpha": 0,
	    "position": "left",
	    "title": "Sales Value"
	  }],
	  "startDuration": 1,
	  "graphs": [{
	    "balloonText": "<b>[[category]]: [[value]]</b>",
	    "fillColorsField": "color",
	    "fillAlphas": 0.9,
	    "lineAlpha": 0.2,
	    "type": "column",
	    "valueField": "TOTALP"
	  }],
	  "chartCursor": {
	    "categoryBalloonEnabled": false,
	    "cursorAlpha": 0,
	    "zoomable": false
	  },
	  "categoryField": "PurchaseDate",
	  "categoryAxis": {
	    "gridPosition": "start",
	    "labelRotation": 45
	  },
	  "export": {
	    "enabled": true
	  }

	});

</script>


  </section><!-- /.content -->
</div><!-- /.content-wrapper -->