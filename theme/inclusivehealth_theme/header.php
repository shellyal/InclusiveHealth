<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <?php 
    wp_head();
   ?>
   
    <title>Home</title>
  </head>
  <body>
    <div class="banner">
      <nav>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">InclusiveHealth</label>
        <ul class="navigation">
          <li class="navigation__li">
            <a href="index.html" class="navigation__a current">Home</a>
          </li>
          <li class="navigation__li">
            <a href="article.html" class="navigation__a">Articles</a>
          </li>
          <li class="navigation__li">
            <a href="ask-me.html" class="navigation__a">Forum</a>
          </li>
          <li class="navigation__li">
            <a href="about.html" class="navigation__a">About</a>
          </li>
        </ul>
      </nav>