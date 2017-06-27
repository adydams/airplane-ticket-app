<?php

class serverException extends Exception{}
class databaseException extends Exception{}

class connectserverdatabase
{

	public $hostname = 'localhost';
    public $user= 'root';
    public $password='';
    public $mydatabase = 'AirplaneTicketReservationDB';
function connect($hostname,$user,$password){

	try{
	if(!mysqli_connect($this->hostname, $this->user, $this->password)){

		throw new serverException("Error in connecting server", 1);
		
	}elseif (!mysqli_connect($this->hostname, $this->user, $this->password, $this->mydatabase)) {
		
		throw new databaseException("Error in connecting to data base", 1);
		
	}else{
		echo'connected';
	}
	}
catch(serverException $ex)
	   {

	  echo 'Error'.$ex->getMessage();	
	   }
catch(databaseException $ex){

	echo'Error'.$ex->getMessage();
}

}

}
$connection = new connectserverdatabase;

$connection->connect('localhost','root','' );

?>