<?php
/*
This file is part of Project Tamil.

Copyright (C) 2008  Balachandar Muruganantham

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
$week = Array("Sat" => "சனி",
				"Sun"=>"ஞாயிறு",
				"Mon"=>"திங்கள்",
				"Tue"=>"செவ்வாய்",
				"Wed"=>"புதன்",
				"Thu"=>"வியாழன்",
				"Fri"=>"வெள்ளி"
				);

$month = Array("Jan" => "சனவரி",
					 "Feb" => "பிப்ரவரி",
					 "Mar" => "மார்ச்",
					 "Apr" => "ஏப்ரல்",
					 "May" => "மே",
					 "Jun" => "ஜூன்",
					 "Jul" => "ஜூலை",
					 "Aug" => "ஆகஸ்ட்",
					 "Sep" => "செப்டம்பர்",
					 "Oct" => "அக்டொபர்",
					 "Nov" => "நவம்பர்",
					 "Dec" => "டிசம்பர்"
);
switch($_GET["format"]){
	case "js":
		echo 'document.write(\'<table style="background: url(http://api.ulagam.net/images/cal-blank-128x128.png) no-repeat; font-family:arial,helvetica,verdana,sans-serif;width:128px;height:128px;color:#fff;text-align:left; border:0px"   border="0" cellpadding="2"><caption style="color:#000;font-size:12px;"><b>தமிழ் நாட்காட்டி</b></caption><tr><td style="text-align: center;font-weight: bold;font-size: 18px;color:#fff;">'.$week[date("D")].'</td></tr><tr><td style="text-align: center;font-weight: bold;font-size: 40px;color:#000;">'.date("d").'</td></tr><tr><td style="text-align: center;font-weight: bold;font-size: 18px;color:#000;">'.$month[date("M")].'</td></tr><tr><td align="center"><a href="http://ulagam.net/%e0%ae%9a%e0%af%87%e0%ae%b5%e0%af%88%e0%ae%95%e0%ae%b3%e0%af%8d/" target="_blank" style="font-family: arial, helvetica, sans-serif;text-align: center;padding-top: 15px;text-decoration:none;font-size: 10px;width: 128px;font-weight: normal;">தமிழ் நாட்காட்டி widget by உலகம்.net</a></td></tr></table>\');';
	break;
	default:
		echo '<table style="background: url(http://api.ulagam.net/images/cal-blank-128x128.png) no-repeat; font-family:arial,helvetica,verdana,sans-serif;width:128px;height:128px;color:#fff;text-align:left; border:0px"   border="0" cellpadding="2"><caption style="color:#000;font-size:12px;"><b>தமிழ் நாட்காட்டி</b></caption><tr><td style="text-align: center;font-weight: bold;font-size: 18px;color:#fff;">'.$week[date("D")].'</td></tr><tr><td style="text-align: center;font-weight: bold;font-size: 40px;color:#000;">'.date("d").'</td></tr><tr><td style="text-align: center;font-weight: bold;font-size: 18px;color:#000;">'.$month[date("M")].'</td></tr><tr><td align="center"><a href="http://ulagam.net/%e0%ae%9a%e0%af%87%e0%ae%b5%e0%af%88%e0%ae%95%e0%ae%b3%e0%af%8d/" target="_blank" style="font-family: arial, helvetica, sans-serif;text-align: center;padding-top: 15px;text-decoration:none;font-size: 10px;width: 128px;font-weight: normal;">தமிழ் நாட்காட்டி widget by உலகம்.net</a></td></tr></table>';
		break;	}
?>