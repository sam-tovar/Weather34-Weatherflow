<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Rainfall Almanac Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 2fr));
  grid-gap: 10px;
  align-items: stretch;
  color:#f5f7fc
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:20px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
}
.grid > article img {
  max-width: 100%;
}

  
 .weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}


.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}


<!--weather34 rain beaker csss-->
.rainfallcontainer1{left:5px;top:0}
.rainfalltoday1{font-family:weathertext2,Arial,Helvetica,system;width:7rem;height:2.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;}
.rainfalltoday1{font-size:1.5rem;padding-top:22px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;text-align:center;border-radius:3px;}
.rainfallcaution,.rainfalltrend{position:absolute;font-size:1rem}
.rainfalltoday1{background:rgba(68, 166, 181, 1.000)}
smalluvunit{font-size:.7rem;font-family:Arial,Helvetica,system;}

.almanac{font-size:1.25em;margin-top:30px;color:rgba(56, 56, 60, 1.000);width:12em}
metricsblue{color:#44a6b5;font-family:"weathertext2",Helvetica, Arial, sans-serif;background:rgba(86, 95, 103, 0.5);-webkit-border-radius:2px;border-radius:2px;align-items:center;justify-content:center;font-size:.9em;left:10px;padding:0 3px 0 3px;}
.w34convertrain{position:relative;font-size:.5em;top:10px;color:#c0c0c0;margin-left:5px}
.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:12px;width:90px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-20px;margin-left:92px;padding-left:3px;line-height:11px;font-size:10px}

.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:170px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.svgimage{background:rgba(0, 155, 171, 1.000);-webit-border-radius:2px;border-radius:2px;}

</style>
<div class="weather34darkbrowser" url="Rainfall Almanac"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>&nbsp;&nbsp Rainfall Measured Today </div>        
  <?php // rain today 
echo "<div class='rainfalltoday1'>",$weather["rain_today"] . "</value>";echo "<smalluvunit>".$weather["rain_units"]."</smalluvunit>"?>
<div class='w34convertrain'>
<?php //convert rain
if($weather["rain_units"] =='mm'){ echo number_format($weather["rain_today"]*0.0393701,2)." inches";}
if($weather["rain_units"] =='in'){ echo number_format($weather["rain_today"]*25.400013716,2)."mm";}
?>
<div></div>

<div class="hitempy"><?php if (date('jS')==$rainlasttoday1){ echo $raininfo ." Last <blue>Rainfall </blue>",$rainlasttoday;} else echo $raininfo . "<blue>Rainfall</blue> Last Hour<blue> ", $weather["rain_lasthour"]."</blue> " .$weather["rain_units"] ?></div>
</article>  

 <article>  
    <div class=actualt>&nbsp;&nbsp Rainfall Measured Yesterday </div>      
  <?php // rain yesterday
echo "<div class='rainfalltoday1'>",$weather["rainydmax"] . "</value>";echo "<smalluvunit>".$weather["rain_units"]."</smalluvunit>"?>
<div class='w34convertrain'>
<?php //convert rain
if($weather["rain_units"] =='mm'){ echo number_format($weather["rainydmax"]*0.0393701,2)." inches";}
if($weather["rain_units"] =='in'){ echo number_format($weather["rainydmax"]*25.400013716,2)."mm";}
?>
<div></div>

<div class="hitempy"><?php if (date('jS')==$rainlasttoday1){ echo $raininfo ." Last <blue>Rainfall </blue>",$rainlasttoday;} else echo $raininfo . "<blue>Rainfall</blue> Last 24 Hours<blue> ", $weather["rain_24hrs"]."</blue> " .$weather["rain_units"] ?></div>
</article>  
  
  
  <article> 
  <div class=actualt>&nbsp;&nbsp Rainfall Measured <?php echo date('M Y')?> </div>          
  <?php // rain month
echo "<div class='rainfalltoday1'>",$weather["rain_month"] . "</value>";echo "<smalluvunit>".$weather["rain_units"]."</smalluvunit>"?>
<div class='w34convertrain'>
<?php //convert rain
if($weather["rain_units"] =='mm'){ echo number_format($weather["rain_month"]*0.0393701,2)." inches";}
if($weather["rain_units"] =='in'){ echo number_format($weather["rain_month"]*25.400013716,2)."mm";}
?>
<div></div>

<div class="hitempy"><?php if ($meteobridgeapi[124]=='--'){echo "";}else echo $raininfo." Last <blue>Rainfall </blue>";?>
<?php if ($meteobridgeapi[124]=='--'){echo $raininfo," Last <blue>Rainfall</blue> N/A";}else echo " ".$rainlasttime?></div>
</article> 
  
   
   <article> 
   <div class=actualt>&nbsp;&nbsp Rainfall Measured <?php echo date("Y");?> </div>      
  <?php // rain year
echo "<div class='rainfalltoday1'>",$weather["rain_year"] . "</value>";echo "<smalluvunit>".$weather["rain_units"]."</smalluvunit>"?>
<div class='w34convertrain'>
<?php //convert rain
if($weather["rain_units"] =='mm'){ echo number_format($weather["rain_year"]*0.0393701,2)." inches";}
if($weather["rain_units"] =='in'){ echo number_format($weather["rain_year"]*25.400013716,2)."mm";}
?>
<div></div>

<div class="hitempy">Total <blue>Rainfall</blue><br>
From January 2019</div>
</article>  

  <article>
   <div class=actualt>&nbsp;&nbsp Rainfall Measured All-Time </div>      
  <?php // rain year
echo "<div class='rainfalltoday1'>",$weather["rain_alltime"] . "</value>";echo "<smalluvunit>".$weather["rain_units"]."</smalluvunit>"?>
<div class='w34convertrain'>
<?php //convert rain
if($weather["rain_units"] =='mm'){ echo number_format($weather["rain_alltime"]*0.0393701,2)." inches";}
if($weather["rain_units"] =='in'){ echo number_format($weather["rain_alltime"]*25.400013716,2)."mm";}
?>
<div></div>

<div class="hitempy">Total <blue>Rainfall</blue><br>
From January 2018</div>
                                        </article> 
  
  <article>
   <div class=actualt>&nbsp;&nbsp &copy; Information</div>  
  <?php echo $info?> CSS/SVG/PHP scripts were developed by <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:9px;">weather34.com</a>  for use in the weather34 template &copy; 2015-<?php echo date('Y');?></span></article> 
</main>