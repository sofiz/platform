
<?php 

class user {

      public $Mrating =0;
      public $Photo_id = array();
      public $Photo = array();
      public $nphotos ;
      public $Username;
	  public $Wilaya;
	  public $Daira;
	  public $Commune;
	  public $Email;
	  public $Phone;
	  public $Birthday;
	  public $Description ;
	  public $Profile_Pic;
	  public $First_Name;
	  public $Last_Name;
	  public $id;
	  public $Job;
      public $Type;
      public $ids ;
      public $Facebook ;
      public $Instagram ;
      public $EmailCheck ;


     function Age($dateNaissance)
{
	if($dateNaissance != "0000-00-00" )
	{
  $aujourdhui = date("Y-m-d");
  $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
  return $diff->format('%y')." سنة "; }

}







//////////////////////////////// Check_Session_Isset() //////////////////////////////////////
function Check_Session_Isset() {
if (isset($_SESSION['Username'])) {
  	         return true ;
              }
			  else return false ;
     }

//******************************************************************************
function Get_Id_From_Session($db){





	  if (isset($_SESSION['Username'])) {
	  $user=$_SESSION['Username'];
	  $res1=mysqli_query($db,"SELECT id FROM users WHERE Username='$user'");
      while($row1=mysqli_fetch_array($res1)) {

        $this->ids=$row1['id'] ;
        }

}
return $this->ids;
                               }
							   
//***********************************************************************

function Get_Username_From_Session($db){

	  if (isset($_SESSION['Username'])) {
	  $Username=$_SESSION['Username'];
      return $Username;
}

                               }



//******************************************************************************

function Get_Id_From_Url(){



       $this->id=$_GET['id'];
	   return $this->id;

}


//*************************id exist in our system or not ************************
function Check_Id_Exist($db){

$res2=mysqli_query($db,"SELECT id FROM users ");
$flag = false ;
while($row2=mysqli_fetch_array($res2)){
	if($row2['id'] == $this->id) $flag=true;
}

if(!$flag) header("Location: search.php" );

}


//***************************************************************************************

function Compare_idUrl_and_idSession($db){


  if($this->Get_Id_From_Session($db) == $this->Get_Id_From_Url()){header("Location: my-profile.php");}


}

///**********************************Get information of profile **********************

function Select_Information_Of_Profile($db){

    $res=mysqli_query($db,"SELECT * FROM users WHERE id='$this->id'");

  while($row=mysqli_fetch_array($res))
      {
	  $this->Username=$row['Username'];
	  $this->Wilaya=$row['Wilaya'];
	  $this->Daira=$row['Daira'];
	  $this->Commune=$row['Commune'];
	  $this->Email=$row['Email'];
	  $this->Phone=$row['Phone'];
	  $this->Birthday=$row['Birthday'];
	  $this->Description=$row['Description'];
	  $this->Profile_Pic=$row['Profile_Pic'];
	  $this->First_Name=$row['First_Name'];
	  $this->Last_Name=$row['Last_Name'];
	  $this->id=$row['id'];
	  $this->Job=$row['Job'];
	  $this->Type=$row['Type'];
	  $this->Facebook=$row['Facebook'];
	  $this->Instagram=$row['Instagram'];
	  $this->EmailCheck=$row['EmailCheck'];
      }
}

function Select_Photos_Of_Profile ($db){


	$ress=mysqli_query($db,"SELECT * FROM photos WHERE 	User_id='$this->id'");

    $this->nphotos = mysqli_num_rows($ress) ;

	 if (!$ress) {
                   printf("Error: %s\n", mysqli_error($db));
                   exit();
                 }
    while($row=mysqli_fetch_array($ress))
                   {
     array_push($this->Photo,"imgs/".$this->id.'/'.$row['Photo_Path']);
	 array_push($this->Photo_id,$row['Photo_id']);

                   }


}





////*************************** Get Rating profile ********************
function Get_Rating_Profile($db){

$res=mysqli_query($db,"SELECT rating,Commentor_id FROM comments where (User_id='$this->id') AND (Commentor_id!='$this->id')");

$Nc=0;
$Nrating=0;
$arr =  array("-1","-2");
while($row=mysqli_fetch_array($res))
  {
	                      $flag=true ;
						  for($j=0;$j<count($arr);$j++)
						  if($arr[$j]==$row['Commentor_id']) { $flag=false ; }
						  if($flag){
	                      $Nrating=$Nrating+$row['rating'];
						  $Nc++;
						  array_push($arr,$row['Commentor_id']);
 }

  }
  if($Nc>0)
  $this->Mrating = (int)($Nrating/$Nc) ;


return $this->Mrating;
}




function Show_Rating(){



	echo "<div class='ratingcontain'>";
     for ($j=1;$j<=$this->Mrating;$j++)
	 echo '<span class="fa fa-star checked"></span>' ;
      if ($this->Mrating<5)
      for($j=$this->Mrating;$j<5;$j++)
     echo ' <span class="fa fa-star unchecked"></span>' ;
       echo "</div>";


}


function Show_Three_Photos(){



if($this->nphotos>3){for($j=0;$j<3;$j++){
echo '<img src="'.$this->Photo[$j].'" alt="" class="imgs" onclick="slide(this.src)">';

}
	}
else if(($this->nphotos<=3) && ($this->nphotos>0)){
	for($j=0;$j<$this->nphotos;$j++){
	echo '<img src="'.$this->Photo[$j].'" alt="" class="imgs" onclick="slide(this.src)">';

}}


}

function  Show_All_Photos() {


	for($j=0;$j<$this->nphotos;$j++){
      echo '<div id="pic " class="piccontainer">';
      echo '<img src="'.$this->Photo[$j] .'" id="'.$this->Photo[$j] .'" alt="" class="imgs2 pictures" onclick="slide(this.src)" >';
	  echo ' </div>';



}
}
function  Show_All_Photos_In_Edit() {


	// -------------show photos in window and save (Photos_ids) in array if user click on X -----------------------
	for($j=0;$j<$this->nphotos;$j++){
     echo '<div id="pic'.$this->Photo_id[$j].'" class="piccontainer">';
     echo '<img src="'.$this->Photo[$j].'" alt="" class="imgs2">';
     echo ' <button id="deletepic1" type="button" name="deletepic" class="closepic" onclick="myFunction('.$this->Photo_id[$j].')"> &times; </button> ';
	 echo ' </div>';

	 }


}



function For_My_Comment($db){




      if ($this->Check_Session_Isset() && $this->Type=="worker") {
	  $user=$_SESSION['Username'];
	  $res=mysqli_query($db,"SELECT Profile_Pic,Last_Name,First_Name,id FROM users WHERE Username='$user'");
      while($row=mysqli_fetch_array($res)) {
  	             $Profile_Pic=$row['Profile_Pic'] ;
		 		 $Last_Name=$row['Last_Name'] ;
				 $First_Name=$row['First_Name'] ;
				 $Commentor_id=$row['id'];
				 }

         echo' <div class="yourcomment"> ';
         echo'  <img src="imgs/'.$Commentor_id.'/'.$Profile_Pic.'" class="commentimg" alt="" id="yourcommentpic" style="position: absolute;" > ';
         echo'    <form action="onsbmit.php" method="post">   ';




		 if($this->id != $this->Get_Id_From_Session($db)){
			  echo' <input type="text" name="Comment"  id="input1">';
      	 echo '  <div id="rater"></div> ';

          }

        else echo' <input type="text" name="Comment"  id="input2">';
        echo '<input type= "hidden"  name="Commentor_id"  value="'.$Commentor_id.'" >   ';
        echo '<input type= "hidden"  name="User_id"  value="'.$this->id.'" > ';
        echo '<input type= "hidden"  name="rating"  value="" id="ratings" >   ';
		
        echo' <input type="submit" name="commenter" value="commenter" id="submitreview" hidden><label for="submitreview" class="fa fa-send" id="submitreview2"></label></div>
      ';
                      echo'   </form>    ';


  }

}

















function Show_All_Comments($db){


$res=mysqli_query($db,"SELECT * FROM comments WHERE User_id='$this->id'");
$fortest = mysqli_num_rows($res) ;
if($fortest>0){ 
while($row=mysqli_fetch_array($res)){




$Commentor_id=$row['Commentor_id'] ;
$rating=$row['rating'];
$rest=mysqli_query($db,"SELECT Profile_Pic,Last_Name,First_Name FROM users WHERE id='$Commentor_id' ");

while($row1=mysqli_fetch_array($rest))
       {

		 $Profile_Pic=$row1['Profile_Pic'] ;
		 $Last_Name=$row1['Last_Name'] ;
		 $First_Name=$row1['First_Name'] ;


              }


   echo ' <div class="commentsection" id="'.$row['Comment_id'].'" > ';
   echo ' <div class="comment"> ' ;
   echo '<a href="profile.php?id='.$Commentor_id.'" style="text-decoration: none; color: black;">   <img class="commentimg" src="imgs/'.$Commentor_id.'/'.   $Profile_Pic   .' " alt="" onerror="error(this)"> </a>' ;
   echo '<div style="    display: inline-grid;">';
	 echo '<a href="profile.php?id='.$Commentor_id.'" style="text-decoration: none; color: black;">  <span class="cousername">'. $First_Name.'  '.$Last_Name  . '</span> </a>'  ;

if($Commentor_id != $this->id){
   echo "<div class='ratingcontain3'>";
   for ($j=1;$j<=$row['rating'];$j++)
   echo '<span class="fa fa-star checked"></span>' ;
   if ($row['rating']<5)
   for($j=$row['rating'];$j<5;$j++)
   echo ' <span class="fa fa-star unchecked"></span>' ;
   echo "</div>";  }
   
   echo ' <span class="commenttxt">  ' .  $row['Comment']  .'       </span> </div>  ' ;
   // -------------------------------DELETE CCOMMENT ----------------------------------------------
   if($this->Get_Id_From_Session($db)==$Commentor_id){
   echo ' <form class="deletecom" id="deletecom" action="onsbmit.php" method="post" >   ';
   echo ' <input type="text" name="Comment_id" value="'.$row['Comment_id'].' " class="inputname" hidden>' ;
   echo ' <input type="text" name="User_id" value="'.$row['User_id'].' " class="inputname" hidden>' ;
   echo ' <input type="submit" value="DeleteComment" name="DeleteComment" id="DeleteComment'.$row['Comment_id'].'" hidden>  ';

   echo '<label for="DeleteComment'.$row['Comment_id'].'"  aria-hidden="true" class="deletecomlab" id="DeleteCommentlab'.$row['Comment_id'].'">حذف</label>';
   echo '	<button type="button" name="settingsbtn" id="'.$row['Comment_id'].'" class="settingsbtn" onclick="optionscom(this.id)"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>';
echo '</form>';
   }

echo "</div>";


   //echo ' <button id="deletepic1" type="button" name="DeleteComment" class="closepic" onclick="DeleteComment('.$row['Comment_id'].')"> &times; </button> ';
   echo '</div>';

}

}
else  if ($this->Check_Session_Isset() && $this->Type =="worker"  ) { echo' <p> أضف أول تقييم </p>'; }
       else if ($this->Check_Session_Isset() && $this->Type !="worker"  ) echo '<p> حساب زبون  </p>';
	       else echo '<p> لايوجد اي تقييم  </p>';
}

}



function Get_Nbr_All_Users(){

$sql="SELECT COUNT(*)
FROM users";

$users = mysqli_query($db, $sql);

return $users ;

	}








?>
