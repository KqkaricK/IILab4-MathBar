<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main2.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src ="js/myjs.js"></script>

    <title>MathBar</title>
  </head>
  <body>
    <div class="container-fluid">
    	<header>
    		<div class="row no-gutters menu">
    			<div class="col-md-3">
    				<a href="index.php"><img src="img/logo.png"></a>>
    			</div>
    		
	    		<div class="col-md-6">
	    		<nav class="d-flex justify-content-center">
		    		<ul>
		    			<li><a href = "menu.html">Меню</a></li>
		    			<li><a href = "contacts.html">Контакты</a></li>
		    		</ul>
		    		
		    	</nav>
		    	</div>
    		</div>
    	</header>  
	</div>
  	<div class="aboutShortly">
  		<h1>Ресторан «MathBar»</h1>
  		<p>— это первый математический ресторан в центре Новокузнецка! За кухню в «MathBar» отвечает шеф-повар Серёга. Он настоящий гуру «математической кухни». Наши гастрономические принципы: мы трепетно относимся к выбору продуктов, сотрудничаем с лучшими фермерскими хозяйствами нашей страны. Каждый день наши повара делают свежую домашнюю еду исключительно вручную. Для дорогих гостей мы готовим все блюда в стиле различных математических функций.</p>
	</div>
	<div class="pif">
	<?php
echo readfile("counter.txt");
?>
		<h1>Калькулятор Теоремы Пифагора</h1>
		  <form class="forma" method="post">
			<p>a = </p>
			<input type="number" size="100" name="a">
			<p>b = </p>
			<input type="number" size="100" name="b">
			<p></p>
			<input type="submit">
		   </form>
		   <p></p>
		   <?php
		   error_reporting( 0 );
           if (!empty($_POST['a'] && $_POST['b']))
                {
                    $k1 = $_POST['a'];
                    $k2 = $_POST['b'];
                    $gipotenuza = sqrt($k1*$k1 + $k2*$k2);
                    echo round($gipotenuza, 8);
                }
            ?>
	</div>
  </body>
   <div class="container-fluid">
    	<footer>
    		<div class="row no-gutters menu">
    			<div class="col-md-3">
    				<a href="index.php"><img src="img/logo.png"></a>>
    			</div>
    		
	    		<div class="col-md-6">
	    		<nav class="d-flex justify-content-center">
		    		<ul>
		    			<li><a href = "menu.html">Меню</a></li>
		    			<li><a href = "contacts.html">Контакты</a></li>
						<li><?php
			                 date_default_timezone_set('UTC');
			                echo '<p style="color: white">' . date('l jS \of F Y h:i:s A') . '</p>' ;
                            ?></li>
		    		</ul>
		    	</nav>
		    	</div>
    		</div>
    	</footer>  
	</div>
</html>