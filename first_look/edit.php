<?php

            include_once("header.php");

            include_once("connect.php");



                                                                                        //id wird je nach login abfrage geändert
            $select = 'SELECT about_me, story, appearance, links, images FROM page Where id = 13';



            $result = $database->query($select);
    	    $result = $result ->fetch_object();

            $about_me  = $result ->about_me;
            $story = $result ->story;
            $appearance =$result ->appearance;
            $links = $result ->links;
            $images = $result ->images;




           


            echo '<div id="edit">';
            
            echo '<form method="post" action="update.php">';
 
            echo '<div><h2>About me</h2><textarea cols="80" rows="8" name="about_me" >'.$about_me.'</textarea></div>';

            echo '<div><h2>Story</h2><textarea cols="80" rows="8" name="story">'.$story.'</textarea></div>';

            echo '<div><h2>Appearance</h2><textarea cols="80" rows="8" name="appearance">'.$appearance.'</textarea></div>';

            echo '<div><h2>Links</h2><textarea cols="80" rows="8" name="links">'.$links.'</textarea></div>';

            echo '<div><h2>Images</h2><textarea cols="80" rows="8" name="images">'.$images. '</textarea></div>';

            echo '<div style="text-align: end;"><button id="updateData" href="update.php" type="submit" >UPDATE PAGE</button>';

            echo '</form>';


            echo "</div>";



            //es wird ois ausi glesn und in a "edit" formular übergebn
            //sobald des formular wieder zruck gschickt wird dp aktuallisiert

?>