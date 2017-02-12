<div class="mdl-layout_login mdl-js-layout mdl-color--grey-100">
	<main class="mdl-layout__content_login">
		<div class="mdl-card mdl-shadow--6dp">
			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
				<i class="material-icons">person</i>
				<h2 class="mdl-card__title-text"> Sistem Admin</h2>
			</div>

			<form action=" " method="POST">
				<div class="mdl-card__supporting-text">

					<?php 

					if(validation_errors()==TRUE){
						echo 
						'<span class="mdl-chip">
							<span class="mdl-chip__text">'.validation_errors().'</span>
						</span>
						</br>
						';
				}

				?>



				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="sample3">Username</label>
					<input name='username' class="mdl-textfield__input" type="text" id="sample3" value="<?= set_value('username') ?>">
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="sample3">Password</label>
					<input name='password' class="mdl-textfield__input" type="password" id="sample3">
				</div>


			</div>
			<div class="mdl-card__actions mdl-card--border">
				<input type="submit" name="login" value="Log in" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
				<!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Log in</button> -->
			</div>
		</form>
	</div>
</main>
</div>