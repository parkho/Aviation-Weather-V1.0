<h3 style="margin-left: 80px; margin-top: 75px;">Aiviation weather</h3>
<div style="border: solid 3px; margin-bottom: 35px; padding: 25px; border-radius: 5px;" class="container">
	<h4 style="margin-left: 0px; margin-top: 0px;">Enter ICAO</h4>
	<div style="border: solid 1px; margin-bottom: 35px; padding: 25px; border-radius: 5px;">
		<form action="<?php echo url('/WTHR/metar');?>" method="post">
			<table style="margin-bottom: 0px;">
				<tr>
					<td style="vertical-align: middle;">ICAO:</td>
					<td style="vertical-align: middle;"><input type="text" name="icao" style="text-transform: uppercase; vertical-align: middle;" required="required"></td>
					<td style="vertical-align: middle;"><input type="submit" value="send" class="button alt" style="text-transform: uppercase; vertical-align: middle;" class="button alt"></td>
				</tr>
			</table>
		</form>

	</div>
	<h4 style="margin-left: 0px; margin-top: 0px;">Results</h4>
	<div style="border: solid 1px; margin-bottom: 35px; padding: 25px; border-radius: 5px;" id="wr">
			<table style="margin-bottom: 0px;">
				<tr>
					<td style="vertical-align: top;" colspan="2"><img src="<?php echo fileurl('lib/images/radar.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $metar;?></td>
				</tr>
				<tr>
					<td style="vertical-align: middle;"><img src="<?php echo fileurl('lib/images/alt.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $altimeter;?> inHg</td>
					<td style="vertical-align: middle;"><img src="<?php echo fileurl('lib/images/meter.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $temperature.$sky1;?>&deg; C / DP <?php echo $dewpoint;?>&deg; C</td>
				</tr>
				<tr>
					<td style="vertical-align: middle;"><img src="<?php echo fileurl('lib/images/law.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $flightrules;?></td>
					<td style="vertical-align: middle;"><img src="<?php echo fileurl('lib/images/plane.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $station;?> (<?php echo $airport->name;?>) Lat/Lng : <?php echo $lat;?>/<?php echo $lng;?> Elevation: <?php echo $elevation;?> M
					</td>
					
				</tr>
				<tr>
					<td style="vertical-align: middle;"><img src="<?php echo fileurl('lib/images/time.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $time;?></td>
					<td style="vertical-align: middle;"><img src="<?php echo fileurl('lib/images/visible.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $visibility.$sky1;?> Miles</td>
				</tr>
				<tr>
					<td style="vertical-align: middle;"><img src="<?php echo fileurl('lib/images/vane.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $winddir;?> &deg;</td>
					<td style="vertical-align: middle;"><img src="<?php echo fileurl('lib/images/wind.png') ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $windspd;?> kt</td>
				</tr>
			</table>

	</div>
</div>