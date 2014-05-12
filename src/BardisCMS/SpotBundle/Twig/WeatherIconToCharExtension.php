<?php

/*
 * Spot Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\SpotBundle\Twig;

class WeatherIconToCharExtension extends \Twig_Extension {

	public function getFilters() {
		return array(
			new \Twig_SimpleFilter('weatherIconToChar', array($this, 'weatherIconToCharFilter')),
		);
	}

	public function weatherIconToCharFilter($value) {
		
		$iconFileName = substr($value[0]['value'], strrpos($value[0]['value'], '/') + 1);
		$iconFileName = substr($iconFileName, 0, -4);

		switch ($iconFileName) {

			case 'wsymbol_0012_heavy_snow_showers':
				$stringValue = ',';
				break;

			case 'wsymbol_0028_heavy_snow_showers_night':
				$stringValue = '<';
				break;
			
			case 'wsymbol_0016_thundery_showers':
				$stringValue = '0';
				break;
			
			case 'wsymbol_0032_thundery_showers_night':
				$stringValue = '@';
				break;
			
			case 'wsymbol_0024_thunderstorms':
				$stringValue = '8';
				break;
			
			case 'wsymbol_0040_thunderstorms_night':
				$stringValue = 'H';
				break;
			
			case 'wsymbol_0021_cloudy_with_sleet':
				$stringValue = '5';
				break;
			
			case 'wsymbol_0037_cloudy_with_sleet_night':
				$stringValue = 'E';
				break;
			
			case 'wsymbol_0013_sleet_showers':
				$stringValue = '-';
				break;
			
			case 'wsymbol_0029_sleet_showers_night':
				$stringValue = '=';
				break;
			
			case 'wsymbol_0011_light_snow_showers':
				$stringValue = '+';
				break;
			
			case 'wsymbol_0027_light_snow_showers_night':
				$stringValue = ';';
				break;
			
			case 'wsymbol_0018_cloudy_with_heavy_rain':
				$stringValue = '';
				break;
			
			case 'wsymbol_0034_cloudy_with_heavy_rain_night':
				$stringValue = '';
				break;
			
			case 'wsymbol_0010_heavy_rain_showers':
				$stringValue = '*';
				break;
			
			case 'wsymbol_0026_heavy_rain_showers_night':
				$stringValue = ':';
				break;
			
			case 'wsymbol_0009_light_rain_showers':
				$stringValue = ')';
				break;
			
			case 'wsymbol_0025_light_rain_showers_night':
				$stringValue = '9';
				break;
			
			case 'wsymbol_0020_cloudy_with_heavy_snow':
				$stringValue = '4';
				break;
			
			case 'wsymbol_0036_cloudy_with_heavy_snow_night':
				$stringValue = 'D';
				break;
			
			case 'wsymbol_0019_cloudy_with_light_snow':
				$stringValue = '3';
				break;
			
			case 'wsymbol_0035_cloudy_with_light_snow_night':
				$stringValue = 'C';
				break;
			
			case 'wsymbol_0017_cloudy_with_light_rain':
				$stringValue = '1';
				break;
			
			case 'wsymbol_0025_light_rain_showers_night':
				$stringValue = 'A';
				break;
			
			case 'wsymbol_0007_fog':
				$stringValue = "'";
				break;
			
			case 'wsymbol_0006_mist':
				$stringValue = '&';
				break;
			
			case 'wsymbol_0004_black_low_cloud':
				$stringValue = '$';
				break;
			
			case 'wsymbol_0003_white_cloud':
				$stringValue = '#';
				break;
			
			case 'wsymbol_0002_sunny_intervals':
				$stringValue = '"';
				break;
			
			case 'wsymbol_0008_clear_sky_night':
				$stringValue = '(';
				break;
			
			case 'wsymbol_0001_sunny':
				$stringValue = '!';
				break;

			default:
				$stringValue = '|';
		}

		return $stringValue;
	}

	public function getName() {
		return 'weatherIconToChar_extension';
	}

}
