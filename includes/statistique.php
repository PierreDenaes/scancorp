		<div class="statAlign col-12">
			<nav class="navStat">
			<?php if($_SESSION['auth']->level == 2 || $_SESSION['auth']->level == 4): ?>
			<button type="button" class="btn btn-outline-info" onclick="window.location.href = '?call_userStat';">Utilisateur</button>
			<?php endif; ?>
			<?php if($_SESSION['auth']->level >= 3): ?>
			<button type="button" class="btn btn-outline-info" onclick="window.location.href = '?call_compStat';">Entreprise</button>
			<?php endif; ?>
			<?php if($_SESSION['auth']->level == 4): ?>
			<button type="button" class="btn btn-outline-info" onclick="window.location.href = '?call_adminStat';">Admin</button>
			<?php endif; ?>
			</nav>
		</div>

