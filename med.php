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
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="assets/nav_style.css">

</head>
<body>
    
    
<div class="container_1">

    <h1 class="heading">Medicines</h1>

    <div class="box-container">

        <div class="box">
            <img src="https://thumbs.dreamstime.com/b/medizinische-tabletten-einzelne-ikone-der-medizin-im-karikaturartvektorsymbolvorrat-illustrationsnetz-90533276.jpg">
            <h3>Tablet </h3>
            
            <a href="#" class="btn">Buy here</a>
        </div>

        <div class="box">
            <img src="https://thumbs.dreamstime.com/b/open-capsule-pills-isolated-white-41765730.jpg">
            <h3>Capsules</h3>
           
            <a href="#" class="btn">Buy here</a>
        </div>

        <div class="box">
            <img src="https://th.bing.com/th/id/OIP.UyZBrh0-FHW7kCgGIHE3SQHaEK?pid=ImgDet&rs=1">
            <h3>Liquid</h3>
            
            <a href="#" class="btn">Buy here</a>
        </div>

        
        <div class="box">
            <img src="https://thumbs.dreamstime.com/b/medicine-drops-sight-line-icon-vector-medicine-drops-sight-line-icon-symbol-sign-illustration-design-isolated-white-146890014.jpg">
            <h3>Drops</h3>
            
            <a href="#" class="btn">Buy here</a>
        </div>
     
  <div class="box">
            <img src="https://media.istockphoto.com/vectors/asthama-puff-pressurized-metereddose-inhaler-stock-icon-vector-id1198712331?k=6&m=1198712331&s=612x612&w=0&h=P8gA8QzFE7YBocDQznRo6tbcJd3NGx14JUysf5Kf6s4=">
            <h3>Inhalers</h3>
            
            <a href="#" class="btn">Buy here</a>
</div>
       <div class="box">
            <img src="https://media.istockphoto.com/vectors/syringe-for-injection-with-orange-vaccine-vials-of-medicine-vector-vector-id939825670">
            <h3>Injections</h3>
            <p>Buy here</p>
            <a href="#" class="btn">Buy here</a>
</div>
<div class="box">
            <img src="https://image.freepik.com/free-vector/vector-set-topical-cosmetic-topical-medicine_60352-1138.jpg">
            <h3>Topical medicines</h3>
            
            <a href="#" class="btn">Buy here</a>
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

.container_1{
    background-color:#eee;
    padding:15px 9%;
    padding-bottom: 100px;
}

.container_1 .heading{
    text-align: center;
    padding-bottom: 15px;
    color:black;
    text-shadow: 0 5px 10px rgba(0,0,0,.2);
    font-size: 50px;
}

.container_1 .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap:15px;
}

.container_1 .box-container .box{
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    border-radius: 5px;
    background: #fff;
    text-align: center;
    padding:30px 20px;
}

.container_1 .box-container .box img{
    height: 80px;
}

.container_1 .box-container .box h3{
    color:black;
    font-size: 22px;
    padding:10px 0;
}

.container_1 .box-container .box p{
    color:black;
    font-size: 15px;
    line-height: 1.8;
}

.container_1 .box-container .box .btn{
    margin-top: 10px;
    display: inline-block;
    background:#333;
    color:white;
    font-size: 17px;
    border-radius: 5px;
    padding: 8px 25px;
}

.container_1 .box-container .box .btn:hover{
    letter-spacing: 1px;
}

.container_1 .box-container .box:hover{
    box-shadow: 0 10px 15px rgba(0,0,0,.3);
    transform: scale(1.03);
}

@media (max-width:768px){
    .container_1{
        padding:20px;
    }
}
</style>
</html>