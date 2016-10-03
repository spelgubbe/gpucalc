<!--<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="calculate-gflops.php">Calculate GFLOPS</a></li>
		<li><a href="calculate-pixel-fill.php">Calculate Pixel Fillrate</a></li>
		<li><a href="calculate-texture-fill.php">Calculate Texture Fillrate</a></li>
		<li><a href="#">Compare</a></li>
		<li><a href="#">About</a></li>
	</ul>
</nav>-->
<!--<a class="navbar-brand" href="index.php">GPU Stats Calculator</a>-->
  <div class="jumbotron">
    <h1>GPU Stats</h1>
    <p>Graphics card performance calculations and comparisons</p>
  </div>
  <ul class="nav nav-tabs">
  <li role="presentation" class="<?php file_active('index');?>">
    <a href="index.php">Home</a>
  </li>
  <li role="presentation" class="<?php file_active('calculate-gflops');?>">
    <a href="calculate-gflops.php">Calculate GFLOPS</a>
  </li>
  <li role="presentation" class="<?php file_active('calculate-pixel-fill');?>">
    <a href="calculate-pixel-fill.php">Calculate Pixel Fillrate</a>
  </li>
  <li role="presentation" class="<?php file_active('calculate-texture-fill');?>">
    <a href="calculate-texture-fill.php">Calculate Texture Fillrate</a>
  </li>
  <li role="presentation" class="<?php file_active('compare');?>">
    <a href="#">Compare</a>
  </li>
  <li role="presentation" class="<?php file_active('about');?>">
    <a href="#">About</a>
  </li>
</ul>