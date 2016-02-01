	<?php  
		function declareVars(){
		$stl= "border-left:1px solid black;".
 				"border-right:1px solid black"; 
 					
 		$captionStyle = "\"border-bottom:2px solid black;".
 						"border-top:1px solid black;".
 						"font-weight:bold;\"";
 						
 	 $styleTop = "\"border-bottom:2px solid black;".
 						"border-top:1px solid black;".
 						"\"";
}


	function showUsers(){
		 $styleBottom= styleBottom();
		$users = array(
			 array(
					"userName_"=>"User 1 Loaded",
					"password_"=>"User_Password1"
				),
			 array(
				"userName_"=>"User 2 Loaded",
					"password_"=>"User\$Password1"
				)
			);
		$count = 1;
		foreach($users as $user)
				{
					print "<tr >";
					print "<td style=$styleBottom  > $count </td>"; 
					print "<td style=$styleBottom >$user[userName_]</td>"; 
					print "<td style=$styleBottom  >$user[password_]</td>"; 
					print "</tr>";
					$count=$count+1;
				};
		}
		
		
	function styleBottom(){		
		 return  "\"border-bottom:1px solid black;".
 						"border-top:2px solid black;".
 						"font-weight:bold;\"";
 		}
	?>