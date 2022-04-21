<header>
        <div class="background">
        </div>
        <div class="content">
            <div class="nav">
            <?php
              if ($page === "index") {
                echo "<a href='pages/registreren.php'>registreren</a>";
                echo "<a href='pages/reserveren.php'>reserveren</a>";
                echo "<a href='pages/winkelmand.php'><i class='fa fa-shopping-cart'></i></a>";
              } else if ($page === "registreren") {
                echo "<a href='../index.php'>Home</a>";
                echo "<a href='reserveren.php'>reserveren</a>";
                echo "<a href='winkelmand.php'><i class='fa fa-shopping-cart'></i></a>";
              } else if ($page === "contact") {
                echo "<a href='registreren.php'>registreren</a>";
                echo "<a href='../index.php'>Home</a>";
                echo "<a href='winkelmand.php'><i class='fa fa-shopping-cart'></i></a>";
              } else if ($page === "winkelmand") {
                echo "<a href='registreren.php'>registreren</a>";
                echo "<a href='reserveren.php'>reserveren</a>";
                echo "<a href='../index.php'>Home</a>";
              }
            ?>
            </div>
            <div class="upper">
                <h2>Thais restaurant</h2>
            </div>
        </div>
    </header>