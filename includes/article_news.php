<?php

function getNews()
{
    $env = parse_ini_file('db.env');
    $host = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $username = $env["DB_USER"];
    $password = $env["DB_PASSWORD"];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
        $statement = $conn->query(
            '
            SELECT *
            FROM news
            LIMIT 3 
            '
        );
       //echo 'Query success';
        return $statement->fetchAll();
    }
    catch (PDOException $e)
    {
        echo 'Database query failed: ' . $e->getMessage();
        exit;
    }
}

function articleContent($image, $imageAlt, $title, $readTime, $info, $authorImage, $authorName, $date, $counter)
{
     // tag-1 , tag-2, tag-3  = "tag-' . $counter . '"
     // <img src="img/how-are-mobile-Zikv.jpg" alt="5 mobile application benefits"> = src="' . $image . '" && alt="' . $imageAlt . '"
     // article-title1 = article-title 
     //  How are Mobile Applications Benefiting the... = ' . $title . '
     // - 4 minute read = ' . $readTime . '
     // In the modern world, it is common practice that our days are becoming filled with short breaks in...= ' . $info . '
     // <img src="img/netmatters-ltd-VXAv.png" alt="author avatar" class="author-img"> ' . $authorImage . ' 
     // 12th October 2023 = ' . $date . '

     return ' <div class="article' . $counter . '">
    <a href="#">
      <div class="tag-container">
        <p class="tag-' . $counter . '">news</p>  
      </div>
      <img src="' . $image . '" alt="' . $imageAlt . '">
      <div class="article-container">
        <h4 class="article-title' . $counter . '">
            ' . $title . '
          <span><br>' . $readTime . '</span>
        </h4>
        <p class="article-description">' . $info . '</p>
        <p class="readmore' . $counter . '">read more</p>
       <hr>
        <div class="authors">
          <img src="' . $authorImage . '" alt="author avatar" class="author-img">
          <div>
            <p>Posted by ' ." " . ' ' . $authorName . '</p>
            <p class="date">' . $date . '</p>
          </div>
        </div>
      </div>
    </a>
  </div>
  ';
}
?>

    <div class="news-container">
        <?php
            foreach(getNews() as $article)
            {
                echo articleContent($article["image"],
                                    $article["image_alt"], 
                                    $article["title"], 
                                    $article["read_time"], 
                                    $article["info"], 
                                    $article["author_image"], 
                                    $article["author_name"], 
                                    $article["date"], 
                                    $article["counter"]);
            }
        ?>
    </div>


