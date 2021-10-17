<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
    body {
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background:url("background.jpg");
}
.card {
  display: grid;
  grid-template-columns: 220px;
  grid-template-rows: 210px 210px 80px;
  grid-template-areas: "image" "text" "stats";

  border-radius: 18px;
  background: white;
  box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
  font-family: roboto;
  text-align: center;
  

  transition: 0.5s ease;
  cursor: pointer;
  margin:30px;
}
.card-image {
  grid-area: image;
  background: url("cart4.jpg");
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  background-size: cover;
}

.card-text {
  grid-area: text;
  margin: 25px;
}
.card-text .date {
  color: rgb(255, 7, 110);
  font-size:13px;
}
.card-text p {
  color: grey;
  font-size:13px;
  font-weight: 300;
}
.card-text h2 {
  margin-top:0px;
  font-size:18px;
}
.card-stats {
  grid-area: stats; 
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  background: rgb(255, 7, 110);
}
.card-stats .stat {
  padding:10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  color: white;
}
.card-stats .border {
  border-left: 1px solid rgb(172, 26, 87);
  border-right: 1px solid rgb(172, 26, 87);
}
.card-stats .value{
  font-size:11px;
  font-weight: 500;
}

.card-stats .type{
  font-size:11px;
  font-weight: 300;
  text-transform: uppercase;
}
.card:hover {
  transform: scale(1.15);
  box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
}


img{
    height:3cm;width:3cm;
}
    </style>

<body>
<?php

$servername="localhost";
$username="root";
$password="";
$database="product1";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());

}
$sql="SELECT * FROM `item5`";
$result=mysqli_query($conn,$sql);
//records returned
$num= mysqli_num_rows($result);

//display
if($num>0){
   
while($row=mysqli_fetch_assoc($result)){

echo "<div class=card><div class=card-image></div><div class=card-text>
        <span class=date><a href=p5l".$row['S_no'].".php>"."MYNTRA-SALE</a></span>
        <h2>".$row['V_name']."</h2>
       <p> Address:".$row['V_address']."</p>
      </div>
      <div class=card-stats>
        <div class=stat>
          <div class=value>".$row['Pincode']."</div>
          <div class=type>Pincode</div>
        </div>
        <div class=stat border>
          <div class=value>".$row['Availability']."</div>
          <div class=type>Availiblity status</div>
        </div>
        <div class=stat>
          <div class=value>".$row['Chng_room']."</div>
          <div class=type>Changing room</div>
        </div>
      </div></div>";
}

}
else{
    echo "0 result";
}
$conn->close();
?>


</body>


</html>



