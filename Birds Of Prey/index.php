<?php  


 ?>  

<!DOCTYPE html>
<html>
<head>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:red;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 80px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: blue;
}

.active {
    background-color: #4CAF50;
}




div.container1 {
width: 96.5%;
margin-top: ;
margin-bottom:10;
margin-left:1px;
height: 198px;
border: 2px solid #ADD8E6;
background-color: #ADD8E6;
Padding:25px;
Float:right;
text-align:centre;
}


}

div.clearMe


{

clear;both;

}


div.container3 {
width: 96.5%;
margin-top: ;
margin-bottom:10;
margin-left:1px;
height: 900px;
top:60px;
border: 2px solid #ADD8E6;
background-color: white;
Padding:30px;
float:right;
text-align:center;
}

div.container4 {
width: 96.5%;
margin-top: ;
margin-bottom:10;
margin-left:1px;
height: 105px;
border: 2px solid #ADD8E6;
background-color: purple;
Padding:30px;
float:right;
}

div.container5 {                    
border: 4px solid black;
padding: 140px;
width:100px;
height:50px;
text-align: justify;
Float:right;
}

div.container6 {                    
border: 4px solid black;
padding: ;
width:600px;
height:500px;
text-align: justify;
Float:left;
color:black;
}

div.container7 {                    
border: 2px solid ;
padding: 169px;
width:50px;
height:50px;
text-align: justify;
Float:right;
}



</style>
</head>
<body>

<div class="container1">

<!-- //First part of page -->
<?php  
session_start();
$connect = mysqli_connect("localhost", "root", "", "mydbamar");  
 $query = "SELECT images4 FROM images";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
 echo '  
<tr>  
<td>  
<img src="data:image/jpeg;base64,'.base64_encode($row['images4'] ).'" height="180" width="1050" class="img-thumnail" />

</td>  
</tr>  
';  
}  
?>  

<div style="width: 100px; float:right; text-align: center; display: inline-block;"><div style="margin: 0px 0px 0px; border: 1px solid rgb(204, 204, 204); border-image: none; text-align: center; display: inline-block; background-color: rgb(255, 255, 255);"><a style="color: rgb(242, 15, 15); font-size: 13px; text-decoration: none;" href="http://localtimes.info/Europe/United_Kingdom/Bradford/"><img style="border:0;margin:0;padding:0"="" border=0="" src="http://localtimes.info/images/countries/gb.png"=""></a></div><script src="http://localtimes.info/clock.php?continent=Europe&country=United Kingdom&city=Bradford&cp1_Hex=f20f0f&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=118&ham=0&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=120" type="text/javascript">null</script><?php

$validuser=$_SESSION["validuser"];
    echo "valid user";
    

?><br><a href="Logout.php">Logout</a></div>

<!-- //clock -->

<nav>
     <ul>
         <li><a href="Page 1 (Homepage).php">Homepage</a><li>
         <li><a href="Page 2 (Login).php">Login</a><li>
         <li><a href="Page 3 (Registration).php">Registration</a><li>
         <li><a href="Page 4 (Bird Ownership).php">Bird Ownership</a><li>
         <li><a href="Page 5 (InsertBird).php">Insert A Bird</a><li>
     </ul>
</nav>

<!-- // these are the navigation links -->

 </div>

<div class="container3">

<!-- //middle part of the page -->

<?php  
 $query = "SELECT images5 FROM images";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
 echo '  
<tr>  
<td>  
<img src="data:image/jpeg;base64,'.base64_encode($row['images5'] ).'" height="140" width="780" class="img-thumnail" />

</td>  
</tr>  
';  
}  
?>  
<br>
<br>   
<br>
<br> 
 
<div class="container5">

<!-- //Text box 1 -->

<p>This is a paragraph.</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php  
 $query = "SELECT images1 FROM images";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
 echo '  
<tr>  
<td>  
<img src="data:image/jpeg;base64,'.base64_encode($row['images1'] ).'" height="150" width="200" class="img-thumnail" />

</td>  
</tr>  
';  
}  
?> 
</div>


<div class="container6"> 

<!-- //Text box 2 -->
<p>This is a paragraph.</p>
Welcome to our website. Birds of prey is the largest birds of prey owners group in the UK. We have decided to decided to setup a website for its members

</div>



</div>


<!-- //Invisible div -->



</div>


<div class="container4">

 <!-- //Bottom part of the page -->

<a href="https://en-gb.facebook.com/"><img width="100" height="100" hspace="110" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Facebook_icon.svg/2000px-Facebook_icon.svg.png">  

<a href="https://www.google.com/intl/en-GB/mail/help/about.html"><img width="100" height="100" hspace="110" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Antu_gmail.svg/2000px-Antu_gmail.svg.png">

<a href="https://twitter.com/?lang=en-gb"><img width="100" height="100" hspace="110" src="https://cdn.worldvectorlogo.com/logos/twitter-4.svg">

<a href="https://www.bradfordcollege.ac.uk/"><img width="100" height="100" hspace="110" src="http://www.startingoutguide.org.uk/wp-content/uploads/2014/07/Bradford-College-Logo.jpg">
 
</div>
 
 </body>
</html>




 



 

 



 





 



 










 



 



 

 



 





 



 


