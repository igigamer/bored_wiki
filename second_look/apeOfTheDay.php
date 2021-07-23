<?php   

        include_once("connect.php");


        

        $randApe = 'SELECT * FROM page WHERE id='. rand(0,10000).'';


        $result = $database->query($randApe);
        $result = $result ->fetch_object();


        $about_me  = $result ->about_me;
        $profile = $result->profile_pic;
        $id = $result->id;





        echo '<div><div class="frame"><a href="wikipage.php?id='.$id.'"> <img src="images/frame.png"></a></div> <div class="frameApe"><img src="' . $profile. '"></div></div>';


























?>



