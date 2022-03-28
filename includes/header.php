<header>
        <div class="background">
        </div>
        <div class="content">
            <div class="nav">
            <?php
              if ($page === "index") {
                echo "<a href='pages/beoordelingen.php'>beoordelingen</a>";
                echo "<a href='pages/reserveren.php'>reserveren</a>";
              } else if ($page === "beoordeling") {
                echo "<a href='../index.php'>Home</a>";
                echo "<a href='reserveren.php'>reserveren</a>";
              } else if ($page === "contact") {
                echo "<a href='beoordelingen.php'>beoordelingen</a>";
                echo "<a href='../index.php'>Home</a>";
              }
            ?>
            </div>
            <div class="upper">
                <h2>Thais restaurant</h2>
            </div>
        </div>
    </header>