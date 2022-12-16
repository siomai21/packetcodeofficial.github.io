<body data-bs-spy="scroll" data-bs-target=".navbar">
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
       <div class="container">
         <a class="navbar-brand logo-text" href="main.php">K I C K S</a><img src="img/shoes1.svg" height="40px">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav ms-auto">
 
             <li class="nav-item">
               <a class="nav-link" href="main.php">Home</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="nike.php">Brands</a>
              </li>
              <li class="nav-item">
              
              <li class="nav-item">
                <a class="nav-link" href="acn.php">Accessories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""></a>
              </li>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
              <div class="title3">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i>
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\"></span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>
           </ul>
         </div>
       </div>
     </nav>
 