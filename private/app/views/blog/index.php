<h1>Blog Posts</h1>

<ul>

<?php

        foreach($posts as $posts){
            echo("<li><a href=\"\\blog\\read\\" . $post["slug"] . "\">" . $post["title"] . " </a> - <time>" . $post["post_date"] . "</time>");
        }


?>
</ul>