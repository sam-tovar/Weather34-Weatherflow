<?php include('metar34get.php');
//weather34 original metarnearby script 201-2019//
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Nearby Metar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
  grid-gap: 10px;
  align-items: stretch;
  color:#f5f7fc
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:10px;
  font-size:0.75em;
  -webkit-border-radius:4px;
  border-radius:4px;
}
.grid > article img {
  max-width: 100%;
}

  
 .weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}meteotextshowertext{font-size:1.2rem;color:#009bb4}meteorsvgicon{color:#f5f7fc}  
.moonphasetext{font-size:1.1rem;color:#f5f7fc;position:absolute;display:inline;left:140px;top:80px}
moonphaseriseset{font-size:.9rem;}credit{position:relative;font-size:.8em;top:10%}
.metar34compass1{position:relative}

.metar34compass1>.metar34compass-line1,.metar34compass>.metar34compass-line{right:25px;-webkit-clip-path:polygon(100%0,100%100%,100%100%,0100%,00);-ms-clip-path:polygon(100%0,100%100%,100%100%,0100%,00);-webkit-border-radius:100%;-moz-border-radius:100%;-ms-border-radius:100%}
.text1{font-family:weathertext2,Arial;font-size:20px;margin-left:3px;}
.windvalue1{font-family:weathertext2,Arial;font-size:20px;margin-left:3px;}
.windseparator{color:rgba(57,61,64,1)}
.text1,.windvalue1{color:#aaa}
.windirection1{width:100%;}
.metar34compass1{width:150px;height:150px;text-align:center;top:0px;left:35px;z-index:1}

text1{z-index:10;text-align:center;margin:5px 0 auto}
.metar34compass1>.metar34compass-line1{position:absolute;z-index:10;left:25px;top:25px;bottom:25px;-o-border-radius:100%;border-radius:100%;border-left:8px solid rgba(95,96,97,.5);border-top:8px solid rgba(95,96,97,.8);border-right:8px solid rgba(95,96,97,.5);border-bottom:8px solid rgba(95,96,97,.8);}

.thearrow1:before{width:6px;height:6px;position:absolute;z-index:9;left:2px;top:-3px;border:2px solid #fff;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
.windirectiontext1{position:absolute;text-align:center;color:#aaa;font-family:'weathertext2',Arial,sans-serif;line-height:12px;font-size:11px;z-index:10;margin:0 0 auto;margin-top:55px;margin-left:80px}
.windirectiontext1 span{color:#9aba2f}
.thearrow2{-webkit-transform:rotate(<?php echo $metar34windir;?>deg);-moz-transform:rotate(<?php echo $metar34windir;?>deg);-o-transform:rotate(<?php echo $metar34windir;?>deg);-ms-transform:rotate(<?php echo $metar34windir;?>deg);transform:rotate(<?php echo $metar34windir;?>deg);position:absolute;z-index:200;top:0;left:50%;margin-left:-5px;width:10px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}.thearrow2:after{content:'';position:absolute;left:50%;top:0;height:10px;width:10px;background-color:NONE;width:0;height:0;border-style:solid;border-width:14px 9px 0 9px;border-color:RGBA(255,121,58,1.00) transparent transparent transparent;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}.thearrow2:before{content:'';width:3px;height:3px;position:absolute;z-index:9;left:2px;top:-5px;border:1px solid RGBA(255,255,255,0.8);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
spancalm{postion:relative;font-family:weathertext2,Arial;font-size:16px;}

.metartempcontainer1{left:70px;top:0}
.metartempcontainer2{left:10px;top:90px;position:absolute}
.metartempcontainer3{left:105px;top:125px;position:absolute}
.metartempcontainer4{left:105px;top:76px;position:absolute}
.metartempcontainer5{left:105px;top:142px;position:absolute}




.metarwindcontainer1{margin-top:0;margin-left:5px;position:relative}
/*kts*/
.metarwindcontainer2{margin-top:10px;margin-left:0px;position:relative}
/*mph*/
.metarwindcontainer3{margin-top:-95px;margin-left:85px;position:relative}
/*ms*/
.metarwindcontainer4{margin-top:10px;margin-left:85px;position:relative}
.metarwindcontainer5{margin-top:-50px;margin-left:5px;position:relative}


.metartemptoday0,.metartemptoday5,.metartemptoday10,.metartemptoday20,.metartemptoday25,.metartemptoday30{font-family:weathertext2,Arial,Helvetica,system;width:4.5rem;height:2.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.metartemptoday0,.metartemptoday5,.metartemptoday10,.metartemptoday15,.metartemptoday20,.metartemptoday25,.metartemptoday30{font-size:1.1rem;padding-top:0;color:#fff;border-bottom:12px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:21px;}

.metartemptoday0{background:rgba(68, 166, 181, 1.000)}
.metartemptoday5{background:rgba(144, 177, 42, 1.000)}
.metartemptoday10{background:rgba(230, 161, 65, 1.000)}
.metartemptoday20{background:rgba(255, 124, 57, 1.000)}
.metartemptoday25{background:rgba(255, 124, 57, 0.7)}
.metartemptoday30{background:rgba(211, 93, 78, 1.000)}
.metardewcontainer1{left:70px;margin-top:10px}
.metardewtoday0,.metardewtoday5,.metardewtoday10,.metardewtoday20,.metardewtoday25,.metardewtoday30{font-family:weathertext2,Arial,Helvetica,system;width:4.5rem;height:2.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.metardewtoday0,.metardewtoday5,.metardewtoday10,.metardewtoday15,.metardewtoday20,.metardewtoday25,.metardewtoday30{font-size:1.1rem;padding-top:0;color:#fff;border-bottom:12px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:21px;}
.metardewtoday0{background:rgba(68, 166, 181, 1.000)}
.metardewtoday5{background:rgba(144, 177, 42, 1.000)}
.metardewtoday10{background:rgba(230, 161, 65, 1.000)}
.metardewtoday20{background:rgba(255, 124, 57, 1.000)}
.metardewtoday25{background:rgba(255, 124, 57, 0.7)}
.metardewtoday30{background:rgba(211, 93, 78, 1.000)}
.metarhumcontainer1{left:200px;margin-top:10px}
.metarhumcontainer2{left:200px;margin-top:10px}

.metarhumtoday0-35,.metarhumtoday35-70,.metarhumtoday70-85,.metarhumtoday85-100{font-family:weathertext2,Arial,Helvetica,system;width:4.5rem;height:2.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.metarhumtoday0-35,.metarhumtoday35-70,.metarhumtoday70-85,.metarhumtoday85-100{font-size:1.1rem;padding-top:2px;color:#fff;border-bottom:12px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:21px;}
.metarhumtoday0-35{background:rgba(211, 93, 78, 1.000)}.metarhumtoday35-70{background:rgba(230, 161, 65, 1.000)}.metarhumtoday70-85{background:rgba(230, 161, 65, 1.000)}.metarhumtoday85-100{background:rgba(68, 166, 181, 1.000)}
.dewword,.tword{position:absolute;margin-top:-32px;font-size:.65rem;z-index:1;color:#fff}
.dewword,.tword{position:absolute;margin-top:-32px;font-size:.65rem;z-index:1;color:#fff}
.dewword{margin-left:6px}
.tword{margin-left:2px}
.tword2{position:absolute;margin-top:-32px;font-size:.65rem;z-index:1;color:#fff}
.dewword2{position:absolute;margin-top:33px;font-size:.65rem;z-index:1;color:#fff;margin-left:95px}
.tword2{margin-left:90px}
.maxword{position:absolute;margin-top:-32px;font-size:.65rem;z-index:1;color:#fff}
.maxword{margin-left:10px}
.windword{position:absolute;margin-top:32px;font-size:.65rem;z-index:1;color:#fff;margin-left:7px}
.humword{position:absolute;top:140px;font-size:.7rem;z-index:1;color:#fff;margin-left:170px}
.metarwindtoday0,.metarwindtoday5,.metarwindtoday10,.metarwindtoday20,.metarwindtoday25,.metarwindtoday30{font-family:weathertext2,Arial,Helvetica,system;width:5rem;height:2.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}
.metarwindtoday0,.metarwindtoday5,.metarwindtoday10,.metarwindtoday15,.metarwindtoday20,.metarwindtoday25,.metarwindtoday30{font-size:1.1rem;padding-top:0;color:#fff;border-bottom:10px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;display:flex}
.metarwindtodaykts0,.metarwindtodaykts5,.metarwindtodaykts10,.metarwindtodaykts20,.metarwindtodaykts25,.metarwindtodaykts30{font-family:weathertext2,Arial,Helvetica,system;width:5rem;height:2.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}
.metarwindtodaykts0,.metarwindtodaykts5,.metarwindtodaykts10,.metarwindtodaykts15,.metarwindtodaykts20,.metarwindtodaykts25,.metarwindtodaykts30{font-size:1.5rem;padding-top:0;color:#fff;border-bottom:12px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;display:flex}

.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}

.metarwindtodaykts0{background:rgba(68, 166, 181, 1.000)}
.metarwindtodaykts5{background:rgba(144, 177, 42, 1.000)}
.metarwindtodaykts10{background:rgba(230, 161, 65, 1.000)}
.metarwindtodaykts20{background:rgba(255, 124, 57, 1.000)}
.metarwindtodaykts25{background:rgba(255, 124, 57, 0.7)}
.metarwindtodaykts30{background:rgba(211, 93, 78, 1.000)}
.metarwindtoday0{background:rgba(68, 166, 181, 1.000)}
.metarwindtoday5{background:rgba(144, 177, 42, 1.000)}
.metarwindtoday10{background:rgba(230, 161, 65, 1.000)}
.metarwindtoday20{background:rgba(255, 124, 57, 1.000)}
.metarwindtoday25{background:rgba(255, 124, 57, 0.7)}
.metarwindtoday30{background:rgba(211, 93, 78, 1.000)}
smalluvunit{font-size:.8rem;font-family:Arial,Helvetica,system;}
valuecalm{font-size:.8em;font-family:weathertext2;}
.uppercase{font-size:.8em;font-family:weathertext2;width:300px;margin-top:-70px;margin-left:100px;float:none;position:relative;}
stationid{font-size:1.4em;font-family:weathertext2;color:#009bb4}
.hitemp,.lotemp{font-size:9px;}
</style>
<div class="weather34darkbrowser" url="Nearby Airport Conditions"></div>
  
<main class="grid">
  <article>       
<div class=actualt>&nbsp;&nbsp Temperature </div>   

 <div class="metartempcontainer1"><?php
 if ($tempunit == 'C') {
	if ($metar34temperaturec >30) {echo '<div class=metartemptoday30>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >25) {echo '<div class=metartemptoday25>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >20) {echo '<div class=metartemptoday20>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >10) {echo '<div class=metartemptoday10>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >5) {echo '<div class=metartemptoday5>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >-50) {echo '<div class=metartemptoday0>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec =='') {echo '<div class=metartemptoday0>'.$metar34temperaturec."<smalluvunit> N/A";}
 } else {
	 if ($metar34temperaturef >86) {echo '<div class=metartemptoday30>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >77) {echo '<div class=metartemptoday25>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >68) {echo '<div class=metartemptoday20>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >50) {echo '<div class=metartemptoday10>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >41) {echo '<div class=metartemptoday5>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >-50) {echo '<div class=metartemptoday0>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef =='') {echo '<div class=metartemptoday0>'.$metar34temperaturef."<smalluvunit> N/A";}
 }
?></smalluvunit></div></div>
<div class="tword">Temperature</div>
</div>



<div class="metartempcontainer4"><?php 
if ($tempunit == 'C') {
	if ($metar34temperaturef >86) {echo '<div class=metartemptoday30>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >77) {echo '<div class=metartemptoday25>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >68) {echo '<div class=metartemptoday20>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >50) {echo '<div class=metartemptoday10>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >41) {echo '<div class=metartemptoday5>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >-50) {echo '<div class=metartemptoday0>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef =='') {echo '<div class=metartemptoday0>'.$metar34temperaturef."<smalluvunit> N/A";}
} else{
	if ($metar34temperaturec >30) {echo '<div class=metartemptoday30>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >25) {echo '<div class=metartemptoday25>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >20) {echo '<div class=metartemptoday20>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >10) {echo '<div class=metartemptoday10>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >5) {echo '<div class=metartemptoday5>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >-50) {echo '<div class=metartemptoday0>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec =='') {echo '<div class=metartemptoday0>'.$metar34temperaturec."<smalluvunit> N/A";}
}
?></smalluvunit></div></div>
<div class="tword2">Temperature</div>



<div class="metartempcontainer5"><?php 
if ($tempunit == 'C') {
	if ($metar34dewpointf>86) {echo '<div class=metartemptoday30>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>77) {echo '<div class=metartemptoday25>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>68) {echo '<div class=metartemptoday20>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>50) {echo '<div class=metartemptoday10>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>41) {echo '<div class=metartemptoday5>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>-50) {echo '<div class=metartemptoday0>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf=='') {echo '<div class=metartemptoday0>'.$metar34dewpointf."<smalluvunit> N/A";}
	
}else {
	if ($metar34dewpointc >30) {echo '<div class=metardewtoday30>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >25) {echo '<div class=metardewtoday25>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >20) {echo '<div class=metardewtoday20>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >10) {echo '<div class=metardewtoday10>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >5) {echo '<div class=metardewtoday5>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >-50) {echo '<div class=metardewtoday0>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc=='') {echo '<div class=metartemptoday0>'.$metar34dewpointc."<smalluvunit> N/A";}
}
?></smalluvunit></div></div>
<div class="dewword2">&nbsp;Dewpoint</div>
	 
<div class="lotemp">

<div class="metardewcontainer1"><?php
if ($tempunit == 'C') {
	if ($metar34dewpointc >30) {echo '<div class=metardewtoday30>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >25) {echo '<div class=metardewtoday25>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >20) {echo '<div class=metardewtoday20>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >10) {echo '<div class=metardewtoday10>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >5) {echo '<div class=metardewtoday5>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >-50) {echo '<div class=metardewtoday0>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc=='') {echo '<div class=metartemptoday0>'.$metar34dewpointc."<smalluvunit> N/A";}
} else {
	if ($metar34dewpointf>86) {echo '<div class=metartemptoday30>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>77) {echo '<div class=metartemptoday25>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>68) {echo '<div class=metartemptoday20>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>50) {echo '<div class=metartemptoday10>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>41) {echo '<div class=metartemptoday5>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>-50) {echo '<div class=metartemptoday0>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf=='') {echo '<div class=metartemptoday0>'.$metar34dewpointf."<smalluvunit> N/A";}
}
?></smalluvunit></div></div> 
 <div class="dewword">&nbsp;&nbsp;Dewpoint</div>

<div class="lotemp">

 <div class="metarhumcontainer1" style="position:absolute;left:180px;top:95px"><?php 
if ($metar34humidity >85) {echo '<div class=metarhumtoday85-100>'.$metar34humidity ."<smalluvunit> &nbsp;%";}
else if ($metar34humidity >70) {echo '<div class=metarhumtoday70-85>'.$metar34humidity ."<smalluvunit> &nbsp;%";}
else if ($metar34humidity  >35) {echo '<div class=metarhumtoday35-70>'.$metar34humidity ."<smalluvunit> &nbsp;%";}
else if ($metar34humidity >=0) {echo '<div class=metarhumtoday0-35>'.$metar34humidity ."<smalluvunit> &nbsp;%";}
else if ($metar34humidity=='') {echo '<div class=metarhumtoday0-35><smalluvunit> N/A';}
?></smalluvunit></div></div> 
<div class="humword">&nbsp;Humidity</div>
</div>
  
</article>  
  
   
  <article>
  <div class=actualw>&nbsp;&nbsp Wind Speed</div>   
   <?php
//set windspeed variables
if ($windunit == 'km/h') {
	$metarwind1 = 'kmh';
	$metarwind2 = 'kts';
	$metarwind3 = 'mph';
	$metarwind4 = 'ms';
} else if ($windunit == 'mph') {
	$metarwind1 = 'mph';
	$metarwind2 = 'kts';
	$metarwind3 = 'kmh';
	$metarwind4 = 'ms';
} else if ($windunit == 'kts') {
	$metarwind1 = 'kts';
	$metarwind2 = 'mph';
	$metarwind3 = 'kmh';
	$metarwind4 = 'ms';
} else {
	$metarwind1 = 'ms';
	$metarwind2 = 'mph';
	$metarwind3 = 'kmh';
	$metarwind4 = 'kts';
}
	if ($metar34windspeedkmh >=50) {$metarkmh = '<div class=metarwindtoday30>'.$metar34windspeedkmh."<smalluvunit> &nbsp;km/h";}
	else if ($metar34windspeedkmh >=40) {$metarkmh = '<div class=metarwindtoday25>'.$metar34windspeedkmh."<smalluvunit>&nbsp; km/h";}
	else if ($metar34windspeedkmh >=30) {$metarkmh = '<div class=metarwindtoday20>'.$metar34windspeedkmh."<smalluvunit>&nbsp; km/h";}
	else if ($metar34windspeedkmh >0) {$metarkmh = '<div class=metarwindtoday10>'.$metar34windspeedkmh."<smalluvunit>&nbsp; km/h";}
	else {$metarkmh = '<div class=metarwindtoday10>'.'0'."<smalluvunit>&nbsp; km/h";}
	if ($metar34windspeedmph >=31.06) {$metarmph = '<div class=metarwindtoday30>'.$metar34windspeedmph."<smalluvunit> &nbsp;mph";}
	else if ($metar34windspeedmph >=24.85) {$metarmph = '<div class=metarwindtoday25>'.$metar34windspeedmph."<smalluvunit> &nbsp;mph";}
	else if ($metar34windspeedmph >=18.6) {$metarmph = '<div class=metarwindtoday20>'.$metar34windspeedmph."<smalluvunit> &nbsp;mph";}
	else if ($metar34windspeedmph >0) {$metarmph = '<div class=metarwindtoday10>'.$metar34windspeedmph."<smalluvunit> &nbsp;mph";}
	else {$metarmph = '<div class=metarwindtoday10>'.'0'."<smalluvunit> &nbsp;mph";}
	if ($metar34windspeedkts >=26.9) {$metarkts = '<div class=metarwindtoday30>'.$metar34windspeedkts."<smalluvunit> &nbsp;kts";}
	else if ($metar34windspeedkts >=21.5) {$metarkts = '<div class=metarwindtoday25>'.$metar34windspeedkts."<smalluvunit> &nbsp;kts";}
	else if ($metar34windspeedkts >=16.19) {$metarkts = '<div class=metarwindtoday20>'.$metar34windspeedkts."<smalluvunit> &nbsp;kts";}
	else if ($metar34windspeedkts >0) {$metarkts = '<div class=metarwindtoday10>'.$metar34windspeedkts."<smalluvunit> &nbsp;kts";}
	else {$metarkts = '<div class=metarwindtoday10>'.'0'."<smalluvunit> &nbsp;kts";}
	if ($metar34windspeedms >=13.8) {$metarms = '<div class=metarwindtoday30>'.$metar34windspeedms."<smalluvunit> &nbsp;m/s";}
	else if ($metar34windspeedms >=11.1) {$metarms = '<div class=metarwindtoday25>'.$metar34windspeedms."<smalluvunit> &nbsp;m/s";}
	else if ($metar34windspeedms >=8.3) {$metarms = '<div class=metarwindtoday20>'.$metar34windspeedms."<smalluvunit> &nbsp;m/s";}
	else if ($metar34windspeedms >0) {$metarms = '<div class=metarwindtoday10>'.$metar34windspeedms."<smalluvunit> &nbsp;m/s";}
	else {$metarms = '<div class=metarwindtoday10>'.'0'."<smalluvunit> &nbsp;m/s";}
$metarspot1 = 'metar'.$metarwind1;
$metarspot2 = 'metar'.$metarwind2;
$metarspot3 = 'metar'.$metarwind3;
$metarspot4 = 'metar'.$metarwind4;
?></div></div></div></div></smalluvunit>

<div class="metarwindcontainer1">
<?php
//wind1 kph
echo $$metarspot1;
?>
</div>
<div class="metarwindcontainer2">
<?php 
//wind2 mph
echo $$metarspot2;
?></smalluvunit></div>
</div>



<div class="metarwindcontainer3">
<?php 
//wind3 kts
echo $$metarspot3;
?></smalluvunit></div>
</div>
<div class="metarwindcontainer4">
<?php 
//wind4 ms
echo $$metarspot4;
?></smalluvunit></div>
</div>
</div>


</article>


<article>
<div class=actualw>&nbsp;&nbsp Wind Direction</div> 






<div class="windirectiontext1" >

<?php 
if( $metar34windir==0){echo "<span>Calm</span>";}else echo $metar34windir,"&deg;";?>
<br>
<?php 
if($metar34windir<=11.25){echo "Due <span>North<br></span>";}
else if($metar34windir<=33.75){echo "North North <br><span>East</span>";}
else if($metar34windir<=56.25){echo "North <span> East<br></span>";}
else if($metar34windir<=78.75){echo "East North<br><span>East</span>";}
else if($metar34windir<=101.25){echo "Due <span> East<br></span>";}
else if($metar34windir<=123.75){echo "East South<br><span>East</span>";}
else if($metar34windir<=146.25){echo "South <span> East</span>";}
else if($metar34windir<=168.75){echo "South South<br><span>East</span>";}
else if($metar34windir<=191.25){echo "Due <span> South</span>";}
else if($metar34windir<=213.75){echo "South South<br><span>West</span>";}
else if($metar34windir<=236.25){echo "South <span> West</span>";}
else if($metar34windir<=258.75){echo "West South<br><span>West</span>";}
else if($metar34windir<=281.25){echo "Due <span> West</span>";}
else if($metar34windir<=303.75){echo "West North<br><span>West</span>";}
else if($metar34windir<=326.25){echo "North <span> West</span>";}
else if($metar34windir<=348.75){echo "North North<br><span>West</span>";}
else{echo "Due <span> North</span>";}?>

</div>

</div>

</div> 



<div class="metar34compass1">
<div class="metar34compass-line1">
<div class="thearrow2"></div></div></div>

 


  </article> 
  
  
  <article>
  <div class=actualt>&nbsp;&nbsp Current Conditions </div>   
 <?php 	echo "<img rel='prefetch' src='css/icons/".$sky_icon."' width='100px' height='70px' style='margin-top:3px;' >";?>
  
  
   <?php //min year 
 echo '<div class=uppercase>',$sky_desc.'</div> '; ?>
<div class="lotemp" style="margin-top:30px;">
<div class="hitemp">Pressure <green>
<?php
if ($pressureunit == 'mb' || $pressureunit == 'hPa') {
	echo $metar34pressuremb ," </green>(".$pressureunit.")";
} else {
	echo $metar34pressurehg ," </green>(inHG)";
}
?> - <green>
<?php
if ($pressureunit == 'mb' || $pressureunit == 'hPa') {
	echo $metar34pressurehg ," </green>(inHG)";
} else {
	echo $metar34pressuremb ," </green>(mb)";
}
?></span></div>
<div class="hitemp">Visibility <yellow>
<?php
if ($distanceunit == 'mi') {
	echo $metar34vismiles  ," </yellow>(mi)";
} else {
	echo $metar34viskm ,"</yellow> (km)";
}
?> - <yellow>
<?php
if ($distanceunit =='mi') {
	echo $metar34viskm  ," </yellow>(km)";
} else {
	echo $metar34vismiles ,"</yellow> (mi)";
}
?>
   
   
   
  </article> 
  
  
  <article>
  <div class=actualt>&nbsp;&nbsp Airport Data </div>   
  <stationid><?php echo $metar34stationid ; ?></stationid><br>
  <div class="lotemp">
   <?php
echo "Location <yellow>",$metar34stationname  ;
echo '</yellow> <green>'.$airport1dist.'</green> '.$distanceunit.' (<green>';
if ($distanceunit == 'mi') {
	echo round($airport1dist * 1.609,2,PHP_ROUND_HALF_UP);
	echo '</green> km)';
} else {
	echo round($airport1dist / 1.609,2,PHP_ROUND_HALF_UP);
	echo '</green> mi)';
}
?>
 <div class="lotemp">
<?php //metar raw
echo "Metar :" .$metar34raw."";?>
</div>
<div class="hitemp">
<?php //update timestamp
date_default_timezone_set($tz);$date = $metar34time;$date=str_replace('@', ' ', $date);
$date=str_replace('Z', ' ', $date);$date1 = strtotime($date) + 60*60*$UTC;echo date('D jS F H:i a ',$date1);
?> </div></div>

  </article> 
  
  <article>
  <div class=actualt>&nbsp;&nbsp API & &copy; Info</div>  
  <div class="lotemp">
  <?php echo $info?> CSS/SVG/PHP scripts were developed by <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:9px;">weather34.com</a>  for use in the weather34 template &copy; 2015-<?php echo date('Y');?>
  <br><br><span style="margin-left:100px;margin-top:20px;">
  Data Provided by </span><a href="https://www.checkwx.com/weather/<?php echo $icao1;?>" title="https://www.checkwx.com/weather/<?php echo $icao1;?>" target="_blank" ><br><img src=img/checkwx.svg width=80px alt="https://www.checkwx.com/weather/<?php echo $icao1;?>" style="margin-top:-5px;margin-left:100px;"></a>
  
  </div></article> 
   
</main>