<?php
echo ""; 
echo "<html>"; 
echo "<head>"; 
echo "<title>Shirpur-Dhule-Panvel(AC SLEEPER COACH)Select seat</title>"; 
echo "<script type='text/javascript'>"; 
echo "        function validate(){"; 
echo "		     var x = document.forms['myForm']['fname'].value;"; 
echo "              if (x == null || x == '') {"; 
echo "              alert('Name must be filled out');"; 
echo "              return false;"; 
echo "               }"; 
echo "			"; 
echo "             var x = document.forms['myForm']['eml'].value;"; 
echo "              if (x == null || x == '') {"; 
echo "              alert('email must be filled out');"; 
echo "              return false;"; 
echo "               }"; 
echo "			   "; 
echo "			   var x = document.forms['myForm']['conno'].value;"; 
echo "              if (x == null || x == '') {"; 
echo "              alert('contact no must be filled out');"; 
echo "              return false;"; 
echo "               }"; 
echo "			   "; 
echo "		  if (document.getElementById('from').value == 'SelectYourStartCity')"; 
echo "            {"; 
echo "              alert('Please select your Start City from list.');"; 
echo "              document.getElementById('from').focus();"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "		 if (document.getElementById('Gender').value == 'SelectYourGender')"; 
echo "            {"; 
echo "              alert('Please select your Gender from list.');"; 
echo "              document.getElementById('Gender').focus();"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "        "; 
echo "		 if (document.getElementById('to').value == 'SelectYourDestinationCity')"; 
echo "            {"; 
echo "			  document.getElementById('to').focus();"; 
echo "              alert('Please select your Destination City from list.');"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "        "; 
echo "	      if (document.getElementById('boarding_point').value == 'SelectYourBoardingPoint')"; 
echo "            {"; 
echo "              alert('Please select your Boarding Point from list.');"; 
echo "              document.getElementById('boarding_point').focus();"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "     "; 
echo "     "; 
echo "        		"; 
echo "         if (document.getElementById('Drop_point').value == 'SelectYourDropPoint')"; 
echo "            {"; 
echo "              alert('Please select your Start City from list.');"; 
echo "              document.getElementById('Drop_point').focus();"; 
echo "              return false;                                                       "; 
echo "            }"; 
echo "         alert('Please cheack All Informtion ');"; 
echo "		 "; 
echo "        }   "; 
echo "		</script>"; 
echo "<link rel='stylesheet' type='text/css' href='style.css'>"; 
echo "</head>"; 
echo ""; 
echo ""; 
echo "<body bgcolor='#ffffcc'>"; 
echo "<center>"; 
echo "<h1 style=font-size:60><center> NAVKAR TRAVELS </h1>"; 
echo "<h1><center>Shirpur-Dhule-Panvel(AC SLEEPER COACH)Select seat"; 
echo "</center></h1>"; 
echo "<br><br>"; 


echo "<h1><center>Select Seat to update AND Fill details</h1> "; 
echo "<h4 style=color:red>*All fields are mandatory to fill</h4>"; 
echo "<form method='post' name='myForm' action='Shirpur-Dhule-Panvel(AC SLEEPER COACH)update_progres.php' onsubmit='return validate()'>"; 
echo "<center><table cellspacing=20 style=font-size:20>"; 
echo "<tr>"; 
echo ""; 
echo "<tr><td>Select Seat Number to be update</td>"; 
echo "<td><select id=Seat_Number name=seatno>"; 
echo "<option value=SelectYourSeatNumber>---Select Seat Number to Update---</option>"; 
echo "<option value=1>1</option>"; 
echo "<option value=2>2</option>"; 
echo "<option value=3>3</option>"; 
echo "<option value=4>4</option>"; 
echo "<option value=5>5</option>"; 
echo "<option value=6>6</option>"; 
echo "<option value=7>7</option>"; 
echo "<option value=8>8</option>"; 
echo "<option value=9>9</option>"; 
echo "<option value=10>10</option>"; 
echo "<option value=11>11</option>"; 
echo "<option value=12>12</option>"; 
echo "<option value=13>13</option>"; 
echo "<option value=14>14</option>"; 
echo "<option value=15>15</option>"; 
echo "<option value=16>16</option>"; 
echo "<option value=17>17</option>"; 
echo "<option value=18>18</option>"; 
echo "<option value=19>19</option>"; 
echo "<option value=20>20</option>"; 
echo "<option value=21>21</option>"; 
echo "<option value=22>22</option>"; 
echo "<option value=23>23</option>"; 
echo "<option value=24>24</option>"; 
echo "<option value=25>25</option>"; 
echo "<option value=26>26</option>"; 
echo "<option value=27>27</option>"; 
echo "<option value=28>28</option>"; 
echo "<option value=29>29</option>"; 
echo "<option value=30>30</option>"; 
echo "</select></td></tr>"; 

echo ""; 
echo "<td>From:</td>"; 
echo "<td><select id=from name=from>"; 
echo "<option value=SelectYourStartCity>Select Your Start City</option>"; 
echo "<option value=Dhule>Dhule</option>"; 
echo "<option value=Shirpur>Shirpur</option>"; 
echo "</td>"; 
echo ""; 
echo "<td>To:</td>"; 
echo "<td><select id=to name=to>"; 
echo "<option value=SelectYourDestinationCity>Select Your Destination City</option>"; 
echo "<option value=panvel>Panvel</option>"; 
echo "</td>"; 
echo "</tr><tr>"; 
echo ""; 
echo "<tr>"; 
echo "<td>Select Boarding Point:</td>"; 
echo "<td><select id=\"boarding_point\" name=boarding_point>"; 
echo "<option value=SelectYourboardPoint>Select Your Board Point</option>"; 
echo "<option value=\"ShirpurBusStop\">Shirpur Bus Stop"; 
echo "<option value=\"DhuleGround\">Dhule Ground"; 
echo "</td>"; 
echo "</select>"; 
echo "</td>"; 
echo ""; 
echo "<td>Select Drop Point:</td>"; 
echo "<td><select id=\"drop_point\" name=Drop_point>"; 
echo "<option value=SelectYourdrop_Point>Select Your droping Point</option>"; 
echo "<option value=\"bhivandi-Bypass\">bhivandi-Bypass</option>"; 
echo "<option value=\"Kalyan Fata\">Kalyan Fata</option>"; 
echo "<option value=\"Kallgaon\">Kallgaon</option>"; 
echo "<option value=\"Kalyan Lal Chowk(Kalya+Lalv)\">Kalyan Lal Chowk(Kalya+Lalv)</option>"; 
echo "<option value=\"Baicha Statue\">Baicha Statue</option>"; 
echo "<option value=\"Kalyan\">Kalyan</option>"; 
echo "<option value=\"Shree Ram Talkies\">Shree Ram Talkies</option>"; 
echo "<option value=\"Vitthal vadi Station\">Vitthal vadi Station</option>"; 
echo "<option value=\"Kate Manuli\">Kate Manuli</option>"; 
echo "<option value=\"30 Gaon Naka (30 Gaon)\">30 Gaon Naka (30 Gaon)</option>"; 
echo "<option value=\"Dombivali(Tata Power)\">Dombivali(Tata Power)</option>"; 
echo "<option value=\"Gharda circle\">Gharda circle</option>"; 
echo "<option value=\"Manpada\">Manpada</option>"; 
echo "<option value=\"Dombivali\">Dombivali</option>"; 
echo "<option value=\"Lodha Gaon\">Lodha Gaon</option>"; 
echo "<option value=\"Kalyan Shilpada\"></option>Kalyan Shilpada</option>"; 
echo "<option value=\"Mapa Bridge\">Mapa Bridge</option>"; 
echo "<option value=\"Ghansali Bridge\">Ghansali Bridge</option>"; 
echo "<option value=\"Khopar Kharne(then Takee)\">Khopar Kharne(theen Takee)</option>"; 
echo "<option value=\"Vashi Depo\">Vashi Depo</option>"; 
echo "<option value=\"Sanpada Station\">Sanpada Station</option>"; 
echo "<option value=\"Juhi Nagar\">Juhi Nagar</option>"; 
echo "<option value=\"Nehrel\">Nehrel</option>"; 
echo "<option value=\"C.B.D\">C.B.D</option>"; 
echo "<option value=\"Belapur\">Belapur</option>"; 
echo "<option value=\"Kharghar(Hiranandani)\">Kharghar(Hiranandani)</option>"; 
echo "<option value=\"Khopra\">Khopra</option>"; 
echo "<option value=\"Kamota\">Kamota</option>"; 
echo "<option value=\"Kalumpoli Colony (Circle)\">Kalumpoli Colony (Circle)</option>"; 
echo "<option value=\"Kanda Colony\">Kanda Colony</option>"; 
echo "<option value=\"New Panvel Bridge\">New Panvel Bridge</option>"; 
echo "<option value=\"Panvel-Last-Stop\">Panvel-Last-Stop</option>"; 
echo "/<select>"; 
echo "</td>"; 
echo "</tr><tr>";
 
echo ""; 
echo "<tr>"; 
echo "<td>NAME:</td>"; 
echo "<td><input type='text' name='fname'></td>"; 
echo "<td>Select Gender</td>"; 
echo "<td>"; 
echo "<select id='Gender' name='gender'>"; 
echo "<option value=SelectYourGender>Select Your Gender</option>"; 
echo "<option value='male'>MALE</option>"; 
echo "<option value='female'>FEMALE</option></td>"; 
echo "</select>"; 
echo "</td>"; 
echo "</tr>"; 
echo ""; 
echo ""; 
echo "<tr>"; 
echo "<td>Email:</td>"; 
echo "<td><input type='email' name='eml'></td>"; 
echo "<td>Contact no:</td>"; 
echo "<td><input type='text' name='conno'></td>"; 
echo "</tr>"; 
echo ""; 
echo "<tr><td>Rate:</td>"; 
echo "<td>Rs. 550/-</td>"; 
echo "</tr>"; 
echo "<tr><td><td>"; 
echo "</form></center>"; 
echo "</form>"; 
echo "</center>"; 
echo "</table>"; 
echo ""; 
echo "</table>"; 
echo "<br><br>"; 
echo ""; 
echo "<input type='submit' value='UPDATE TICKET'>"; 
echo "</form>"; 
echo "</center>"; 
echo "</body>"; 
echo "</html>";
?>