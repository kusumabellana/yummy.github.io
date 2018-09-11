<head>
	<link rel="stylesheet" href="../css/bootstrap(v3.3.6).min.css" type="text/css" />
	<script src="../js/angular(v1.4.8).min.js"></script>
</head>

<body>
	<?php
		require('dbcon.php');

		$obj = new DbCon();
		//$obj->showMenu($_REQUEST["hname"]);
	?>


	<div class="container" ng-app="" ng-init="count1=0;count2=0;count3=0;count4=0">
	<form action="finalbill.php" method="get">
		<table class="table table-responsive">
			<tr>
				<th colspan="2">
					<div class="col-lg-10 col-md-10"><h2><?php echo $_REQUEST["hname"]; ?></h2></div>
					<div class="col-lg-2 col-md-2"><input type="submit" class="btn btn-primary" value="proceed to bill"></div>
				</th>
			</tr>
			<tr>
				<td>
					<table align="center">
					  <tr>
					    <th><h4>Categories</h4></th>
					  </tr>
					  <tr>
					    <td><a href="#">Veg</a></td>
					  </tr>
					  <tr>
					    <td><a href="#">Non-Veg</a></td>
					  </tr>
					</table>
				</td>

				<td>
<div id="d1"><h2><b>Tiffins</b></h2></div>
<table cellpadding=40 cellspacing=0 class="table table-responsive">
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>dosa </p></td>
<td><p>price - Rs.59</p></td>
<td><input type="button" class="btn btn-success" ng-click="count1 = (count1>0?count1-1:0)" value="-"><input class="form-control" type="text" id="t3" value={{count1}} name="count1" size=7><input type="button" class="btn btn-success" ng-click="count1=count1+1" value="+"></td>
</tr>
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Chapati </p></td>
<td><p>price - Rs.60</p></td>
<td><input type="button" class="btn btn-success" ng-click="count2 = (count2>0?count2-1:0)" value="-"><input type="text" id="t3" value={{count2}} name="count2" size=7><input type="button" class="btn btn-success" ng-click="count2=count2+1" value="+"></td>
</tr>
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>vada </p></td>
<td><p>price - Rs.40</p></td>
<td><input type="button" class="btn btn-success" ng-click="count3 = (count3>0?count3-1:0)" value="-"><input type="text" id="t3" value={{count3}} name="count3" size=7><input type="button" class="btn btn-success" ng-click="count3=count3+1" value="+"></td>
</tr>
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Idly </p></td>
<td><p>price - Rs.39</p></td>
<td><input type="button" class="btn btn-success" ng-click="count4 = (count4>0?count4-1:0)" value="-"><input type="text" id="t3" value={{count4}} name="count4" size=7><input type="button" class="btn btn-success" ng-click="count4=count4+1" value="+"></td>
</tr>



</table>
<hr>

</form>


<div id="d"><h2><b>Rice Items</b></h2></div>
<table cellpadding=40 cellspacing=0 class="table table-responsive">
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Plate Meals </p></td>
<td><p>price - Rs.110</p></td>
<td><button class="btn btn-success">-</button><input type="text" id="t3" value=0 size=7><button class="btn btn-success">+</button></td>
</tr>
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Full Meals </p></td>
<td><p>price - Rs.150</p></td>
<td><button class="btn btn-success">-</button><input type="text" id="t2" value=0 size=7><button class="btn btn-success">+</button></td>
</tr>
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Veg-Biriyani </p></td>
<td><p>price - Rs.170</p></td>
<td><button class="btn btn-success">-</button><input id="t1" type="text" value=0 size=7><button class="btn btn-success">+</button></td>
</tr>
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Veg-FriedRice </p></td>
<td><p>price - Rs.180</p></td>
<td><button class="btn btn-success">-</button><input type="text" id="t4" value=0 size="7"><button class="btn btn-success">+</button></td>
</tr>



</table>
<hr>




<div id="d2"><h2><b>Beverages</b></h2></div>
<table cellpadding=40 cellspacing=0 class="table table-responsive">
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Cocktail </p></td>
<td><p>price - Rs.190</p></td>
<td><button class="btn btn-success">-</button><input type="text" id="t3" value=0 size=7><button class="btn btn-success">+</button></td>
</tr>
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Mocktail </p></td>
<td><p>price - Rs.220</p></td>
<td><button class="btn btn-success">-</button><input type="text" id="t2" value=0 size=7><button class="btn btn-success">+</button></td>
</tr>
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Chocolash </p></td>
<td><p>price - Rs.130</p></td>
<td><button class="btn btn-success">-</button><input id="t1" type="text" value=0 size=7><button class="btn btn-success">+</button></td>
</tr>
<tr>
<td> <img src="C:\Users\User\Desktop\dosa.jpg" alt="food image" height="62" width="62">  </td>
<td><p>Cold Coffee</p></td>
<td><p>price - Rs.90</p></td>
<td><button class="btn btn-success">-</button><input type="text" id="t4" value=0 size=7  ><button class="btn btn-success">+</button></td>
</tr>



</table>
<hr>


</div>

				</td>
			</tr>
		</table>
	</div>

</body>