<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

        <title>Ashesi Facilities(LaunchPad)</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="10101" content="10101">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<link rel="manifest" href="images/site.webmanifest">
		<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="images/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-config" content="images/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
        
        <!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/vertical-rhythm.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/magnific-popup.css">      
	<meta charset="UTF-8">
	<title>Personal info</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
	  
<style>
html *
{
   font-size: 20px;
}

body {
  background-color: #1C2C40;
}
table.calendar {
	margin: auto;
  	width: 50%;
  	padding: 10px;
	border-left: 1px solid #999;
}
tr.calendar-row {
}
td.calendar-day {
	min-height: 80px;
	font-size: 11px;
	position: relative;
	vertical-align: top;
	color: white;

}
* html div.calendar-day {
	height: 80px;
}
td.calendar-day:hover {
	background: #eceff5;
}
td.calendar-day-np {
	background: #eee;
	min-height: 80px;
}
* html div.calendar-day-np {
	height: 80px;
}
td.calendar-day-head {
	background: #ccc;
	font-weight: bold;
	text-align: center;
	width: 120px;
	padding: 5px;
	border-bottom: 1px solid #999;
	border-top: 1px solid #999;
	border-right: 1px solid #999;
}
div.day-number {
	background: #999;
	padding: 5px;
	color: #fff;
	font-weight: bold;
	float: right;
	margin: -5px -5px 0 0;
	width: 20px;
	text-align: center;
}
td.calendar-day, td.calendar-day-np {
	width: 120px;
	padding: 5px;
	border-bottom: 1px solid #999;
	border-right: 1px solid #999;
}
</style>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<!--<script src="lang/datepicker-fi.js"></script>-->
<script>
    $(function() {
	<!--$.datepicker.setDefaults($.datepicker.regional['fi']);-->
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
	  regional: "fi",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });  
</script>
</head>


	            <!-- Navigation panel -->
            <nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="index.html" class="logo">
                            <img src="images/logo-white.png" alt="launchpad Ashesi" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#facilities">Book Now</a></li>                          
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navigation panel -->

<div align="center" style="color: white; font-family: 'Patua One', cursive;" >
<table cellpadding="5" width="800" align="center" cellpadding="60" style="color: white; font-family: 'Patua One', cursive;
  margin: auto;
  width: 50%;
  border: 3px yellow;
  padding: 10px;
  text-align: center;
">
	<tr>
		<td valign="top">
		<form action="book.php" method="post">
			<h1 style="font-size: 40px;">Make booking</h1>

						<p style="font-size: 40px;">
				LECTURE HALLS
			</p>
			<p><input checked="checked" name="item" type="radio" value="RM 116" /> RM 116
			| <input name="item" type="radio" value="RM 115" />RM 115
			<input name="item" type="radio" value="RM 216" />RM 216 
			| <input name="item" type="radio" value="RM 217" />RM 217 | 
			<input name="item" type="radio" value="RM 218" />RM 218</p>

			<p><input checked="checked" name="item" type="radio" value="RM 221" />RM 221 
			| <input name="item" type="radio" value="RM 222 " />RM 222 
			| <input name="item" type="radio" value="RM 202" />RM 202 | 
			<input name="item" type="radio" value="RM 204" />RM 204</p>


			<p><input checked="checked" name="item" type="radio" value="RB 100" />RB 100
			| <input name="item" type="radio" value="RB 115" />RB 115
			| <input name="item" type="radio" value="RB 116" />RB 216 | 
			<input name="item" type="radio" value="RB 100" />RB 100</p>

			<br>
			<p style="font-size: 40px;">
				CONFERENCE/SEMINAR ROOMS
			</p>
			| <input name="item" type="radio" value="RB 206" />RM 206
			|<input name="item" type="radio" value="RB 209" />RB 209
			| <input name="item" type="radio" value="RM 207A" />RM 207A | 
			<input name="item" type="radio" value="RM 207B" />RM 207B</p>


				<table style="width: 70%; color: black;">
				<tr>
					<td style="color: white;">Name:</td>
					<td> <input maxlength="50" name="name" required="" type="text" size="100%"  align="left" /></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td style="color: white;">Phone:</td>
					<td>
			<input maxlength="20" name="phone" required="" type="text" size="100%"  align="left" /></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<table>

				<tr>
					<td style="color: white;">Reservation time:</td>
					<td>
			<input id="from" name="start_day" required="" type="text" style="color: black;" /></td>
					<td>-</td>
					<td><input id="to" name="end_day" required="" type="text" style="color: black;" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td> <select name="start_hour" style="color: black;">
			<option selected="selected">00</option>
			<option>01</option>
			<option>02</option>
			<option>03</option>
			<option>04</option>
			<option>05</option>
			<option>06</option>
			<option>07</option>
			<option>08</option>
			<option>09</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			</select>:<select name="start_minute" style="color: black;">
			<option selected="selected" >00</option>
			<option>30</option>
			</select></td>
					<td>&nbsp;</td>
					<td><select name="end_hour" style="color: black;">
			<option>00</option>
			<option>01</option>
			<option>02</option>
			<option>03</option>
			<option>04</option>
			<option>05</option>
			<option>06</option>
			<option>07</option>
			<option>08</option>
			<option>09</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option selected="selected">23</option>
			</select>:<select name="end_minute" style="color: black;">
			<option>00</option>
			<option selected="selected">30</option>
			</select></td>
				</tr>
				</table>
			</table>
			<p>
			<input name="book" type="submit" value="Book" style="color: black;" />
		</form>
			
<h1 style="font-size: 40px;">Cancel booking</h1>
		<form action="cancel.php" method="post">
			<p></p>
			<h3>ID:</h3> <input name="id" required="" type="text" size="100%"  align="left"/><br />
			<p>
			<p></p>
			<p><input name="cancel" type="submit" value="Cancel" style="color: black;" size="100%"  align="left"/></p>

		</td>
	</tr>
</table>

</div>
<?php

echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';
/* draws a calendar */

function draw_calendar($month,$year){

	include 'config.php';

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,  $dbname);

	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
			$calendar.= str_repeat('<p> </p>',2);
			$current_epoch = mktime(0,0,0,$month,$list_day,$year);
			
			$sql = "SELECT * FROM $tablename WHERE $current_epoch BETWEEN start_day AND end_day";
						
			$result = mysqli_query($conn, $sql);
    		
    		if (mysqli_num_rows($result) > 0) {
    			// output data of each row
    			while($row = mysqli_fetch_assoc($result)) {
					if($row["canceled"] == 1) $calendar .= "<font color=\"grey\"><s>";
    				$calendar .= "</b><br>ID: " . $row["id"] . "<br>" . $row["name"] . "<br>" ."<b>" . $row["item"] . "</b>"  . "<br>" . $row["name"] . "<br>" . $row["phone"] . "<br>";
    				if($current_epoch == $row["start_day"] AND $current_epoch != $row["end_day"]) {
    					$calendar .= "Booking starts: " . sprintf("%02d:%02d", $row["start_time"]/60/60, ($row["start_time"]%(60*60)/60)) . "<br><hr><br>";
    				}
    				if($current_epoch == $row["start_day"] AND $current_epoch == $row["end_day"]) {
    					$calendar .= "Booking starts: " . sprintf("%02d:%02d", $row["start_time"]/60/60, ($row["start_time"]%(60*60)/60)) . "<br>";
    				}
    				if($current_epoch == $row["end_day"]) {
    					$calendar .= "Booking ends: " . sprintf("%02d:%02d", $row["end_time"]/60/60, ($row["end_time"]%(60*60)/60)) . "<br><hr><br>";
    				}
    				if($current_epoch != $row["start_day"] AND $current_epoch != $row["end_day"]) {
	    				$calendar .= "Booking: 24h<br><hr><br>";
	    			}
					if($row["canceled"] == 1) $calendar .= "</s></font>";
    			}
			} else {
    			$calendar .= "No bookings";
			}
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	mysqli_close($conn);
	
	/* all done, return result */
	return $calendar;
}

include 'config.php';

$d = new DateTime(date("Y-m-d"));
echo '<h3 align="center" style="color: white;">' . $months[$d->format('n')-1] . ' ' . $d->format('Y') . '</h3>';
echo draw_calendar($d->format('m'),$d->format('Y'));

$d->modify( 'first day of next month' );
echo '<h3 align="center" style="color: white;" >' . $months[$d->format('n')-1] . ' ' . $d->format('Y') . '</h3>';
echo draw_calendar($d->format('m'),$d->format('Y'));

$d->modify( 'first day of next month' );
echo '<h3 align="center" style="color: white;">' . $months[$d->format('n')-1] . ' ' . $d->format('Y') . '</h3>';
echo draw_calendar($d->format('m'),$d->format('Y'));

?>



            <!-- Fo0ter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                        <a href="#top"><img src="images/new logo.png" width="78" height="36" alt="" /></a>
                    </div>
                    <!-- End Footer Logo -->
                    
                    <!-- Social Links -->
                    
                    <!-- End Social Links -->  
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                             LAUNCHPAD c.2019
                        </div>
                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            Made with love for great people.
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Foter -->

</body>

</body>


     

</html>
