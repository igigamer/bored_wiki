

<?php include('header.php'); ?>

<body id="wikiPage">


<div id="results-display"></div> 



<?php 

include_once("connect.php");

$profile = "SELECT profile_pic FROM page Where id=".$_GET["id"]."";
$profile = $database->query($profile);
$profile =  $profile->fetch_object();
$profile = $profile->profile_pic;  


$about_me = "SELECT about_me FROM page Where id =".$_GET["id"]."";
$about_me  = $database->query($about_me);
$about_me  =  $about_me ->fetch_object();
$about_me  = $about_me ->about_me;


$story = "SELECT story FROM page Where id =".$_GET["id"]."";
$story  = $database->query($story);
$story = $story ->fetch_object();
$story  = $story ->story;

$appearance = "SELECT appearance FROM page Where id =".$_GET["id"]."";
$appearance  = $database->query($appearance);
$appearance =   $appearance ->fetch_object();
$appearance  =  $appearance ->appearance;


$database->close();


?>
<div id="navTopBar">

    <div class="navArrow">
        <a href="wikipage.php?id=<?php echo $_GET["id"]-1 ?>"><button>left neighbor</button></a>
        <a></a>
        <a href="wikipage.php?id=<?php echo $_GET["id"]+1 ?>"><button>right neighbor</button></a>
    </div>

</div>



<div class="container">

  <div class="profilePic">

  <div><p class="apeIdWiki">#<?php echo $_GET["id"] ?></p>
        <img id="apePicWiki" src="<?php echo $profile ?>">
  </div>
  </div>
    <div class="traits">
    <h2>Traits</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore unde accusamus similique qui repudiandae impedit consectetur sit, maiores architecto obcaecati, magni asperiores repellat excepturi vitae nihil ad molestiae sequi laboriosam.</p>
  </div> 
  
  <div class="about-me">
    <h2>About me</h2>
    <p><?php echo $about_me?></p>
  </div>
  <div class="story">
    <h2>Story</h2>
    <p><?php echo $story?></p>
  </div>
  <div class="appearance">
    <h2>Appearance</h2>
    <p><?php echo $appearance?></p>
  </div>
  <div class="gallery">
        <h2>Gallery</h2>
        
  </div>
</div>


</body>



<?php include('footer.php'); ?>