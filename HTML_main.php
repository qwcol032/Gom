<!doctype html>

<html>
  <head>
    <title>Gom's web page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1><a href="index.php" style="color:#674040;">곰돌이의 웹 페이지</a></h1>
    <table style="border-collapse: collapse; width:100%; background:#9e8b8b;">
      <tr style="display:grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">
        <th><a href="index.php">Information</a></th>
        <th style="background:#734a4a;"><a href="HTML_main.php?id=HTML_main">HTML</a></th>
        <th><a href="CSS.php">CSS</a></th>
        <th><a href="https://www.w3schools.com/" target="_blank">W3Schools</a></th>
        <th><a href="https://opentutorials.org/" target="_blank">Opentutorials</a></th>
      </tr>
    </table>
    <div id="grid">
      <ul style="background:#9e8b8b;">
        <li><a href="HTML_main.php?id=HTML_main">HTML</a></li>
        <li><a href="HTML_main.php?id=html">&lt;html&gt;</a></li>
        <li><a href="HTML_main.php?id=head">&lt;head&gt;,&lt;body&gt;</a></li>
        <li><a href="HTML_main.php?id=title">&lt;title&gt;</a></li>
        <li><a href="HTML_main.php?id=meta">&lt;meta&gt;</a></li>
      </ul>
      <div id="article">
        <?php
        echo file_get_contents("date/".$_GET['id']);
        ?>
      </div>
    </div>
  </body>
</html>
