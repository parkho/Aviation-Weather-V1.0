<h3>Aiviation weather</h3>
<div>
	<h4>Enter ICAO</h4>
	<div>
		<form action="<?php echo url('/WTHR/metar');?>" method="post">
			<table>
				<tr>
					<td>ICAO:</td>
					<td><input type="text" name="icao" style="text-transform: uppercase;" required="required"></td>
					<td><input type="submit" value="send" style="text-transform: uppercase;"></td>
				</tr>
			</table>
		</form>

	</div>
	<h4>Results</h4>
	<div>
			<table>
				<tr>
					<td colspan="2"><img src="<?php echo fileurl('lib/images/radar.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $metar;?></td>
				</tr>
				<tr>
					<td><img src="<?php echo fileurl('lib/images/alt.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Altimeter <?php echo $altimeter;?> inHg</td>
					<td><img src="<?php echo fileurl('lib/images/meter.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature <?php echo $temperature.$sky1;?>&deg; C / Dew Point <?php echo $dewpoint;?>&deg; C</td>
				</tr>
				<tr>
					<td><img src="<?php echo fileurl('lib/images/law.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flight Rule <?php echo $flightrules;?></td>
					<td><img src="<?php echo fileurl('lib/images/plane.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Station 
					<?php echo $stationid;?> (<?php echo $stationname;?>/<?php echo $stationcountry ;?>) Lat/Lng : <?php echo $lat;?>/<?php echo $lng;?> Elevation: <?php echo $elevation;?> M
					</td>
					
				</tr>
				<tr>
					<td><img src="<?php echo fileurl('lib/images/time.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $time;?></td>
					<td><img src="<?php echo fileurl('lib/images/visible.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visibility <?php echo $visibility.$sky1;?> Miles</td>
				</tr>
				<tr>
					<td><img src="<?php echo fileurl('lib/images/compass.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wind Direction From <?php echo $winddir;?> &deg;</td>
					<td><img src="<?php echo fileurl('lib/images/wind.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wind Speed <?php echo $windspd;?> kt</td>
				</tr>
				<tr>
					<td colspan="2">
						<img src="<?php echo fileurl('lib/images/clouds.png') ;?>"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?php 
							if(!$skycondition3 OR !$skycondition4)
							{
								echo $skycondition0.' Clouds At '.$skycondition1.' Feet'; 
							}
							else
							{
								echo $skycondition0.' Clouds At '.$skycondition1.' Feet / '.$skycondition3.' Clouds At '.$skycondition4.' Feet';
							}
						?>
					
							
					</strong>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<ul>
						<li>SKC = No cloud/Sky clear</li>
						<li>CLR = No clouds below 12,000 ft (3,700 m) (U.S.) or 25,000 ft (7,600 m) (Canada)</li>
						<li>NSC = No (nil) significant cloud</li>
						<li>FEW = "Few" = 1 to 2 oktas</li>
						<li>SCT = "Scattered" = 3 to 4 oktas</li>
						<li>BKN = "Broken" = 5 to 7 oktas</li>
						<li>OVC = "Overcast" = 8 oktas, i.e., full cloud coverage</li>
						<li>VV = Clouds cannot be seen because of fog or heavy precipitation, so vertical visibility is given instead.</li>
					</ul>
					</td>
				</tr>
			</table>

	</div>
</div>