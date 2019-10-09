<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="train.css">
</head>
<body>
	<center><em><h1>Train Chart</h1></em></center>
	<form method="get" action="train_out.php">
<table class="t1" >
	<tr>
		<th>TIME SLOT</th>
		<th></th>
		<th>MONDAY</th>
		<th>TUEDSDAY</th>
		<th>WEDNESDAY</th>
		<th>THURSDAY</th>
		<th>FRIDAY</th>
		<th>SATURDAY</th>
		<th>SUNDAY</th>
	</tr>
	<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
	<tr>
		
		<td><center>4:00 - 8:00</center></td>
		<td id="a1"></td>
		<td>
			<div> 
			
			<table>
				<tr>Arrival time :<select name="arr_time_mon1"><option>4:00</option><option>4:15</option><option>4:30</option><option>4:45</option><option>5:00</option><option>5:15</option><option>5:30</option><option>5:45</option><option>6:00</option><option>6:15</option><option>6:30</option><option>6:45</option><option>7:00</option><option>7:15</option><option>7:30</option><option>7:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_mon1"></tr><br>
				<tr>Platform No.:<select name="plat_mon1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_mon1"></tr><br>
				<tr>To:<input type="text" name="to_mon1"></tr><br>
			</table>
		
	</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_tue1"><option>4:00</option><option>4:15</option><option>4:30</option><option>4:45</option><option>5:00</option><option>5:15</option><option>5:30</option><option>5:45</option><option>6:00</option><option>6:15</option><option>6:30</option><option>6:45</option><option>7:00</option><option>7:15</option><option>7:30</option><option>7:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_tue1"></tr><br>
				<tr>Platform No.:<select name="plat_tue1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_tue1"></tr><br>
				<tr>To :<input type="text" name="to_tue1"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_wed1"><option>4:00</option><option>4:15</option><option>4:30</option><option>4:45</option><option>5:00</option><option>5:15</option><option>5:30</option><option>5:45</option><option>6:00</option><option>6:15</option><option>6:30</option><option>6:45</option><option>7:00</option><option>7:15</option><option>7:30</option><option>7:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_wed1"></tr><br>
				<tr>Platform No.:<select name="plat_wed1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_wed1"></tr><br>
				<tr>To :<input type="text" name="to_wed1"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_thur1"><option>4:00</option><option>4:15</option><option>4:30</option><option>4:45</option><option>5:00</option><option>5:15</option><option>5:30</option><option>5:45</option><option>6:00</option><option>6:15</option><option>6:30</option><option>6:45</option><option>7:00</option><option>7:15</option><option>7:30</option><option>7:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_thur1"></tr><br>
				<tr>Platform No.:<select name="plat_thur1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_thur1"></tr><br>
				<tr>To :<input type="text" name="to_thur1"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_fri1"><option>4:00</option><option>4:15</option><option>4:30</option><option>4:45</option><option>5:00</option><option>5:15</option><option>5:30</option><option>5:45</option><option>6:00</option><option>6:15</option><option>6:30</option><option>6:45</option><option>7:00</option><option>7:15</option><option>7:30</option><option>7:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_fri1"></tr><br>
				<tr>Platform No.:<select name="plat_fri1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_fri1"></tr><br>
				<tr>To :<input type="text" name="to_fri1"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sat1"><option>4:00</option><option>4:15</option><option>4:30</option><option>4:45</option><option>5:00</option><option>5:15</option><option>5:30</option><option>5:45</option><option>6:00</option><option>6:15</option><option>6:30</option><option>6:45</option><option>7:00</option><option>7:15</option><option>7:30</option><option>7:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sat1"></tr><br>
				<tr>Platform No.:<select name="plat_sat1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sat1"></tr><br>
				<tr>To :<input type="text" name="to_sat1"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
		<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sun1"><option>4:00</option><option>4:15</option><option>4:30</option><option>4:45</option><option>5:00</option><option>5:15</option><option>5:30</option><option>5:45</option><option>6:00</option><option>6:15</option><option>6:30</option><option>6:45</option><option>7:00</option><option>7:15</option><option>7:30</option><option>7:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sun1"></tr><br>
				<tr>Platform No.:<select name="plat_sun1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sun1"></tr><br>
				<tr>To :<input type="text" name="to_sun1"></tr><br>
				
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td><center>8:00 - 12:00</center></td>
		<td id="a1"></td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_mon2"><option>8:00</option><option>8:15</option><option>8:30</option><option>8:45</option><option>9:00</option><option>9:15</option><option>9:30</option><option>9:45</option><option>10:00</option><option>10:15</option><option>10:30</option><option>10:45</option><option>11:00</option><option>11:15</option><option>11:30</option><option>11:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_mon2"></tr><br>
				<tr>Platform No.:<select name="plat_mon2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_mon2"></tr><br>
				<tr>To:<input type="text" name="to_mon2"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_tue2"><option>8:00</option><option>8:15</option><option>8:30</option><option>8:45</option><option>9:00</option><option>9:15</option><option>9:30</option><option>9:45</option><option>10:00</option><option>10:15</option><option>10:30</option><option>10:45</option><option>11:00</option><option>11:15</option><option>11:30</option><option>11:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_tue2"></tr><br>
				<tr>Platform No.:<select name="plat_tue2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_tue2"></tr><br>
				<tr>To :<input type="text" name="to_tue2"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_wed2"><option>8:00</option><option>8:15</option><option>8:30</option><option>8:45</option><option>9:00</option><option>9:15</option><option>9:30</option><option>9:45</option><option>10:00</option><option>10:15</option><option>10:30</option><option>10:45</option><option>11:00</option><option>11:15</option><option>11:30</option><option>11:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_wed2"></tr><br>
				<tr>Platform No.:<select name="plat_wed2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_wed2"></tr><br>
				<tr>To :<input type="text" name="to_wed2"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_thur2"><option>8:00</option><option>8:15</option><option>8:30</option><option>8:45</option><option>9:00</option><option>9:15</option><option>9:30</option><option>9:45</option><option>10:00</option><option>10:15</option><option>10:30</option><option>10:45</option><option>11:00</option><option>11:15</option><option>11:30</option><option>11:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_thur2"></tr><br>
				<tr>Platform No.:<select name="plat_thur2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_thur2"></tr><br>
				<tr>To :<input type="text" name="to_thur2"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_fri2"><option>8:00</option><option>8:15</option><option>8:30</option><option>8:45</option><option>9:00</option><option>9:15</option><option>9:30</option><option>9:45</option><option>10:00</option><option>10:15</option><option>10:30</option><option>10:45</option><option>11:00</option><option>11:15</option><option>11:30</option><option>11:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_fri2"></tr><br>
				<tr>Platform No.:<select name="plat_fri2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_fri2"></tr><br>
				<tr>To :<input type="text" name="to_fri2"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sat2"><option>8:00</option><option>8:15</option><option>8:30</option><option>8:45</option><option>9:00</option><option>9:15</option><option>9:30</option><option>9:45</option><option>10:00</option><option>10:15</option><option>10:30</option><option>10:45</option><option>11:00</option><option>11:15</option><option>11:30</option><option>11:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sat2"></tr><br>
				<tr>Platform No.:<select name="plat_sat2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sat2"></tr><br>
				<tr>To :<input type="text" name="to_sat2"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sun2"><option>8:00</option><option>8:15</option><option>8:30</option><option>8:45</option><option>9:00</option><option>9:15</option><option>9:30</option><option>9:45</option><option>10:00</option><option>10:15</option><option>10:30</option><option>10:45</option><option>11:00</option><option>11:15</option><option>11:30</option><option>11:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sun2"></tr><br>
				<tr>Platform No.:<select name="plat_sun2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sun2"></tr><br>
				<tr>To :<input type="text" name="to_sun2"></tr><br>
				
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td><center>12:00 - 16:00</center></td>
		<td id="a1"></td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_mon3"><option>12:00</option><option>12:15</option><option>12:30</option><option>12:45</option><option>13:00</option><option>13:15</option><option>13:30</option><option>13:45</option><option>14:00</option><option>14:15</option><option>14:30</option><option>14:45</option><option>15:00</option><option>15:15</option><option>15:30</option><option>15:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_mon3"></tr><br>
				<tr>Platform No.:<select name="plat_mon3"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_mon3"></tr><br>
				<tr>To:<input type="text" name="to_mon3"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_tue3"><option>12:00</option><option>12:15</option><option>12:30</option><option>12:45</option><option>13:00</option><option>13:15</option><option>13:30</option><option>13:45</option><option>14:00</option><option>14:15</option><option>14:30</option><option>14:45</option><option>15:00</option><option>15:15</option><option>15:30</option><option>15:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_tue3"></tr><br>
				<tr>Platform No.:<select name="plat_tue3"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_tue3"></tr><br>
				<tr>To :<input type="text" name="to_tue3"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_wed3"><option>12:00</option><option>12:15</option><option>12:30</option><option>12:45</option><option>13:00</option><option>13:15</option><option>13:30</option><option>13:45</option><option>14:00</option><option>14:15</option><option>14:30</option><option>14:45</option><option>15:00</option><option>15:15</option><option>15:30</option><option>15:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_wed3"></tr><br>
				<tr>Platform No.:<select name="plat_wed3"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_wed3"></tr><br>
				<tr>To :<input type="text" name="to_wed3"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_thur3"><option>12:00</option><option>12:15</option><option>12:30</option><option>12:45</option><option>13:00</option><option>13:15</option><option>13:30</option><option>13:45</option><option>14:00</option><option>14:15</option><option>14:30</option><option>14:45</option><option>15:00</option><option>15:15</option><option>15:30</option><option>15:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_thur3"></tr><br>
				<tr>Platform No.:<select name="plat_thur3"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_thur3"></tr><br>
				<tr>To :<input type="text" name="to_thur3"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_fri3"><option>12:00</option><option>12:15</option><option>12:30</option><option>12:45</option><option>13:00</option><option>13:15</option><option>13:30</option><option>13:45</option><option>14:00</option><option>14:15</option><option>14:30</option><option>14:45</option><option>15:00</option><option>15:15</option><option>15:30</option><option>15:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_fri3"></tr><br>
				<tr>Platform No.:<select name="plat_fri3"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_fri3"></tr><br>
				<tr>To :<input type="text" name="to_fri3"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sat3"><option>12:00</option><option>12:15</option><option>12:30</option><option>12:45</option><option>13:00</option><option>13:15</option><option>13:30</option><option>13:45</option><option>14:00</option><option>14:15</option><option>14:30</option><option>14:45</option><option>15:00</option><option>15:15</option><option>15:30</option><option>15:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sat3"></tr><br>
				<tr>Platform No.:<select name="plat_sat3"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sat3"></tr><br>
				<tr>To :<input type="text" name="to_sat3"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sun3"><option>12:00</option><option>12:15</option><option>12:30</option><option>12:45</option><option>13:00</option><option>13:15</option><option>13:30</option><option>13:45</option><option>14:00</option><option>14:15</option><option>14:30</option><option>14:45</option><option>15:00</option><option>15:15</option><option>15:30</option><option>15:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sun3"></tr><br>
				<tr>Platform No.:<select name="plat_sun3"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sun3"></tr><br>
				<tr>To :<input type="text" name="to_sun3"></tr><br>
				
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td><center>16:00 - 20:00</center></td>
		<td id="a1"></td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_mon4"><option>16:00</option><option>16:15</option><option>16:30</option><option>16:45</option><option>17:00</option><option>17:15</option><option>17:30</option><option>17:45</option><option>18:00</option><option>18:15</option><option>18:30</option><option>18:45</option><option>19:00</option><option>19:15</option><option>19:30</option><option>19:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_mon4"></tr><br>
				<tr>Platform No.:<select name="plat_mon4"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_mon4"></tr><br>
				<tr>To:<input type="text" name="to_mon4"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_tue4"><option>16:00</option><option>16:15</option><option>16:30</option><option>16:45</option><option>17:00</option><option>17:15</option><option>17:30</option><option>17:45</option><option>18:00</option><option>18:15</option><option>18:30</option><option>18:45</option><option>19:00</option><option>19:15</option><option>19:30</option><option>19:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_tue4"></tr><br>
				<tr>Platform No.:<select name="plat_tue4"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_tue4"></tr><br>
				<tr>To :<input type="text" name="to_tue4"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_wed4"><option>16:00</option><option>16:15</option><option>16:30</option><option>16:45</option><option>17:00</option><option>17:15</option><option>17:30</option><option>17:45</option><option>18:00</option><option>18:15</option><option>18:30</option><option>18:45</option><option>19:00</option><option>19:15</option><option>19:30</option><option>19:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_wed4"></tr><br>
				<tr>Platform No.:<select name="plat_wed4"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_wed4"></tr><br>
				<tr>To :<input type="text" name="to_wed4"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_thur4"><option>16:00</option><option>16:15</option><option>16:30</option><option>16:45</option><option>17:00</option><option>17:15</option><option>17:30</option><option>17:45</option><option>18:00</option><option>18:15</option><option>18:30</option><option>18:45</option><option>19:00</option><option>19:15</option><option>19:30</option><option>19:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_thur4"></tr><br>
				<tr>Platform No.:<select name="plat_thur4"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_thur4"></tr><br>
				<tr>To :<input type="text" name="to_thur4"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_fri4"><option>16:00</option><option>16:15</option><option>16:30</option><option>16:45</option><option>17:00</option><option>17:15</option><option>17:30</option><option>17:45</option><option>18:00</option><option>18:15</option><option>18:30</option><option>18:45</option><option>19:00</option><option>19:15</option><option>19:30</option><option>19:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_fri4"></tr><br>
				<tr>Platform No.:<select name="plat_fri4"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_fri4"></tr><br>
				<tr>To :<input type="text" name="to_fri4"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sat4"><option>16:00</option><option>16:15</option><option>16:30</option><option>16:45</option><option>17:00</option><option>17:15</option><option>17:30</option><option>17:45</option><option>18:00</option><option>18:15</option><option>18:30</option><option>18:45</option><option>19:00</option><option>19:15</option><option>19:30</option><option>19:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sat4"></tr><br>
				<tr>Platform No.:<select name="plat_sat4"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sat4"></tr><br>
				<tr>To :<input type="text" name="to_sat4"></tr><br>
				
			</table>
	</div>
		</td>
		<td>
		<div>	
			<table>
				<tr>Arrival time :<select name="arr_time_sun4"><option>16:00</option><option>16:15</option><option>16:30</option><option>16:45</option><option>17:00</option><option>17:15</option><option>17:30</option><option>17:45</option><option>18:00</option><option>18:15</option><option>18:30</option><option>18:45</option><option>19:00</option><option>19:15</option><option>19:30</option><option>19:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sun4"></tr><br>
				<tr>Platform No.:<select name="plat_sun4"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sun4"></tr><br>
				<tr>To :<input type="text" name="to_sun4"></tr><br>
				
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td><center>20:00 - 00:00</center></td>
		<td id="a1"></td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_mon5"><option>20:00</option><option>20:15</option><option>20:30</option><option>20:45</option><option>21:00</option><option>21:15</option><option>21:30</option><option>21:45</option><option>22:00</option><option>22:15</option><option>22:30</option><option>22:45</option><option>23:00</option><option>23:15</option><option>23:30</option><option>23:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_mon5"></tr><br>
				<tr>Platform No.:<select name="plat_mon5"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_mon5"></tr><br>
				<tr>To:<input type="text" name="to_mon5"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_tue5"><option>20:00</option><option>20:15</option><option>20:30</option><option>20:45</option><option>21:00</option><option>21:15</option><option>21:30</option><option>21:45</option><option>22:00</option><option>22:15</option><option>22:30</option><option>22:45</option><option>23:00</option><option>23:15</option><option>23:30</option><option>23:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_tue5"></tr><br>
				<tr>Platform No.:<select name="plat_tue5"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_tue5"></tr><br>
				<tr>To :<input type="text" name="to_tue5"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_wed5"><option>20:00</option><option>20:15</option><option>20:30</option><option>20:45</option><option>21:00</option><option>21:15</option><option>21:30</option><option>21:45</option><option>22:00</option><option>22:15</option><option>22:30</option><option>22:45</option><option>23:00</option><option>23:15</option><option>23:30</option><option>23:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_wed5"></tr><br>
				<tr>Platform No.:<select name="plat_wed5"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_wed5"></tr><br>
				<tr>To :<input type="text" name="to_wed5"></tr><br>
				>
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_thur5"><option>20:00</option><option>20:15</option><option>20:30</option><option>20:45</option><option>21:00</option><option>21:15</option><option>21:30</option><option>21:45</option><option>22:00</option><option>22:15</option><option>22:30</option><option>22:45</option><option>23:00</option><option>23:15</option><option>23:30</option><option>23:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_thur5"></tr><br>
				<tr>Platform No.:<select name="plat_thur5"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_thur5"></tr><br>
				<tr>To :<input type="text" name="to_thur5"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_fri5"><option>20:00</option><option>20:15</option><option>20:30</option><option>20:45</option><option>21:00</option><option>21:15</option><option>21:30</option><option>21:45</option><option>22:00</option><option>22:15</option><option>22:30</option><option>22:45</option><option>23:00</option><option>23:15</option><option>23:30</option><option>23:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_fri5"></tr><br>
				<tr>Platform No.:<select name="plat_fri5"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_fri5"></tr><br>
				<tr>To :<input type="text" name="to_fri5"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
		<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sat5"><option>20:00</option><option>20:15</option><option>20:30</option><option>20:45</option><option>21:00</option><option>21:15</option><option>21:30</option><option>21:45</option><option>22:00</option><option>22:15</option><option>22:30</option><option>22:45</option><option>23:00</option><option>23:15</option><option>23:30</option><option>23:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sat5"></tr><br>
				<tr>Platform No.:<select name="plat_sat5"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sat5"></tr><br>
				<tr>To :<input type="text" name="to_sat5"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sun5"><option>20:00</option><option>20:15</option><option>20:30</option><option>20:45</option><option>21:00</option><option>21:15</option><option>21:30</option><option>21:45</option><option>22:00</option><option>22:15</option><option>22:30</option><option>22:45</option><option>23:00</option><option>23:15</option><option>23:30</option><option>23:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sun5"></tr><br>
				<tr>Platform No.:<select name="plat_sun5"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sun5"></tr><br>
				<tr>To :<input type="text" name="to_sun5"></tr><br>
				
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td><center>00:00 - 4:00</center></td>
		<td id="a1"></td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_mon6"><option>00:00</option><option>00:15</option><option>00:30</option><option>00:45</option><option>1:00</option><option>1:15</option><option>1:30</option><option>1:45</option><option>2:00</option><option>2:15</option><option>2:30</option><option>2:45</option><option>3:00</option><option>3:15</option><option>23:30</option><option>3:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_mon6"></tr><br>
				<tr>Platform No.:<select name="plat_mon6"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_mon6"></tr><br>
				<tr>To:<input type="text" name="to_mon6"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_tue6"><option>00:00</option><option>00:15</option><option>00:30</option><option>00:45</option><option>1:00</option><option>1:15</option><option>1:30</option><option>1:45</option><option>2:00</option><option>2:15</option><option>2:30</option><option>2:45</option><option>3:00</option><option>3:15</option><option>23:30</option><option>3:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_tue6"></tr><br>
				<tr>Platform No.:<select name="plat_tue6"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_tue6"></tr><br>
				<tr>To :<input type="text" name="to_tue6"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_wed6"><option>00:00</option><option>00:15</option><option>00:30</option><option>00:45</option><option>1:00</option><option>1:15</option><option>1:30</option><option>1:45</option><option>2:00</option><option>2:15</option><option>2:30</option><option>2:45</option><option>3:00</option><option>3:15</option><option>23:30</option><option>3:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_wed6"></tr><br>
				<tr>Platform No.:<select name="plat_wed6"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_wed6"></tr><br>
				<tr>To :<input type="text" name="to_wed6"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_thur6"><option>00:00</option><option>00:15</option><option>00:30</option><option>00:45</option><option>1:00</option><option>1:15</option><option>1:30</option><option>1:45</option><option>2:00</option><option>2:15</option><option>2:30</option><option>2:45</option><option>3:00</option><option>3:15</option><option>23:30</option><option>3:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_thur6"></tr><br>
				<tr>Platform No.:<select name="plat_thur6"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_thur6"></tr><br>
				<tr>To :<input type="text" name="to_thur6"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_fri6"><option>00:00</option><option>00:15</option><option>00:30</option><option>00:45</option><option>1:00</option><option>1:15</option><option>1:30</option><option>1:45</option><option>2:00</option><option>2:15</option><option>2:30</option><option>2:45</option><option>3:00</option><option>3:15</option><option>23:30</option><option>3:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_fri6"></tr><br>
				<tr>Platform No.:<select name="plat_fri6"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_fri6"></tr><br>
				<tr>To :<input type="text" name="to_fri6"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sat6"><option>00:00</option><option>00:15</option><option>00:30</option><option>00:45</option><option>1:00</option><option>1:15</option><option>1:30</option><option>1:45</option><option>2:00</option><option>2:15</option><option>2:30</option><option>2:45</option><option>3:00</option><option>3:15</option><option>23:30</option><option>3:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sat6"></tr><br>
				<tr>Platform No.:<select name="plat_sat6"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sat6"></tr><br>
				<tr>To :<input type="text" name="to_sat6"></tr><br>
				
			</table>
		</div>
		</td>
		<td>
			<div>
			<table>
				<tr>Arrival time :<select name="arr_time_sun6"><option>00:00</option><option>00:15</option><option>00:30</option><option>00:45</option><option>1:00</option><option>1:15</option><option>1:30</option><option>1:45</option><option>2:00</option><option>2:15</option><option>2:30</option><option>2:45</option><option>3:00</option><option>3:15</option><option>23:30</option><option>3:45</option></select></tr><br>
				<tr>Departure time :<input type="time" name="dept_time_sun6"></tr><br>
				<tr>Platform No.:<select name="plat_sun6"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></tr><br>
				<tr>From :<input type="text" name="from_sun6"></tr><br>
				<tr>To :<input type="text" name="to_sun6"></tr><br>
			
			</table>
		</div>
		</td>
	</tr>

	<tr><td></td><td></td><td></td><td></td><td></td><td><input type="submit" name="submit"></td></tr>

	


</table>
</form>
</body>
</html>