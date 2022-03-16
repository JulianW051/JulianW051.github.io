<?php
            if (isset($_POST['knop'])) {
                
                $naam = $_POST['naam'];
                $leeftijd = $_POST['leeftijd'];
                $password = $_POST['password'];

                echo 'je naam is ' . $naam . '<br>';
                echo 'je leeftijd is ' . $leeftijd . '<br>' ;
                echo 'je wachtwoord is ' . $password . '<br>' ;

            }
        ?>