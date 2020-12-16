<?php include_once("cnt_visitor.php");?>

<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <meta name = "description" content = "main page">
  <title>Youties</title>
  <link rel = "stylesheet" href = "main.css">
  <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
  <div id = "wrapper">
    <header id = "main_header">
      <a class = "top_menu" href = "main.html" target = "_top">SIGN UP</a> <!--signup페이지로 연결-->
      <a class = "top_menu" href = "main.html" target = "_top">SIGN IN</a> <!--signin페이지로 연결-->
    </header>
  </div>
  <form class = 'search' action = "search.php" method = "GET">
  <div id = "main_logo">
    <img src = "logo2.png" border = "0">
  </div>
  <div>
    <p id = "main_info">REVIEWS: &nbsp&nbspCHANNELS: &nbsp&nbspMEMBERS: &nbsp&nbspVISITORS: <?php echo $today_visit_count?>&nbsp&nbsp</p>
  </div>
  <div id = "main_search">
    <input type = "text" class = "search_word" name = "keyword" id = "keyword" autocomplete = "off" autofocusplaceholder = "Type Channel Name">
    <button type = "button" class = "search_btn" name = "click_btn" value = "">
      <i class = "fas fa-search"></i>
    </button>
  </div>
  <div class = "keyword_list">
    <ul class = "list-group" id = "list"></ul>
  </div>
</form>
<script type="text/javascript" src="main.js"></script>

</body>
</html>