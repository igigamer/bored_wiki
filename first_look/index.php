
<!DOCTYPE html>
<html>

    <head>
        <meta charset= "utf-8">
        <title>Ape Wiki</title>
    </head>


<body>

<?php include('header.php'); ?>

<main>



<button method="post" name="edit" class="enableEthereumButton">Login</button>

<h2>Account: <span class="showAccount"></span></h2>


  <div id="navi">
        <ul>
          <li>SEARCH</li>
          <li><a href="wikipage.php?id=69" ><button>Mei Page</button></a></li>
          <li>Random APE</li>
          <li>BAYC</li>
          <li>How to get an Ape</li>
          <li>Kennel</li>
          <li>Friends and Family</li>
        </ul>
  </div>  


  <?php include('opensea.php');
  
  
  
  
  
  ?>

<div id="apeOfTheDay"> APE OF THE DAY</div>


</main>



<?php include('footer.php'); ?>