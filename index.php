
<!DOCTYPE html>
<html lang="nl">

<head>
    <title>
        <?php echo 'Oefeningen overzicht thema 3 realiseren.'; ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/T3_REA_oefening_2-1/css/style.css">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&display=swap" rel="stylesheet">

    
<style>
    footer
    {
    display:flex;
    justify-content:center;
    margin-top:570px;
    padding:30px;
    background-color:rgb(15, 130, 76);
    height: 22vh;
    width: 100%;
    flex: 1; /* Zorgt ervoor dat de content de footer naar beneden duwt */
    }  
    </style>
</head>

<body>
    <header>
        <h1>
            <?php echo 'Uitwerking van PHP-oefeningen'; ?>
        </h1>
    </header>

    <?php
    $path = "/T3_REA_Oefening_2-1/";
?>
<aside>
    <h2>Thema 3</h2>
    <nav>
        <ul>
            <li>
                <a href="<?php echo $path; ?>index.php">Home</a>
            </li>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="<?php echo $path; ?>pages/2-1.php">Oefening 2.1</a>
                    </li>
                    <li>
                        <a href="<?php echo $path; ?>pages/2-2.php">Oefening 2.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="<?php echo $path; ?>pages/3-1.php">Oefening 3.1</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="<?php echo $path; ?>pages/4-2.php">Oefening 4.2</a>
                    </li>
                    <li>
                        <a href="<?php echo $path; ?>pages/4-3.php">Oefening 4.3</a>
                    </li>
                    <li>
                        <a href="<?php echo $path; ?>pages/4-4.php">Oefening 4.4</a>
                    </li>

                </ul>
            </li>

            <li>Hoofdstuk 5
                <ul>
                <li>
                        <a href="<?php echo $path; ?>pages/5-1.php">Oefening 5.1</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo $path; ?>pages/5-2.php">Oefening 5.2</a>
                    </li>

                </ul>
            </li>


            <li>Hoofdstuk 6
                <ul>
                <li>
                        <a href="<?php echo $path; ?>pages/6-1.php">Oefening 6.1</a>
                    </li>

                    <li>
                        <a href="<?php echo $path; ?>pages/6-2.php">Oefening 6.2</a>
                    </li>


                </ul>
            </li>


        </ul>
    </nav>
</aside>

    


<article>
    <main id="wrapper">
        <h2>Uitwerkingen PHP oefeningen.</h2>
        <p>Op deze plek komt de uitwerking van iedere oefening te staan.</p>
    </main>
</article>

    




    
    <footer>


    <p>
          <?php
         if(isset($_COOKIE["userCountryCode"]) && $_COOKIE["userCountryCode"] !== "0" )
         {
           $countryCode = $_COOKIE["userCountryCode"];
           echo "<img src='images/flags/$countryCode.png'>";
           
         } 
         else
         {
           echo "<a href='pages/6-1.php'> geef een land op</a>";
         }
        
        ?>
      </p>


      <p class="user_name">
        <?php
        
        if(isset($_COOKIE["userNameCookie"]) == true)
        {
          $username = $_COOKIE["userNameCookie"];
          echo "$username";
        }
        else
        {
          echo "Onbekend_gebruiker";
        }
        
        
        ?>
      </p>


        <p>
        &copy;
        <?php 
        require "includes/variable.php";
        echo "Naam: " . $naam . " | Klas: " . $klas . " | " . $datum;
        ?>
         </p>
         
    </footer>
</body>

</html>
