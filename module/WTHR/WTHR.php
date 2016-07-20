<?php
class WTHR extends CodonModule
	{
		public function index() 
			{
                $this->show('weather/weather.php');
			}
	
		public function metar()
			{
				$icao = DB::escape($_POST['icao']);
				$url = 'https://www.aviationweather.gov/adds/dataserver_current/httpparam?dataSource=metars&requestType=retrieve&format=xml&stationString='.$icao.'&hoursBeforeNow=1';
				$xml = simplexml_load_file($url); 
				$metar = $xml->data->METAR->raw_text;
				$altimeter = $xml->data->METAR->altim_in_hg;
				$dewpoint = $xml->data->METAR->dewpoint_c;
				$flightrules = $xml->data->METAR->flight_category;
				$station = $xml->data->METAR->station_id;
				$temperature = $xml->data->METAR->temp_c;
				$time = $xml->data->METAR->observation_time;
				$visibility = $xml->data->METAR->visibility_statute_mi;
				$winddir = $xml->data->METAR->wind_dir_degrees;
				$windspd = $xml->data->METAR->wind_speed_kt;
				$lat = $xml->data->METAR->latitude;
				$lng = $xml->data->METAR->longitude;
				$sky1 = $xml->data->METAR->sky_condition[1]->sky_cover;
				//$sky2 = $xml->data->METAR->sky_condition[1];
				$elevation = $xml->data->METAR->elevation_m;
				$sql="SELECT * FROM phpvms_airports WHERE icao = '$station'";
				$airport = DB::get_row($sql);
				
				$this->set('metar', $metar);
				$this->set('altimeter', $altimeter);
				$this->set('dewpoint', $dewpoint);
				$this->set('flightrules', $flightrules);
				$this->set('airport', $airport);
				$this->set('temperature', $temperature);
				$this->set('time', $time);
				$this->set('visibility', $visibility);
				$this->set('winddir', $winddir);
				$this->set('windspd', $windspd);
				$this->set('lat', $lat);
				$this->set('lng', $lng);
				$this->set('elevation', $elevation);
				$this->set('sky1', $sky1);
				//$this->set('sky2', $sky2);
				$this->set('station', $station);
				
				$this->render('weather/weather.php');
			}
	}
?>
