<?php

  include('newsStore.php');
  include('./view/section.php');
  include('./view/description.php');
  include('./view/date.php');
  
  function showNews() {
    echo renderSection('<h2>News</h2>');
    $listNews = getNews();  
    
    foreach($listNews as $news) {
      $title = "<h3>".$news[1]."</h3>";
      $dateToFormat = new DateTime($news[3]);
      $date = $dateToFormat->format('d/m/Y');
      $time = $dateToFormat->format('H:i');

      echo renderSection($title);
      echo renderDate($date.' as '.$time);
      echo renderDescription($news[2]);
    }
  }
