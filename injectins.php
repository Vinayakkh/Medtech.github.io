<!DOCTYPE html>
<html lang="en">
    <?php
    include('navbar.html');
    ?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style type="text/css">
	#tfheader{
		background-color:#c3dfef;
	}
	#tfnewsearch{
		float:right;
		padding:20px;
	}
	.tftextinput{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton {
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
.tfbutton::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
</style>

</head>
<body>
<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>
    
<div class="container">

    <h1 class="heading">Injections</h1>

    <div class="box-container">
<div class="box">
            <img src="https://th.bing.com/th?id=OPA.HWw1NbvXOnJOLw474C474&w=272&h=272&o=5&pid=21.1">
            <h3>Sofu A3.5</h3>
            <p>₹21,45 delivery</p>
            <a href="https://www.bing.com/shop/productpage?q=injections+amazon+shop&filters=scenario%3a%2217%22+gType%3a%2212%22+gId%3a%2213051223341%22+gIdHash%3a%220%22+gGlobalOfferIds%3a%2213051223341%22+AucContextGuid%3a%220%22+GroupEntityId%3a%2213051223341%22+NonSponsoredOffer%3a%22True%22&productpage=true&FORM=SHPPDP&browse=true">Order now </a>
        </div>
<div class="box">
            <img src="https://th.bing.com/th?id=OPA.HWw1NbvXOnJOLw474C474&w=272&h=272&o=5&pid=21.1 ">
            <h3>Sofu A1</h3>
            <p>₹17,43</p>
            <a href="https://www.bing.com/shop/productpage?q=injections+amazon+shop&filters=scenario%3a%2217%22+gType%3a%2212%22+gId%3a%2213051223324%22+gIdHash%3a%220%22+gGlobalOfferIds%3a%2213051223324%22+AucContextGuid%3a%220%22+GroupEntityId%3a%2213051223324%22+NonSponsoredOffer%3a%22True%22&productpage=true&FORM=SHPPDP&browse=true">Order now</a>
        </div>

</body>
<style>
*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

.container{
    background-color:#eee;
    padding:15px 9%;
    padding-bottom: 100px;
}

.container .heading{
    text-align: center;
    padding-bottom: 15px;
    color:black;
    text-shadow: 0 5px 10px rgba(0,0,0,.2);
    font-size: 50px;
}

.container .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap:35px;
}

.container .box-container .box{
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    border-radius: 10px;
    background: #fff;
    text-align: center;
    padding:30px 20px;
}

.container .box-container .box img{
    height: 150px;
}

.container .box-container .box h3{
    color:black;
    font-size: 30px;
    padding:10px 0;
}

.container .box-container .box p{
    color:black;
    font-size: 15px;
    line-height: 1.8;
}

.container .box-container .box .btn{
    margin-top: 10px;
    display: inline-block;
    background:#333;
    color:white;
    font-size: 17px;
    border-radius: 5px;
    padding: 8px 25px;
}

.container .box-container .box .btn:hover{
    letter-spacing: 1px;
}

.container .box-container .box:hover{
    box-shadow: 0 10px 15px rgba(0,0,0,.3);
    transform: scale(1.03);
}

@media (max-width:768px){
    .container{
        padding:20px;
    }

/* unvisited link */
a:link {
  color: green;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: red;
}

/* selected link */
a:active {
  color: yellow;
} 
}
</style>
</html>