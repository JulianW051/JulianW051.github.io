<footer>
    <div class="container">
        <div class="left">

        </div>
        <div class="middle">
            <div class="container3">
                <div class="registreren">
                    <div class="title-reserveren">
                        <h1>
                            <span>Neem</span>
                            contact
                        </h1>
                    </div>
                    <form class="form__group field" action="<?php if ($page == "index") {echo "actions/contact.php";} else {echo "../actions/contact.php";} ?>?page=<?php echo $page;?>" id="target" method="post">
                        <div class="input-container">
                            <input  type="text" name="name" required=""/>
                            <label>Naam</label>		
                        </div>
                        <div class="input-container">
                            <input type="tel" name="tel" required=""/>
                            <label>Telefoon nummer</label>
                        </div>
                        <div class="input-container">
                            <input type="email" name="email" required=""/>
                            <label>Email</label>
                        </div>
                        <div class="input-container">
                            <textarea name="bericht" required=""/></textarea>
                            <label>Bericht</label>
                        </div>
                        <button type="submit">Verstuur</button>
                    </form>
                </div>
            </div>
            <p>Copyright &copy; 2022 Julian Wessels. All Rights Reserved</p>
        </div>
        <div class="right">

        </div>
    </div>
</footer>