<?php

function getNews()
{
    include("db-conn.php");

    try {
        $statement = $conn->query(
            '
            SELECT *
            FROM news
            ORDER BY STR_TO_DATE(date, "%D %M %Y") DESC
            LIMIT 3 
            '
        );
        return $statement->fetchAll();
    }
    catch (PDOException $e)
    {
        echo 'Database query failed: ' . $e->getMessage();
        exit;
    }
}

function articleContent($image, $imageAlt, $title, $readTime, $info, $type, $authorImage, $authorName, $date, $counter)
{

     return ' <div class="article' . $counter . '">
    <a href="#">
      <div class="tag-container">
        <p class="tag-' . $counter . '">' . $type . '</p>
      </div>
      <img src="' . $image . '" alt="' . $imageAlt . '">
      <div class="article-container">
        <h4 class="article-title' . $counter . '">
            ' . $title . '
          <span>' . $readTime . '</span>
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
                                    $article['type'], 
                                    $article["author_image"], 
                                    $article["author_name"], 
                                    $article["date"], 
                                    $article["counter"]);
            }
        ?>
    </div>


