
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>	
	<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="css/main.css">

	<script
  src="jquery.js"></script>

  <script type="text/javascript">

function load(){
	console.log("i WAS CALLED");
	if(window.XMLHttpRequest){

		xmlhttp = new XMLHttpRequest();

		}else{

			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		} 

xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4 && xmlhttp.status ==200 )
{
	document.getElementById('adiv').innerHTML = xmlhttp.responseText;

}

}
console.log("AM HERE");

 var firstname=  document.getElementById('firstname').value;
 var lastname= document.getElementById('lastname').value;
 var homenumber= document.getElementById('homenumber').value;
 var homestreet= document.getElementById('homestreet').value;

var nationalty= document.getElementById('nationalty').value;
var states= document.getElementById('states').value;
var destination= document.getElementById('destination').value;
var day= document.getElementById('day').value;var month= document.getElementById('month').value; 
var year = document.getElementById('year').value ;
 	 
 //var parameters="firstname="+ firstname +lastname+ homenumber+ homestreet+ nationalty+ states+destination+ day +month +year;
 var parameters = firstname +"%"+ lastname +"%"+ homenumber +"%"+ homestreet +"%"+ nationalty+"%"+states+"%"+destination+"%"+ day +"%"+month +"%"+year;
 ;
 	console.log(parameters);

 var msg="Hello world";
    $.ajax({
        url: 'indexpage.php',
        type: 'POST',
        data: {'parameters': parameters}
    });
 // xmlhttp.open('POST', 'indexpage.php?mydata='+parameters,  true);
 // xmlhttp.send();
 // xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

 //xmlhttp.open('GET', 'frontendAjaxwork.php?lastname='+document.autoplay.lastname.value, true);

 

}

</script>
	 


	<style type="text/css" >
		body{
		    background:#33CCFF;	
			background-image:url(airplane.jpg);
		    background-repeat:repeat-x;
		}
	    

	</style>


</head>
<body>
	<div class="col-xs-12">

	<p class="text-center"> HELLO WORLD!!</p>

	</div>

	<br /><br /><br /><br /><br /><br /><br /><br />
	<h1><strong style="background-color:#FF0000" text-align:center;> Book your flight and get your ticket code....</strong></h1>

		<label>First Name</label> <input type="text" name="firstname" id="firstname" ><br /><br />
		<label>Last Name</label> <input type="text" name="lastname" id="lastname" ><br /><br />

		<label>Home number</label> <input type="text" name="homenumber" id="homenumber" ><br /><br />
		<label>Street</label> <input type="text" name="homestreet" id="homestreet" ><br /><br />
		<label>LocalGovernment</label> <select name="localgovernment" id="localgovernment" value="localgovernment" ></select><br /><br />
		<label>Nationalty</label>
		<?php 
$nationalty = array("__select a state__","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan",
 "Bahamas", "The
Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burma","Burundi",
"Cambodia", "Cameroon", "Canada", "Cabo Verde", "Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo", "Democratic Republic of the Congo", "Republic of the Costa Rica", "Cote d'Ivoire", "Croatia","Cuba","Curacao","Cyprus","Czechia",
"Denmark","Djibouti","Dominica","Dominican Republic",
"East Timor (see Timor-Leste)", "Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia",
"Fiji","Finland","France",
"Gabon","Gambia", "The Georgia","Germany","Ghan","Greece","Grenada","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Holy See","Honduras","Hong Kong","Hungary",
"Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy",
"Jamaica","Japan","Jordan",
"Kazakhstan","Kenya","Kiribati","Korea", "North Korea", "South Kosovo", "Kuwait","Kyrgyzstan",
"Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg",
"Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives", "Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Morocco","Mozambique",
"Namibia", "Nauru", "Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway",
"Oman",
"Pakistan","Palau","Palestinian Territories","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal",
"Qatar",
"Romania","Russia","Rwanda","Saint Kitts and Nevis","Saint Lucia","Saint Vincent and the Grenadines",
"Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Sint Maarten","Slovakia","Slovenia","Solomon", "Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria",
"Taiwan","Tajikistan","Tanzania","Thailand","Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu",
"Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Vanuatu","Venezuela","Vietnam","Yemen",
"Zambia","Zimbabwe"); 

$countryarraylenght= count($nationalty);?>
 <select name="nationalty" > 
 <?php for($count=0; $count<$countryarraylenght; $count++ ){?>

 <option name="nationalty" id="nationalty"  value=" <?php echo $nationalty[$count]; ?> "   "> <?php echo $nationalty[$count]; ?> </option>
<?php } ?>

</select><br /><br />


<label>If Destination is within the country</label> <br /><br />
	<label>State</label> 

 <?php
 //echoing array of Nigerian states
 
 $states = array(" __select a state__","ABIA","ADAMAWA","AKWA IBOM","ANAMBRA","BAUCHI","BAYELSA","BENUE","BORNO","CROSS RIVER","DELTA","EBONYI","EDO","EKITI","ENUGU",
 "GOMBE","IMO","JIGAWA","KADUNA","KANO","KATSINA","KEBBI","KOGI","KWARA","LAGOS","NASSARAWA","NIGER","OGUN","ONDO","OSUN","OYO","PLATEAU","RIVERS","SOKOTO","TARABA","YOBE","ZAMFARA");
 
 // array of Nigerian states
$arraystateslenght = count($states);?>
<select name="states" >
<?php
for($count=0; $count<$arraystateslenght; $count++ ){
?>
 <option name="states"  id="states" value=" <?php echo $states[$count]; ?>" > <?php echo $states[$count];?> </option>
  <?php }?>


</select><br /><br />


<label>If Destination is outside the country</label>


 
 <?php
 $destination = array("__select a state__ ","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan",
 "Bahamas", "The
Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burma","Burundi",
"Cambodia", "Cameroon", "Canada", "Cabo Verde", "Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo", "Democratic Republic of the Congo", "Republic of the Costa Rica", "Cote d'Ivoire", "Croatia","Cuba","Curacao","Cyprus","Czechia",
"Denmark","Djibouti","Dominica","Dominican Republic",
"East Timor (see Timor-Leste)", "Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia",
"Fiji","Finland","France",
"Gabon","Gambia", "The Georgia","Germany","Ghan","Greece","Grenada","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Holy See","Honduras","Hong Kong","Hungary",
"Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy",
"Jamaica","Japan","Jordan",
"Kazakhstan","Kenya","Kiribati","Korea", "North Korea", "South Kosovo", "Kuwait","Kyrgyzstan",
"Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg",
"Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives", "Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Morocco","Mozambique",
"Namibia", "Nauru", "Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway",
"Oman",
"Pakistan","Palau","Palestinian Territories","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal",
"Qatar",
"Romania","Russia","Rwanda","Saint Kitts and Nevis","Saint Lucia","Saint Vincent and the Grenadines",
"Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Sint Maarten","Slovakia","Slovenia","Solomon", "Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria",
"Taiwan","Tajikistan","Tanzania","Thailand","Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu",
"Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Vanuatu","Venezuela","Vietnam","Yemen",
"Zambia","Zimbabwe"); 

$countryarraylenght= count($destination);?>
 <select name="destination" > 
 <?php for($count=0; $count<$countryarraylenght; $count++ ){?>

 <option name="destination" id="destination" value=" <?php echo $destination[$count]; ?>"> <?php echo $destination[$count]; ?> </option>
<?php } ?>

</select><br /><br />

<label>Date of flight</label>
<label><h4>Select date of flight</h4> </label>
		<label>Day</label>
		
		<select name="day" >
		<?php
		for($i=1; $i<=31; $i++){?>
		 <option name="day"  value= <?php  echo ''.$i; ?> >  <?php  echo ''.$i; ?></option/> <?php  
		}?>
		</select>
		
		
		<label>Month </label>
	<select  name="month" id="month">
		<option value="Januar">January </option>
		<option value= "February">February </option>
		<option value= "March">March </option>
		<option value= "April">April </option>
		<option value="May">May </option>
		<option value="June" >June </option>
		<option value="July">July </option>
		<option value="August">August </option>
		<option value="September">September </option>
		<option value="October">October</option>
		<option value="November">November </option>
		<option value="December">December </option>

	 </select>
	 
	 
	 <label>Day</label>
		
		<select name="year" >
		<?php
		for($i=2017; $i<=2020; $i++){?>
		 <option name="year" id="year" value= <?php  echo ''.$i; ?> >  <?php  echo ''.$i; ?></option/> <?php  
		}?>
		</select></br></br>
		


	<label>Generate Ticket Code</label>

<input type="submit", name="submit" value="submit" onclick="load()"/>

	
<div id="adiv"></div>
</body>
</html>






