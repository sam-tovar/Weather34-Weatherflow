<?php include('livedata.php');error_reporting(0);?>
<style>
.webcam{
-webkit-border-radius:4px;	-moz-border-radius:4px;	-o-border-radius:4px;	-ms-border-radius:4px;border-radius:4px;border:solid RGBA(84, 85, 86, 1.00) 2px;width:275px;height:145px;margin:4px;}
</style>
<!-- HOMEWEATHER STATION TEMPLATE SIMPLE WEBCAM -add your url as shown below do NOT delete the class='webcam' !!! -->
<img src="<?php echo $webcamurl?>?v=<?php echo date('YmdGis');?>>" alt="weathercam" class="webcam">
</span>
