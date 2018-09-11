<?php
	final class DbCon{
		private $con;

		private $host = "localhost";
		private $username = "root";
		private $password = "";
		private $databasename = "food_delivery";

		public function __construct()
		{
			$this->con = mysqli_connect($this->host,$this->username,$this->password,$this->databasename);
		}

		public function registeruser($email, $pwd, $address, $phone)
		{
			$createuser = mysqli_query($this->con,"insert into customerreg(email, password, phno, address) values('$email','$pwd','$phone','$address')");
			if($createuser>0)
			{
				echo 'registered Successfully. Please <a href="../pages/login.html">click here to login</a>';
			}
			else
			{
				echo 'error in registering user. Please check the information';
			}
		}

		public function close()
		{
			$this->con.close();
		}

		public function showHotels($areaname)
		{
			$hotelnames = "";
			$gethotel = mysqli_query($this->con, "select hotel_name from hotels where location = '$areaname'");
			if(mysqli_num_rows($gethotel))
			{
				while($row = mysqli_fetch_assoc($gethotel))
				{
					if($hotelnames!=""){
						$hotelnames .= ",";
					}
					$hotelnames .= '{"Name":"'.$row["hotel_name"].'"}';
				}
				$hotelnames = '{"records":['.$hotelnames.']}';
				return $hotelnames;
			}
		}

		public function showMenu($hotelname)
		{
			$getid = mysqli_query($this->con, "select hotel_id from hotels where hotel_name = '$hotelname'");
			if(mysqli_num_rows($getid))
			{
				$row = mysqli_fetch_assoc($getid);
				$h_id = $row["hotel_id"];

				echo '<h1>'.$hotelname.'</h1>';
				$getmenu = mysqli_query($this->con, "select itemname, price, item_type from menu_table where hotel_id = $h_id");
				while($rowmenu=mysqli_fetch_assoc($getmenu))
				{
					//if($rowmenu["item_type"]=="fry")
					echo $rowmenu["itemname"]." ".$rowmenu["price"]."<br>";
				}
			}
		}
	}
?>