<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        
        /* styling the footer in which the view cart button appears */
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;

            color: white;
            text-align: right;
        }

        /* styling the shopping cart */
        .cart {
            background-color: #212121;
            color: white;
            margin-top: 10px;
            font-size: 12px;
            font-weight: 900;
            width: 100%;
            height: 39px;
            padding-top: 9px;
            box-shadow: 0px 5px 10px #212121
        }

        /* styling the select multiple and add to cart buttons
           the height line ensures both are the same size */
        .SelectAndButton {
            border: 1px solid gray;
            padding: .4em .6em;
            margin: 0;
            height: 40px;  
        }
        
        /* more add to cart button styling */
        .AddToCart {
            border: 5px solid red;
            background-color: antiquewhite;
        }
        /*styling for the fluid container class */
        .container-fluid {
            border-top: 5px solid black;
            padding: 50px;
        }
        /* styling for the first row of merchandise */
        .merchRow1 {
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding: 10px;


        }
        
        /* styling for the second row of merchandise */
        .merchRow2 {
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding: 10px;


        }
        /* formatting the product images so they all appear the same size on the page */
        .imageFormat {
            height: 400px;
            padding: 40px;

        }
        
       
        /* changin font colour of links in nav-bar to black */
        .nav-link {
            color: black;
        }
    </style>

    <title>Caoivín's Website</title>
</head>

<body>

    <?php
	
		//Create a database connection
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpassword = "";
		$dbname = "G00398309";

		$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		
		//Test if connection occoured
		if(mysqli_connect_errno()){
			die("DB connection failed: " .
				mysqli_connect_error() .
					" (" . mysqli_connect_errno() . ")"
					);
		}

		if (!$connection)
			{
				die('Could not connect: ' . mysqli_error());
			}
		
		    
		    //This query is looking for the entire row from the ITEMS table where the ID is 1
            //Query is then saved as a variable
			$sql1 = "SELECT * FROM items WHERE id='1';";
		 
		 
		    //Database is then queried using this query
			$result1 = mysqli_query($connection, $sql1);
			$row1 = mysqli_fetch_assoc($result1);
    
            //This query is looking for the entire row from the ITEMS table where the ID is 3
            $sql3 = "SELECT * FROM items WHERE id='3';";
            $result3 = mysqli_query($connection, $sql3);
			$row3 = mysqli_fetch_assoc($result3);
        
            //This query is looking for the entire row from the ITEMS table where the ID is 4
            $sql4 = "SELECT * FROM items WHERE id='4';";
            $result4 = mysqli_query($connection, $sql4);
			$row4 = mysqli_fetch_assoc($result4);
    
            //This query is looking for the entire row from the ITEMS table where the ID is 5
            $sql5 = "SELECT * FROM items WHERE id='5';";
            $result5 = mysqli_query($connection, $sql5);
			$row5 = mysqli_fetch_assoc($result5);
            
			
		//Optional: Output the info to the page. Alternatively, you can store this info using javascript below starting on line 53
			
			

		
		// Close database connection
			mysqli_close($connection);
	?>



    <!-- NavBar containing headings and logo  ---->
    <nav class="navbar sticky-top navbar-light bg-light nav justify-content-center ">

        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="#">Events</a>
        <a class="navbar-brand " href="#"><img src=images/logo.png height="100"></a>
        <a class="nav-link merch " href="#merch-anchor">Merch</a>
        <a class="nav-link contact" href="#">Contact</a>

        </div>
  </nav>

 


    
     <!----- Jumbotron containing login button and text-------->
    <div class="jumbotron">

        <form style="text-align:center;">
            <p class="lead" style="text-align:center;" id="please">Please login below to purchase merchandise:</p>
            <button type="button" class="btn btn-info btn-round loginButton1 " data-toggle="modal" data-target="#loginModal" id="loginButton">
                Login
            </button>
            <p style="text-align:center;" id="welcome">
            </p>

        </form>

        <br>

        <h1 class="display-4" id="myLink" style="text-align:center;">Meet Caoivín </h1>
        <p class="lead" style="text-align:center;">A contemporary traditional Irish music artist from Dublin</p>
        <br>
        <hr class="my-4">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/o6gRfKgEEAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p style="text-align:center;"> </p>
        <p class="lead">

        </p>
    </div>
    <!----- Login modal which pops up when login button is pressed-------->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-title text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="d-flex flex-column text-center">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="username" name="user" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="pass" placeholder="Password">
                            </div>
                            <button type="button" class="btn btn-info btn-block btn-round" onclick="login()">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--- Second jumbotron containing paragraph taken from featured blog post --->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <p class="lead" style="text-align:center;">"Having begun his musical journey aged five, an upbringing drenched in traditional Irish music, Wade has finally channeled all of his experience into his own solo venture. This single is the first example and if this is the benchmark of what’s to come, I’m going to spending a lot more time writing about this guy. If the music continues in this lofty vein, I’ll even consider forgiving the rogue usage of ‘v’ for Caoimhín. Maybe…"</p>
            <p class="lead" style="text-align:center;"> - The Sound Sniffer</p>
        </div>
    </div>


    <!--- Carousel containing artist images ---->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="images/Second.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Seventh.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Eight.jpg" alt="Third slide">
            </div>
        </div>
    </div>


    <!-----    MERCH  ------->
    <div class="container-fluid">
        <h1 id="merch-anchor" class="display-4" style="text-align:center;">Merch</h1>

        <!-----    MERCH ROW 1  ------->
        <div class="merchRow1">
            <figure class="figure">
                <img src="OMD%20premium%20tote.jpeg" class="imageFormat" id="src1">
                 <!-----    Product Description  ------->
                <figcaption class="figure-caption text-center" id="FigCap1.1">A caption for the above image.</figcaption>
                 <!-----    Product Price  ------->
                <figcaption class="figure-caption text-center" id="FigCap2.1">Price: 15</figcaption>
                <figcaption>
                    <br>
                    <div id="SelectOptions">
                        <!--- Select Quantity ----->
                        <select class="form-select SelectAndButton" aria-label="Default select example" name="quantity" id="quantity1">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        
                        <!---- Add to cart button ---->
                        <button type="button" class="btn btn-dark SelectAndButton " data-toggle="modal" data-target="#exampleModalCenter" onclick=addToCart(document.getElementById("quantity1").value,document.getElementById("FigCap1.1").innerHTML,document.getElementById("FigCap2.1").value)>Add To Cart</button>

                    </div>
                </figcaption>

            </figure>
            <figure class="figure">
                <img src="Caoiv%C3%ADn%20T%201.jpeg" class="imageFormat" id="src2">
                <figcaption class="figure-caption text-center" id="FigCap1.2">A caption for the above image.</figcaption>
                <figcaption class="figure-caption text-center" id="FigCap2.2">Price: 15</figcaption>
                <br>
                <div id="SelectOptions">
                    <select class="form-select form-select-lg mb-3 SelectAndButton" aria-label=".form-select-lg example" name="quantity" id="quantity2">

                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                    <button type="button" class="btn btn-dark SelectAndButton" data-toggle="modal" data-target="#exampleModalCenter" onclick=addToCart(document.getElementById("quantity2").value,document.getElementById("FigCap1.2").innerHTML,document.getElementById("FigCap2.2").value)>Add To Cart</button>

                </div>
                
            </figure>

        </div>

        <!-----    MERCH ROW 2  ------->
        <div class="merchRow2">
            <figure class="figure">
                <img src="OMD%20mouse%20pad.jpeg" class="imageFormat" id="src3">
                <figcaption class="figure-caption text-center" id="FigCap1.3">A caption for the above image.</figcaption>
                <figcaption class="figure-caption text-center" id="FigCap2.3">Price: 15</figcaption>

                <br>
                <div id="SelectOptions">
                    <select class="form-select form-select-lg mb-3 SelectAndButton" aria-label=".form-select-lg example" name="quantity" id="quantity3">

                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <button type="button" class="btn btn-dark SelectAndButton" data-toggle="modal" data-target="#exampleModalCenter" onclick=addToCart(document.getElementById("quantity3").value,document.getElementById("FigCap1.3").innerHTML,document.getElementById("FigCap2.3").value)>Add To Cart</button>

                </div>

            </figure>
            <figure class="figure">
                <img src="OMD%20mug.jpeg" class="imageFormat" id="src4">
                <figcaption class="figure-caption text-center" id="FigCap1.4">A caption for the above image.</figcaption>
                <figcaption class="figure-caption text-center" id="FigCap2.4">Price: 15</figcaption>
                <br>
                <div id="SelectOptions">
                    <select class="form-select form-select-lg mb-3 SelectAndButton" aria-label=".form-select-lg example" name="quantity" id="quantity4">

                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <button type="button" class="btn btn-dark SelectAndButton" data-toggle="modal" data-target="#exampleModalCenter" onclick=addToCart(document.getElementById("quantity4").value,document.getElementById("FigCap1.4").innerHTML,document.getElementById("FigCap2.4").value)>Add To Cart</button>

                </div>



            </figure>
        </div>

    </div>


    <!---- footer which contains view cart button ---->
    <div class="footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="ViewCart">
            View Cart
        </button>
    </div>



    <!-- SHOPPING CART MODAL -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Shopping Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBody">

                    <table style="width:100%" id=productTable>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price(€)</th>
                        </tr>


                    </table>
                    <p id="thank-you" style="text-align:center;">Thank you for your order!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="continue" class="btn btn-secondary" data-dismiss="modal">Continue Shopping</button>
                    <button type="button" id="check" class="btn btn-primary" onclick="checkout()">Checkout</button>
                </div>
            </div>
        </div>
    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



    <script>
        //----- PRODUCT OBJECT CONSTRUCTOR
        function NewProduct(productName, productPrice, imageURL) {
            this.name = productName;
            this.price = productPrice;
            this.imgURL = imageURL;
        }
        
        // Retrieving data from database and storing it as product objects
        var product1 = new NewProduct("<?php echo $row1['name'] ?>", "<?php echo $row1['price'] ?>", "<?php echo $row1['imageURL'] ?>");
        var product2 = new NewProduct("<?php echo $row3['name'] ?>", "<?php echo $row3['price'] ?>", "<?php echo $row3['imageURL'] ?>");
        var product3 = new NewProduct("<?php echo $row4['name'] ?>", "<?php echo $row4['price'] ?>", "<?php echo $row4['imageURL'] ?>");
        var product4 = new NewProduct("<?php echo $row5['name'] ?>", "<?php echo $row5['price'] ?>", "<?php echo $row5['imageURL'] ?>");


        //declaring a product object array
        let productArray = [product1];
        productArray.push(product1, product2, product3, product4);



        // iterating through product object array and storing the data in localstorage
        for (var i = 0; i < productArray.length; i++) {
            localStorage.setItem("product" + i, JSON.stringify(productArray[i]));
        }



        //----- FUNCTION THAT LOADS DATA FROM DATABASE TO PAGE
        window.onload = function() {
            //declaring variables needed for function
            var jsonString;
            var retrievedObject;
            var retrievedURL;
            var retrievedName;
            // cycling through localstorage, retrieving data and storing it in variables
            for (var j = 1; j <= 4; j++) {
                jsonString = localStorage.getItem("product" + j);

                // Parse the JSON string back to JS object
                retrievedObject = JSON.parse(jsonString);
                retrievedURL = retrievedObject.imgURL;
                retrievedName = retrievedObject.name;
                var retrievedPrice = retrievedObject.price;
                
                // inserting retrieved data into html code
                document.getElementById("src" + j).src = "images/" + retrievedURL;
                document.getElementById("FigCap1." + j).innerHTML = retrievedName;
                document.getElementById("FigCap2." + j).innerHTML = "€ " + retrievedPrice;
                document.getElementById("FigCap2." + j).value = retrievedPrice;

            }

        }
    </script>
    <script>
        
        
        // LOGIN FUNCTION
        document.getElementById("welcome").style.visibility = "hidden";
        var loggedIn = 0;

        // function that is called when login button is pressed
        function login() {
            // storing inputted username and password data
            var user = document.getElementById("username").value;
            var pass = document.getElementById("password").value;
            
            // hard-coded username and password
            if (user == "JBloggs" && pass == "1234") {
                
                // hide login modal
                $('#loginModal').modal('hide');
                
                //display welcome message
                document.getElementById("please").innerHTML = "Welcome " + user;
                
                // hide login button
                document.getElementById("loginButton").style.visibility = "hidden";
                // set loggedIn boolean = 1
                loggedIn = 1;


            } else {

                alert("Wrong username or password");

            }
        }



        // declaring variables to be used in addToCart() function
        
        var totalPrice = 0;
        var rowIndex = 1;
        var table = document.getElementById("productTable");
        var totalRow = table.insertRow();
        // hide view cart button
        document.getElementById("ViewCart").style.visibility = "hidden";
        
        // insert total price row
        var totalCell1 = totalRow.insertCell(0);
        var totalCell2 = totalRow.insertCell(1);
        var totalCell3 = totalRow.insertCell(2);
        totalCell2.innerHTML = "Total";
        totalCell3.innerHTML = totalPrice;
        totalCell3.id = "totalPriceID";

        var quantByPrice;
        // function called when add to cart button is pressed
        // takes in three parameters
        // p1 = product quantity, p2 = product name, p3 = product price
        function addToCart(p1, p2, p3) {

            quantByPrice = (parseInt(p3) * parseInt(p1));
            totalPrice = totalPrice + quantByPrice;


            // Create an empty <tr> element and add it to the 1st position of the table:
            var row = table.insertRow(rowIndex);
            rowIndex++;

            // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);

            // Add some text to the new cells:
            cell1.innerHTML = p2;
            cell2.innerHTML = p1;
            cell3.innerHTML = quantByPrice;
            
            // display total price row
            document.getElementById("totalPriceID").innerHTML = totalPrice;
            document.getElementById("ViewCart").style.visibility = "visible";

        }
        
        // ------ Checkout function
        document.getElementById("thank-you").style.visibility = "hidden";
        // function that is called when checkout button is pressed
        function checkout() {
            
            //if customer hasn't logged in they can't proceed to checkout
            if (loggedIn == 0) {
                alert("Please log in before proceeding to checkout");
            // if customer has logged in and checkout button is pressed, contents of shopping cart modal are modified to display a thank you message
            
            } else {

                
                $('exampleModalCenter').modal('hide');
                document.getElementById("productTable").style.visibility = "hidden";
                document.getElementById("exampleModalLongTitle").style.visibility = "hidden";
                document.getElementById("check").style.visibility = "hidden";
                document.getElementById("continue").style.visibility = "hidden";
                document.getElementById("thank-you").style.visibility = "visible";
                document.getElementById("ViewCart").style.visibility = "visible";


            }



        }
    </script>




    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>