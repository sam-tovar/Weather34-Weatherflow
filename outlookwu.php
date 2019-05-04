<?php
include_once('settings.php');include('livedata.php');
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-18-19                                    #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	FORECAST WU WEATHER FORECAST: Original FEB 2019									               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
	//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
	
//start the wu output
$json='jsondata/wuforecast.txt';
$weather34wuurl=file_get_contents($json);
$parsed_weather34wujson = json_decode($weather34wuurl,false);
$parsed_weather34wujson1 = json_decode($weather34wuurl,true);
{
	//weather34 wu null fallback
	 	 
	
		  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayIcon=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[1];	 
	 $wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[1];	
	 $wuskydayTempHigh = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[1];	
	 $wuskydayTempLow = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[1];	 
	 $wuskydayWindGust = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[1];
	 $wuskydayWinddir = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[1];
	 $wuskydayWinddircardinal = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[1];
	 $wuskydayacumm = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[1];
	 $wuskydayPrecipType = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[1];
	 $wuskydayprecipIntensity = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[1];
	 $wuskydayPrecipProb = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[1];
	 $wuskydayUV = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[1];
	 $wuskydayUVdesc = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[1];	
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];
	 $wuskydaysummary = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[1];
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 $wuskydesc = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[1];
	 $wuskythunder = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[1];}
	 
	 
	 else {
	 $wuskydayIcon=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0];	 
	 $wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[0];	
	 $wuskydayTempHigh = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[0];	
	 $wuskydayTempLow = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[0];	 
	 $wuskydayWindGust = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[0];
	 $wuskydayWinddir = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[0];
	 $wuskydayWinddircardinal = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[0];
	 $wuskydayacumm = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[0];
	 $wuskydayPrecipType = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[0];
	 $wuskydayprecipIntensity = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[0];
	 $wuskydayPrecipProb = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[0];
	 $wuskydayUV = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[0];
	 $wuskydayUVdesc = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[0];	
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[0];
	 $wuskydaysummary = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[0];
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[0];
	 $wuskydesc = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[0];
	 $wuskythunder = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[0];
	 }
	 
	 
	 
	 
	 
	 
	 
	 //weather34 wu 1st
	 
	  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayIcon1=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[2];	 
	 $wuskydayTime1 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[2];	
	 $wuskydayTempHigh1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[2];	
	 $wuskydayTempLow1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[2];	 
	 $wuskydayWindGust1 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[2];
	 $wuskydayWinddir1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[2];
	 $wuskydayWinddircardinal1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[2];
	 $wuskydayacumm1 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[2];
	 $wuskydayPrecipType1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[2];
	 $wuskydayprecipIntensity1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[2];
	 $wuskydayPrecipProb1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[2];
	 $wuskydayUV1 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[2];
	 $wuskydayUVdesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[2];	
	 $wuskydaysnow1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[2];
	 $wuskydaysummary1 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[2];
	 $wuskydaynight1 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[2];
	 $wuskydesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[2];
	 $wuskythunder1 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[2];}
	 
	 
	  else {
	 
	 $wuskydayIcon1=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[1];	 
	 $wuskydayTime1 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[1];	
	 $wuskydayTempHigh1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[1];	
	 $wuskydayTempLow1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[1];
	 $wuskydayWindGust1 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[1];
	 $wuskydayWinddir1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[1];
	 $wuskydayWinddircardinal1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[1];
	 $wuskydayacumm1 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[1];
	 $wuskydayPrecipType1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[1];
	 $wuskydayprecipIntensity1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[1];
	 $wuskydayPrecipProb1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[1];
	 $wuskydayUV1 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[1];
	 $wuskydayUVdesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[1];	
	 $wuskydaysnow1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];
	 $wuskydaysummary1 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[1];
	 $wuskydaynight1 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 $wuskydesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[1];
	 $wuskythunder1 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[1];
	 
	  }
	 
	 
	 //weather34 wu 2nd
		 
	  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayIcon2=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[3];	 
	 $wuskydayTime2 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[3];	
	 $wuskydayTempHigh2 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[3];	
	 $wuskydayTempLow2 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[3];	 
	 $wuskydayWindGust2 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[3];
	 $wuskydayWinddir2 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[3];
	 $wuskydayWinddircardinal2 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[3];
	 $wuskydayacumm2 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[3];
	 $wuskydayPrecipType2 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[3];
	 $wuskydayprecipIntensity2 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[3];
	 $wuskydayPrecipProb2 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[3];
	 $wuskydayUV2 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[3];
	 $wuskydayUVdesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[3];	
	 $wuskydaysnow2 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[3];
	 $wuskydaysummary2 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[3];
	 $wuskydaynight2 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[3];
	 $wuskydesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[3];
	 $wuskythunder2 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[3];
	 
}

else {
	 
	 $wuskydayIcon2=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[2];	 
	 $wuskydayTime2 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[2];	
	 $wuskydayTempHigh2 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[2];	
	 $wuskydayTempLow2 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[2];
	 $wuskydayWindGust2 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[2];
	 $wuskydayWinddir2 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[2];
	 $wuskydayWinddircardinal2 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[2];
	 $wuskydayacumm2 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[2];
	 $wuskydayPrecipType2 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[2];
	 $wuskydayprecipIntensity2 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[2];
	 $wuskydayPrecipProb2 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[2];
	 $wuskydayUV2 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[2];
	 $wuskydayUVdesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[2];	
	 $wuskydaysnow2 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[2];
	 $wuskydaysummary2 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[2];
	 $wuskydaynight2 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[2]; 
	 $wuskydesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[2];
	 $wuskythunder2 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[2];	 }





	 //weather34 wu 3rd
	  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayIcon3=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[4];	 
	 $wuskydayTime3 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[4];	
	 $wuskydayTempHigh3 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[4];	
	 $wuskydayTempLow3 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[4];
	 $wuskydayWindGust3 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[4];
	 $wuskydayWinddir3 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[4];
	 $wuskydayWinddircardinal3 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[4];
	 $wuskydayacumm3 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[4];
	 $wuskydayPrecipType3 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[4];
	 $wuskydayprecipIntensity3 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[4];
	 $wuskydayPrecipProb3 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[4];
	 $wuskydayUV3 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[4];
	 $wuskydayUVdesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[4];
	 $wuskydaysnow3 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[4];
	 $wuskydaysummary3 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[4];
	 $wuskydaynight3 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[4];	
	 $wuskydesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[4]; 
	 $wuskythunder3 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[4];	}
	 
	 
	 
	 
	 
	 else {
	 $wuskydayIcon3=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[3];	 
	 $wuskydayTime3 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[3];	
	 $wuskydayTempHigh3 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[3];	
	 $wuskydayTempLow3 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[3];
	 $wuskydayWindGust3 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[3];
	 $wuskydayWinddir3 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[3];
	 $wuskydayWinddircardinal3 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[3];
	 $wuskydayacumm3 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[3];
	 $wuskydayPrecipType3 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[3];
	 $wuskydayprecipIntensity3 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[3];
	 $wuskydayPrecipProb3 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[3];
	 $wuskydayUV3 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[3];
	 $wuskydayUVdesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[3];
	 $wuskydaysnow3 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[3];
	 $wuskydaysummary3 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[3];
	 $wuskydaynight3 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[3];	
	 $wuskydesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[3]; 
	 $wuskythunder3 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[3];	}
	 
	  //weather34 wu 4th
	  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayIcon4=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[5];	 
	 $wuskydayTime4 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[5];	
	 $wuskydayTempHigh4 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[5];	
	 $wuskydayTempLow4 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[5];
	 $wuskydayWindGust4 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[5];
	 $wuskydayWinddir4 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[5];
	 $wuskydayWinddircardinal4 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[5];
	 $wuskydayacumm4 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[5];
	 $wuskydayPrecipType4 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[5];
	 $wuskydayprecipIntensity4 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[5];
	 $wuskydayPrecipProb4 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[5];
	 $wuskydayUV4 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[5];
	 $wuskydayUVdesc4 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[5];
	 $wuskydaysnow4 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[5];
	 $wuskydaysummary4 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[5];
	 $wuskydaynight4 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[5];
	 $wuskydesc4 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[5];
	 $wuskythunder4 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[5];}
	 
	 
	 else {
	 $wuskydayIcon4=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[4];	 
	 $wuskydayTime4 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[4];	
	 $wuskydayTempHigh4 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[4];	
	 $wuskydayTempLow4 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[4];
	 $wuskydayWindGust4 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[4];
	 $wuskydayWinddir4 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[4];
	 $wuskydayWinddircardinal4 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[4];
	 $wuskydayacumm4 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[4];
	 $wuskydayPrecipType4 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[4];
	 $wuskydayprecipIntensity4 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[4];
	 $wuskydayPrecipProb4 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[4];
	 $wuskydayUV4 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[4];
	 $wuskydayUVdesc4 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[4];
	 $wuskydaysnow4 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[4];
	 $wuskydaysummary4 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[4];
	 $wuskydaynight4 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[4];
	 $wuskydesc4 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[4];
	 $wuskythunder4 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[4];}
	 
	 
	 
	 
	 
	 
	  //weather34 wu 5th
	    if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayIcon5=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[6];	 
	 $wuskydayTime5 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[6];	
	 $wuskydayTempHigh5 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[6];	
	 $wuskydayTempLow5 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[6];
	 $wuskydayWindGust5 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[6];
	 $wuskydayWinddir5 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[6];
	 $wuskydayWinddircardinal5 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[6];
	 $wuskydayacumm5 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[6];
	 $wuskydayPrecipType5 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[6];
	 $wuskydayprecipIntensity5 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[6];
	 $wuskydayPrecipProb5 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[6];
	 $wuskydayUV5 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[6];
	 $wuskydayUVdesc5 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[6];
	 $wuskydaysnow5 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[6];
	 $wuskydaysummary5 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[6];
	 $wuskydaynight5 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[6];	
	 $wuskydesc5 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[6]; 
	 $wuskythunder5 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[6];}
	 
	 
	  else {
	 
	 $wuskydayIcon5=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[5];	 
	 $wuskydayTime5 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[5];	
	 $wuskydayTempHigh5 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[5];	
	 $wuskydayTempLow5 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[5];
	 $wuskydayWindGust5 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[5];
	 $wuskydayWinddir5 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[5];
	 $wuskydayWinddircardinal5 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[5];
	 $wuskydayacumm5 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[5];
	 $wuskydayPrecipType5 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[5];
	 $wuskydayprecipIntensity5 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[5];
	 $wuskydayPrecipProb5 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[5];
	 $wuskydayUV5 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[5];
	 $wuskydayUVdesc5 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[5];
	 $wuskydaysnow5 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[5];
	 $wuskydaysummary5 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[5];
	 $wuskydaynight5 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[5];	
	 $wuskydesc5 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[5]; 
	 $wuskythunder5 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[5];}
	 
	 
	 
	 
	 
	 
	 
	  //weather34 wu 6th
	    if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayIcon6=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[7];	 
	 $wuskydayTime6 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[7];	
	 $wuskydayTempHigh6 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[7];	
	 $wuskydayTempLow6 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[7];
	 $wuskydayWindGust6 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[7];
	 $wuskydayWinddir6 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[7];
	 $wuskydayWinddircardinal6 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[7];
	 $wuskydayacumm6 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[7];
	 $wuskydayPrecipType6 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[7];
	 $wuskydayprecipIntensity6 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[7];
	 $wuskydayPrecipProb6 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[7];
	 $wuskydayUV6 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[7];
	 $wuskydayUVdesc6 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[7];
	 $wuskydaysnow6 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[7];
	 $wuskydaysummary6 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[7];
	 $wuskydaynight6 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[7];
	 $wuskydesc6 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[7];
	 $wuskythunder6 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[7];}
	 
	 
	 
	 else{
	 $wuskydayIcon6=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[6];	 
	 $wuskydayTime6 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[6];	
	 $wuskydayTempHigh6 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[6];	
	 $wuskydayTempLow6 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[6];
	 $wuskydayWindGust6 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[6];
	 $wuskydayWinddir6 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[6];
	 $wuskydayWinddircardinal6 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[6];
	 $wuskydayacumm6 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[6];
	 $wuskydayPrecipType6 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[6];
	 $wuskydayprecipIntensity6 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[6];
	 $wuskydayPrecipProb6 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[6];
	 $wuskydayUV6 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[6];
	 $wuskydayUVdesc6 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[6];
	 $wuskydaysnow6 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[6];
	 $wuskydaysummary6 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[6];
	 $wuskydaynight6 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[6];
	 $wuskydesc6 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[6];
	 $wuskythunder6 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[6];}
	 
	 
	 
	 
	 
	  //weather34 wu 7th
	   if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayIcon7=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[8];	 
	 $wuskydayTime7 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[8];	
	 $wuskydayTempHigh7 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[8];	
	 $wuskydayTempLow7 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[8];
	 $wuskydayWindGust7 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[8];
	 $wuskydayWinddir7 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[8];
	 $wuskydayWinddircardinal7 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[8];
	 $wuskydayacumm7 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[8];
	 $wuskydayPrecipType7 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[8];
	 $wuskydayprecipIntensity7 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[8];
	 $wuskydayPrecipProb7 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[8];
	 $wuskydayUV7 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[8];
	 $wuskydayUVdesc7 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[8];
	 $wuskydaysnow7 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[8];
	 $wuskydaysummary7 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[8];	 
	 $wuskydaynight7 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[8];
	 $wuskydesc7 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[8];
	 $wuskythunder7 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[8];}
	 
	 
	 else{$wuskydayIcon7=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[7];	 
	 $wuskydayTime7 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[7];	
	 $wuskydayTempHigh7 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[7];	
	 $wuskydayTempLow7 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[7];
	 $wuskydayWindGust7 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[7];
	 $wuskydayWinddir7 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[7];
	 $wuskydayWinddircardinal7 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[7];
	 $wuskydayacumm7 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[7];
	 $wuskydayPrecipType7 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[7];
	 $wuskydayprecipIntensity7 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[7];
	 $wuskydayPrecipProb7 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[7];
	 $wuskydayUV7 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[7];
	 $wuskydayUVdesc7 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[7];
	 $wuskydaysnow7 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[7];
	 $wuskydaysummary7 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[7];	 
	 $wuskydaynight7 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[7];
	 $wuskydesc7 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[7];
	 $wuskythunder7 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[7];}
		 
}




	//wu convert temps-rain
	//metric to F
	if ($tempunit=='F' && $wuapiunit=='m' ){
	$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}	
	// metric to F UK
	if ($tempunit=='F' && $wuapiunit=='h' ){
	$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}	
	// ms non metric Scandinavia 
	if ($tempunit=='F' && $wuapiunit=='s'){
	$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}	
	// non metric to c US
	if ($tempunit=='C' && $wuapiunit=='e' ){
	$wuskydayTempHigh=($wuskydayTempHigh-32)/1.8;}	
	//rain inches to mm
	if ($rainunit=='mm' && $wuapiunit=='e' ){
	$wuskydayprecipIntensity=$wuskydayprecipIntensity*25.4;}
	//rain mm to inches scandinavia
	if ($rainunit=='in' && $wuapiunit=='s' ){
	$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
	//rain mm to inches uk
	if ($rainunit=='in' && $wuapiunit=='h' ){
	$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
	//rain mm to inches metric
	if ($rainunit=='in' && $wuapiunit=='m' ){
	$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
	//wu convert temps-rain period1 
	//metric to F
	if ($tempunit=='F' && $wuapiunit=='m' ){
	$wuskydayTempHigh1=($wuskydayTempHigh1*9/5)+32;}	
	// metric to F UK
	if ($tempunit=='F' && $wuapiunit=='h' ){
	$wuskydayTempHigh1=($wuskydayTempHigh1*9/5)+32;}	
	// ms non metric Scandinavia 
	if ($tempunit=='F' && $wuapiunit=='s'){
	$wuskydayTempHigh1=($wuskydayTempHigh1*9/5)+32;}	
	// non metric to c US
	if ($tempunit=='C' && $wuapiunit=='e' ){
	$wuskydayTempHigh1=($wuskydayTempHigh1-32)/1.8;}	
	//rain inches to mm
	if ($rainunit=='mm' && $wuapiunit=='e' ){
	$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*25.4;}
	//rain mm to inches scandinavia
	if ($rainunit=='in' && $wuapiunit=='s' ){
	$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*0.0393701;}
	//rain mm to inches uk
	if ($rainunit=='in' && $wuapiunit=='h' ){
	$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*0.0393701;}
	//rain mm to inches metric
	if ($rainunit=='in' && $wuapiunit=='m' ){
	$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*0.0393701;}
	//wu convert temps-rain period2 
	//metric to F
	if ($tempunit=='F' && $wuapiunit=='m' ){
	$wuskydayTempHigh2=($wuskydayTempHigh2*9/5)+32;}	
	// metric to F UK
	if ($tempunit=='F' && $wuapiunit=='h' ){
	$wuskydayTempHigh2=($wuskydayTempHigh2*9/5)+32;}	
	// ms non metric Scandinavia 
	if ($tempunit=='F' && $wuapiunit=='s'){
	$wuskydayTempHigh2=($wuskydayTempHigh2*9/5)+32;}	
	// non metric to c US
	if ($tempunit=='C' && $wuapiunit=='e' ){
	$wuskydayTempHigh2=($wuskydayTempHigh2-32)/1.8;}	
	//rain inches to mm
	if ($rainunit=='mm' && $wuapiunit=='e' ){
	$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*25.4;}
	//rain mm to inches scandinavia
	if ($rainunit=='in' && $wuapiunit=='s' ){
	$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*0.0393701;}
	//rain mm to inches uk
	if ($rainunit=='in' && $wuapiunit=='h' ){
	$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*0.0393701;}
	//rain mm to inches metric
	if ($rainunit=='in' && $wuapiunit=='m' ){
	$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*0.0393701;}
	//wu convert temps-rain period3 
	//metric to F
	if ($tempunit=='F' && $wuapiunit=='m' ){
	$wuskydayTempHigh3=($wuskydayTempHigh3*9/5)+32;}	
	// metric to F UK
	if ($tempunit=='F' && $wuapiunit=='h' ){
	$wuskydayTempHigh3=($wuskydayTempHigh3*9/5)+32;}	
	// ms non metric Scandinavia 
	if ($tempunit=='F' && $wuapiunit=='s'){
	$wuskydayTempHigh3=($wuskydayTempHigh3*9/5)+32;}	
	// non metric to c US
	if ($tempunit=='C' && $wuapiunit=='e' ){
	$wuskydayTempHigh3=($wuskydayTempHigh3-32)/1.8;}	
	//rain inches to mm
	if ($rainunit=='mm' && $wuapiunit=='e' ){
	$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*25.4;}
	//rain mm to inches scandinavia
	if ($rainunit=='in' && $wuapiunit=='s' ){
	$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*0.0393701;}
	//rain mm to inches uk
	if ($rainunit=='in' && $wuapiunit=='h' ){
	$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*0.0393701;}
	//rain mm to inches metric
	if ($rainunit=='in' && $wuapiunit=='m' ){
	$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*0.0393701;}
	//wu convert temps-rain period4 
	//metric to F
	if ($tempunit=='F' && $wuapiunit=='m' ){
	$wuskydayTempHigh4=($wuskydayTempHigh4*9/5)+32;}	
	// metric to F UK
	if ($tempunit=='F' && $wuapiunit=='h' ){
	$wuskydayTempHigh4=($wuskydayTempHigh4*9/5)+32;}	
	// ms non metric Scandinavia 
	if ($tempunit=='F' && $wuapiunit=='s'){
	$wuskydayTempHigh4=($wuskydayTempHigh4*9/5)+32;}	
	// non metric to c US
	if ($tempunit=='C' && $wuapiunit=='e' ){
	$wuskydayTempHigh4=($wuskydayTempHigh4-32)/1.8;}	
	//rain inches to mm
	if ($rainunit=='mm' && $wuapiunit=='e' ){
	$wuskydayprecipIntensity4=$wuskydayprecipIntensity4*25.4;}
	//rain mm to inches scandinavia
	if ($rainunit=='in' && $wuapiunit=='s' ){
	$wuskydayprecipIntensity4=$wuskydayprecipIntensity4*0.0393701;}
	//rain mm to inches uk
	if ($rainunit=='in' && $wuapiunit=='h' ){
	$wuskydayprecipIntensity4=$wuskydayprecipIntensity4*0.0393701;}
	//rain mm to inches metric
	if ($rainunit=='in' && $wuapiunit=='m' ){
	$wuskydayprecipIntensity4=$wuskydayprecipIntensity4*0.0393701;}
	//wu convert temps-rain period5 
	//metric to F
	if ($tempunit=='F' && $wuapiunit=='m' ){
	$wuskydayTempHigh5=($wuskydayTempHigh5*9/5)+32;}	
	// metric to F UK
	if ($tempunit=='F' && $wuapiunit=='h' ){
	$wuskydayTempHigh5=($wuskydayTempHigh5*9/5)+32;}	
	// ms non metric Scandinavia 
	if ($tempunit=='F' && $wuapiunit=='s'){
	$wuskydayTempHigh5=($wuskydayTempHigh5*9/5)+32;}	
	// non metric to c US
	if ($tempunit=='C' && $wuapiunit=='e' ){
	$wuskydayTempHigh5=($wuskydayTempHigh5-32)/1.8;}	
	//rain inches to mm
	if ($rainunit=='mm' && $wuapiunit=='e' ){
	$wuskydayprecipIntensity5=$wuskydayprecipIntensity5*25.4;}
	//rain mm to inches scandinavia
	if ($rainunit=='in' && $wuapiunit=='s' ){
	$wuskydayprecipIntensity5=$wuskydayprecipIntensity5*0.0393701;}
	//rain mm to inches uk
	if ($rainunit=='in' && $wuapiunit=='h' ){
	$wuskydayprecipIntensity5=$wuskydayprecipIntensity5*0.0393701;}
	//rain mm to inches metric
	if ($rainunit=='in' && $wuapiunit=='m' ){
	$wuskydayprecipIntensity5=$wuskydayprecipIntensity5*0.0393701;}
?>
<script src="js/jquery.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Weather Underground Forecast</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 10px;
  align-items: stretch;
  color:#f5f7fc
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
}
.grid > article img {
  max-width: 100%;
}

  
 .weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 blue{color:#01a4b4}orange{color:#ff832f}green{color:#84a927}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#e7963b}purple{color:#916392}
smalluvunit{font-size:.6rem;font-family:Arial,Helvetica,system;}
.almanac{font-size:1.25em;margin-top:30px;color:rgba(56, 56, 60, 1.000);width:12em}
metricsblue{color:#44a6b5;font-family:"weathertext2",Helvetica, Arial, sans-serif;background:rgba(86, 95, 103, 0.5);-webkit-border-radius:2px;border-radius:2px;align-items:center;justify-content:center;font-size:.9em;left:10px;padding:0 3px 0 3px;}
.w34convertrain{position:relative;font-size:.5em;top:9px;color:#c0c0c0;margin-left:5px}
.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#fff;font-size:12px;width:110px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-44px;margin-left:72px;padding:2px;line-height:10px;font-size:9px}
.actualt{position:relative;left:35px;-webkit-border-radius:2px;border-radius:2px;background:rgba(74, 99, 111, 0.1);font-family:Arial, Helvetica, sans-serif;width:7rem;height:0.8rem;font-size:0.8rem;color:#c0c0c0;
align-items:center;justify-content:center;margin-bottom:10px;top:-2px;display:flex}

.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.svgimage{background:rgba(0, 155, 171, 1.000);-webit-border-radius:2px;border-radius:2px;}
orange1{color:#aaa;}
darkskytemphi{margin-top:5px;font-size:14px;color:rgba(255,124,57,1);font-family:Arial;margin-left:10%}
darkskytemphi span{font-size:14px;color:#c5c5c5}
darkskytemplo{margin-top:5px;font-size:12px;color:#00a4b4;font-family:Arial}
darkskytemplo span{font-size:12px;color:#c5c5c5;font-family:Arial}
darkskysummary{font-size:12px;color:#c5c5c5;font-family:Arial;line-height:11px}
darkskywindspeed{font-size:12px;color:#c5c5c5;font-family:Arial;line-height:11px}
.greydesc{color:#c5c5c5;margin-left:40px;margin-top:-20px;position:absolute;font-size:0.85em}
.none{float:none;margin-top:10px;position:absolute}
spantemp{font-size:0.75em;color:#fff;font-family:weathertext2;}
.darkskyweekdayhome{postion:absolutue;text-align:center;padding:0;color:#fff;font-family:Arial;font-size:0.7rem;;margin:0;background:0;margin-bottom:12px;}
.darkskyforecasthome darkskytemphihome{font-size:0.7rem;color:#ff7c39;font-family:Arial;line-height:10px}
.darkskyforecasthome darkskytemphihome span{font-size::0.7rem;color:#ff7c39;font-family:Arial;line-height:10px}
.darkskyforecasthome darkskytemplohome{font-size:0.65rem;color:#ff7c39;font-family:Arial;line-height:15px;}
.darkskyforecasthome darkskytemplohome span{font-size:0.65rem;color:#01a4b5;font-family:Arial}

.darkskyforecastinghome img{position:relative;margin-top:-5px;margin-bottom:10px;}
.darkskywindgust{position:relative;font-family:weathertext2;margin-top:-54px;margin-left:155px}
darkskytempwindhome{font-size:0.8rem;color:#c0c0c0;font-family:Arial,Helvetica;line-height:auto;margin-top:20px;margin-bottom:10px}
.iconpos{margin-top:-15px;}
.valuehi{font-size:1.2em;padding:5px;margin-top:-15px;color:#fff;font-family:weathertext2;}
bluet,blueu{background:#01a4b5}yellowt,yellowu{background:#e6a141}oranget,orangeu{background:#d05f2d}greent{background:#90b12a}greenu{background:#565f67}redt,redu{background:#cd5245}purplet,purpleu{background:#b600b0}
bluet,yellowt,oranget,greent,redt,purplet{margin-top:-20px;-webkit-border-radius:2px;border-radius:2px;padding:2px;height:.9rem}
blueu,yellowu,orangeu,greenu,redu,purpleu{margin-top:-20px;-webkit-border-radius:2px;border-radius:2px;padding:1px;height:.7rem;color:#fff}
thunder{font-size:.95em;color:#aaa}summary{font-size:.9em;color:#aaa}blue1{color:#009bb4}value{font-size:.95em;color:#aaa}
</style>
<div class="weather34darkbrowser" url="Weather Underground Forecast"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>&nbsp;&nbsp <?php echo $wuskydayTime?> </div>        
    

 <?php                   		  			  
				  if ($wuskydaynight=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon.'.svg" width="40" class="iconpos"></img>';}
				  if ($wuskydaynight=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon.'.svg" width="40" class="iconpos"></img>';}
				  //summary icon
				  echo '<div class=greydesc>'. $wuskydesc.'</div><br>';	
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV>10){echo 	"<purpleu>".$wuskydayUV. '</purpleu><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>7){echo 	"<redu>".$wuskydayUV. '</redu><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>5){echo 	"<orangeu>".$wuskydayUV. '</orangeu><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>2){echo 	"<yellowu>".$wuskydayUV. '</yellowu><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>=0){echo 	"<greenu>".$wuskydayUV. '</greenu><grey> '.$wuskydayUVdesc;}				  
				  echo '</grey>				 
				   '.$lightningalert4;
				   if ($wuskythunder=="No thunder"){ echo ' <thunder>'.$wuskythunder.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder.'</orange1></thunder></grey>	 </value></darkskytemplohome>';      
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh,0);}
	else if($tempunit=='F' && $wuskydayTempHigh>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh,0);}
	else if($tempunit=='F' && $wuskydayTempHigh>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh,0);}
	else if($tempunit=='F' && $wuskydayTempHigh>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh,0);}
	else if($tempunit=='F' && $wuskydayTempHigh>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh,0);}
	else if($wuskydayTempHigh<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh,0);}
	else if($wuskydayTempHigh>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh1,0);}
	else if($wuskydayTempHigh>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh,0);}
	else if($wuskydayTempHigh>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh,0);}			  
	else if($wuskydayTempHigh>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh,0);}
	echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<br><br><br><darkskytempwindhome><summary>Summary</summary><span>'.$wuskydaysummary.' </darkskywindhome></span><br><br>';		
				  //snow		  
				  if ( $wuskydayacumm>0){echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm.'</blue1><value> cm</darkskywindhome><br></span2></precip>';}  				  
				  //rain
				  else if ($wuskydayPrecipType='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;<blue1>'.$wuskydayPrecipProb.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;       			  <blue1>'.$wuskydayPrecipProb.'</blue1>%</darkskywindhome></span2></precip><br>';}  
				  echo  '</div>';				  
?>
</article>  
 <article>  
   <div class=actualt>&nbsp;&nbsp <?php echo $wuskydayTime1 ;?></div>        
    <?php                   		  			  
				  if ($wuskydaynight1=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon1.'.svg" width="40" class="iconpos"></img>';}
				  if ($wuskydaynight1=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon1.'.svg" width="40" class="iconpos"></img>';}
				  //summary icon
				  echo '<div class=greydesc>'. $wuskydesc1.'</div><br>';	
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV1>10){echo 	"<purpleu>".$wuskydayUV1. '</purpleu><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>7){echo 	"<redu>".$wuskydayUV1. '</redu><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>5){echo 	"<orangeu>".$wuskydayUV1. '</orangeu><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>2){echo 	"<yellowu>".$wuskydayUV1. '</yellowu><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>=0){echo 	"<greenu>".$wuskydayUV1. '</greenu><grey> '.$wuskydayUVdesc1;}				  
				  echo '</grey>				 
				   '.$lightningalert4;
				   if ($wuskythunder1=="No thunder"){ echo ' <thunder>'.$wuskythunder1.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder1.'</orange1></thunder></grey>	 </value></darkskytemplohome>';      
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh1<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh1,0);}
	else if($tempunit=='F' && $wuskydayTempHigh1>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh1,0);}
	else if($tempunit=='F' && $wuskydayTempHigh1>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh1,0);}
	else if($tempunit=='F' && $wuskydayTempHigh1>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh1,0);}
	else if($tempunit=='F' && $wuskydayTempHigh1>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh1,0);}
	else if($wuskydayTempHigh1<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh1,0);}
	else if($wuskydayTempHigh1>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh1,0);}
	else if($wuskydayTempHigh1>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh1,0);}
	else if($wuskydayTempHigh1>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh1,0);}			  
	else if($wuskydayTempHigh1>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh1,0);}
	echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<br><br><br><darkskytempwindhome><summary>Summary</summary><span>'.$wuskydaysummary1.' </darkskywindhome></span><br><br>';		
				  //snow		  
				  if ( $wuskydayacumm1>0){echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm1.'</blue1><value> cm</darkskywindhome><br></span2></precip>';}  				  
				  //rain
				  else if ($wuskydayPrecipType1='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity1,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;<blue1>'.$wuskydayPrecipProb1.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType1='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity1,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;       			  <blue1>'.$wuskydayPrecipProb1.'</blue1>%</darkskywindhome></span2></precip><br>';}  
				  echo  '</div>';				  
?>






</article>  



  
   <article>  
   <div class=actualt>&nbsp;&nbsp <?php echo $wuskydayTime2 ;?></div>        
    
     <?php                   		  			  
				  if ($wuskydaynight2=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon2.'.svg" width="40" class="iconpos"></img>';}
				  if ($wuskydaynight2=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon2.'.svg" width="40" class="iconpos"></img>';}
				  //summary icon
				  echo '<div class=greydesc>'. $wuskydesc2.'</div><br>';	
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV2>10){echo 	"<purpleu>".$wuskydayUV2. '</purpleu><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>7){echo 	"<redu>".$wuskydayUV2. '</redu><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>5){echo 	"<orangeu>".$wuskydayUV2. '</orangeu><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>2){echo 	"<yellowu>".$wuskydayUV2. '</yellowu><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>=0){echo 	"<greenu>".$wuskydayUV2. '</greenu><grey> '.$wuskydayUVdesc2;}				  
				  echo '</grey>				 
				   '.$lightningalert4;
				   if ($wuskythunder2=="No thunder"){ echo ' <thunder>'.$wuskythunder2.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder2.'</orange1></thunder></grey>	 </value></darkskytemplohome>';      
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh2<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh2,0);}
	else if($tempunit=='F' && $wuskydayTempHigh2>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh2,0);}
	else if($tempunit=='F' && $wuskydayTempHigh2>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh2,0);}
	else if($tempunit=='F' && $wuskydayTempHigh2>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh2,0);}
	else if($tempunit=='F' && $wuskydayTempHigh2>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh2,0);}
	else if($wuskydayTempHigh2<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh2,0);}
	else if($wuskydayTempHigh2>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh2,0);}
	else if($wuskydayTempHigh2>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh2,0);}
	else if($wuskydayTempHigh2>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh2,0);}			  
	else if($wuskydayTempHigh2>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh2,0);}
	echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<br><br><br><darkskytempwindhome><summary>Summary</summary><span>'.$wuskydaysummary2.' </darkskywindhome></span><br><br>';		
				  //snow		  
				  if ( $wuskydayacumm2>0){echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm2.'</blue1><value> cm</darkskywindhome><br></span2></precip>';}  				  
				  //rain
				  else if ($wuskydayPrecipType2='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity2,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;<blue1>'.$wuskydayPrecipProb2.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType2='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity2,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;       			  <blue1>'.$wuskydayPrecipProb2.'</blue1>%</darkskywindhome></span2></precip><br>';}  
				  echo  '</div>';				  
?>



    
</article>  

 <article>  
   <div class=actualt>&nbsp;&nbsp <?php echo $wuskydayTime3 ;?></div>        
    
     <?php                   		  			  
				  if ($wuskydaynight3=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon3.'.svg" width="40" class="iconpos"></img>';}
				  if ($wuskydaynight3=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon3.'.svg" width="40" class="iconpos"></img>';}
				  //summary icon
				  echo '<div class=greydesc>'. $wuskydesc3.'</div><br>';	
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV3>10){echo 	"<purpleu>".$wuskydayUV3. '</purpleu><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>7){echo 	"<redu>".$wuskydayUV3. '</redu><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>5){echo 	"<orangeu>".$wuskydayUV3. '</orangeu><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>3){echo 	"<yellowu>".$wuskydayUV3. '</yellowu><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>=0){echo 	"<greenu>".$wuskydayUV3. '</greenu><grey> '.$wuskydayUVdesc3;}				  
				  echo '</grey>				 
				   '.$lightningalert4;
				   if ($wuskythunder3=="No thunder"){ echo ' <thunder>'.$wuskythunder3.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder3.'</orange1></thunder></grey>	 </value></darkskytemplohome>';      
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh3<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh3,0);}
	else if($tempunit=='F' && $wuskydayTempHigh3>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh3,0);}
	else if($tempunit=='F' && $wuskydayTempHigh3>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh3,0);}
	else if($tempunit=='F' && $wuskydayTempHigh3>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh3,0);}
	else if($tempunit=='F' && $wuskydayTempHigh3>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh3,0);}
	else if($wuskydayTempHigh3<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh3,0);}
	else if($wuskydayTempHigh3>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh3,0);}
	else if($wuskydayTempHigh3>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh3,0);}
	else if($wuskydayTempHigh3>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh32,0);}			  
	else if($wuskydayTempHigh3>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh3,0);}
	echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<br><br><br><darkskytempwindhome><summary>Summary</summary><span>'.$wuskydaysummary3.' </darkskywindhome></span><br><br>';		
				  //snow		  
				  if ( $wuskydayacumm3>0){echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm3.'</blue1><value> cm</darkskywindhome><br></span2></precip>';}  				  
				  //rain
				  else if ($wuskydayPrecipType3='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity3,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;<blue1>'.$wuskydayPrecipProb3.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType3='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity3,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;       			  <blue1>'.$wuskydayPrecipProb3.'</blue1>%</darkskywindhome></span2></precip><br>';}  
				  echo  '</div>';				  
?>



</article>  
  
 <article>  
   <div class=actualt>&nbsp;&nbsp <?php echo $wuskydayTime4 ;?></div>        
    
     <?php                   		  			  
				  if ($wuskydaynight4=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon4.'.svg" width="40" class="iconpos"></img>';}
				  if ($wuskydaynight4=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon4.'.svg" width="40" class="iconpos"></img>';}
				  //summary icon
				  echo '<div class=greydesc>'. $wuskydesc4.'</div><br>';	
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV4>10){echo 	"<purpleu>".$wuskydayUV4. '</purpleu><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>7){echo 	"<redu>".$wuskydayUV4. '</redu><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>5){echo 	"<orangeu>".$wuskydayUV4. '</orangeu><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>3){echo 	"<yellow>".$wuskydayUV4. '</yellowu><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>=0){echo 	"<greenu>".$wuskydayUV4. '</greenu><grey> '.$wuskydayUVdesc4;}				  
				  echo '</grey>				 
				   '.$lightningalert4;
				   if ($wuskythunder4=="No thunder"){ echo ' <thunder>'.$wuskythunder4.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder4.'</orange1></thunder></grey>	 </value></darkskytemplohome>';      
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh4<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh4,0);}
	else if($tempunit=='F' && $wuskydayTempHigh4>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh4,0);}
	else if($tempunit=='F' && $wuskydayTempHigh4>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh4,0);}
	else if($tempunit=='F' && $wuskydayTempHigh4>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh4,0);}
	else if($tempunit=='F' && $wuskydayTempHigh4>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh4,0);}
	else if($wuskydayTempHigh4<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh4,0);}
	else if($wuskydayTempHigh4>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh4,0);}
	else if($wuskydayTempHigh4>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh4,0);}
	else if($wuskydayTempHigh4>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh4,0);}			  
	else if($wuskydayTempHigh4>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh4,0);}
	echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<br><br><br><darkskytempwindhome><summary>Summary</summary><span>'.$wuskydaysummary4.' </darkskywindhome></span><br><br>';		
				  //snow		  
				  if ( $wuskydayacumm4>0){echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm4.'</blue1><value> cm</darkskywindhome><br></span2></precip>';}  				  
				  //rain
				  else if ($wuskydayPrecipType4='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity4,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;<blue1>'.$wuskydayPrecipProb4.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType4='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity4,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;       			  <blue1>'.$wuskydayPrecipProb4.'</blue1>%</darkskywindhome></span2></precip><br>';}  
				  echo  '</div>';				  
?>


</article> 
<article>  
   <div class=actualt>&nbsp;&nbsp <?php echo $wuskydayTime5 ;?></div>        
    
     <?php                   		  			  
				  if ($wuskydaynight5=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon5.'.svg" width="40" class="iconpos"></img>';}
				  if ($wuskydaynight5=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon5.'.svg" width="40" class="iconpos"></img>';}
				  //summary icon
				  echo '<div class=greydesc>'. $wuskydesc5.'</div><br>';	
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV5>10){echo 	"<purpleu>".$wuskydayUV5. '</purpleu><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>7){echo 	"<redu>".$wuskydayUV5. '</redu><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>5){echo 	"<orangeu>".$wuskydayUV5. '</orangeu><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>3){echo 	"<yellowu>".$wuskydayUV5. '</yellowu><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>=0){echo 	"<greenu>".$wuskydayUV5. '</greenu><grey> '.$wuskydayUVdesc5;}				  
				  echo '</grey>				 
				   '.$lightningalert4;
				   if ($wuskythunder5=="No thunder"){ echo ' <thunder>'.$wuskythunder5.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder5.'</orange1></thunder></grey>	 </value></darkskytemplohome>';      
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh5<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh5,0);}
	else if($tempunit=='F' && $wuskydayTempHigh5>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh5,0);}
	else if($tempunit=='F' && $wuskydayTempHigh5>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh5,0);}
	else if($tempunit=='F' && $wuskydayTempHigh5>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh5,0);}
	else if($tempunit=='F' && $wuskydayTempHigh5>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh5,0);}
	else if($wuskydayTempHigh5<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh5,0);}
	else if($wuskydayTempHigh5>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh5,0);}
	else if($wuskydayTempHigh5>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh5,0);}
	else if($wuskydayTempHigh5>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh5,0);}			  
	else if($wuskydayTempHigh5>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh5,0);}
	echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<br><br><br><darkskytempwindhome><summary>Summary</summary><span>'.$wuskydaysummary5.' </darkskywindhome></span><br><br>';		
				  //snow		  
				  if ( $wuskydayacumm5>0){echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm5.'</blue1><value> cm</darkskywindhome><br></span2></precip>';}  				  
				  //rain
				  else if ($wuskydayPrecipType5='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity5,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;<blue1>'.$wuskydayPrecipProb5.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType5='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity5,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;       			  <blue1>'.$wuskydayPrecipProb5.'</blue1>%</darkskywindhome></span2></precip><br>';}  
				  echo  '</div>';				  
?>
</article> 


  <article>
    <span style="font-size:8px;">
  <?php echo $info?> CSS/SVG/PHP scripts were developed by <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:8px;">weather34.com</a>  for use in the weather34 template &copy; 2015-<?php echo date('Y');?></span>
  
  </article> 
  <article>
    <span style="font-size:8px;">
  Data Forecast provide by <a href="https://www.wunderground.com/weather/api/" title="Weather Underground API" target="_blank">https://www.wunderground.com/weather/api/</a>
  
  </article> 
</main>