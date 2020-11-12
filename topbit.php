<!DOCTYPE HTML>

<html lang="en">
    
<?php
    
    session_start();
    include("config.php");
    include("functions.php"); // include data sanitising
    // Connect to database
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }
    
?>

<head>
    <meta charset="UTF-32">
    <meta name="description" content="Book reviews database">
    <meta name="keywords" content="books, reading, fiction, non-fiction, author, genre, review, rating">
    <meta name="author" content="Svitlana Shcherbyna">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Food reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/food_style.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="Images/food_image.jpg" width="150" height="150" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Food fusion planet</h1>
        </div>    <!-- / banner -->
	
	<div class="box side">
		<h2>Search |<a class="side" href="show_all.php">Show all</a></h2>
        <i>Type part of the dish name / meal if desired</i><br/>
        <br/>
        
        <!-- Start of Dish name Serach -->
        <form method="post" action="dish_name_search.php" enctype="multipart/form-data">
            
            <input class="search" type="text" name="dish_name" size="40" value="" required placeholder="Dish name..."/>
            
            <input class="submit" type="submit" name="find_dish_name" value="Search" />
            
            
        </form>
        
        
        <!-- End of Dish name Search --> <br/>
        
        <!-- Start of Meal Search -->
        <form method="post" action="meal_search.php" enctype="multipart/form-data">
            
            <select name="meal" required>
                <option value="" disabled selected>Meal...</option>
                <option value="Breakfast">Breakfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Dinner">Dinner</option>
                <option value="Dessert">Dessert</option>
                
                
            </select>
            
            <input class="submit" type="submit" name="find_meal" value="Search" />
            
            
        </form>
        
        <br />
        <!-- End of Meal Search -->
        
        <!-- Start of Place Search -->
        <form method="post" action="place_search.php" enctype="multipart/form-data">
            
            <input class="search" type="text" name="place" size="40" value="" required placeholder="Place..."/>
            
            <input class="submit" type="submit" name="find_place" value="Search" />
            
            
        </form>
        
        
        <!-- End of Place Search --> <br/>
        
        <!-- Start of Ratings form -->
        <form method="post" action="rating_search.php" enctype="multipart/form-data">
            
            <select class="half_width" name="amount">
                <option value="exactly" selected>Exactly...</option>
                <option value="more">At least...</option>
                <option value="less">At most...</option>      
            </select>
            
            <select class="half_width" name="stars">
                <option value=1>&#9733;</option>
                <option value=2>&#9733;&#9733;</option>
                <option value=3>&#9733;&#9733;&#9733;</option>
                <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
            </select>
            
            <input class="submit" type="submit" name="find_rating" value="Search" />
            
            
        </form>
        
        <br />
        <!-- End of Ratings form -->
        
        
        <!-- Start of Vegetarian Serach -->
        <form method="post" action="vegetarian_search.php" enctype="multipart/form-data">
            
            <select name="vegetarian">
                <option value="vegetarian" selected>Vegetarian</option>
                <option value="non-vegetarian">Non-vegetarian</option>     
            </select>
        
            
            <input class="submit" type="submit" name="find_vegetarian" value="Search" />
            
            
        </form>
        
        <br />
        <!-- End of Vegetarian Search -->
        
	</div> <!-- / side bar  --> 