		 <h1>Bonjour <?= $_SESSION["auth"]->first_name; ?></h1>

		    <form action="inc/resetPassUser.php" method="post">
		        <div class="form-group">
                    <label>
                        <input class="form-control" type="password" name="password" placeholder="Changer de mot de passe"/>
                    </label>
                </div>
		        <div class="form-group">
                    <label>
                        <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe"/>
                    </label>
                </div>
		        <button class="btn btn-primary subt" style="background-color:#2aa1b8; border:none;">Changer mon mot de passe</button>
		 </form> 