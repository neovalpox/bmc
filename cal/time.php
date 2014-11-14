<style type="text/css">
    <?php include('../style.php'); ?>
</style>
	<link rel='stylesheet' type='text/css' href='reset.css' />
	<link rel='stylesheet' type='text/css' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/start/jquery-ui.css' />
	<link rel='stylesheet' type='text/css' href='../calendar/jquery.weekcalendar.css' />
	<link rel='stylesheet' type='text/css' href='demo.css' />
	
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js'></script>
	<script type='text/javascript' src='../calendar/jquery.weekcalendar.js'></script>
	<script type='text/javascript' src='demo.js'></script>
	<div id='calendar'></div>
	<div id="event_edit_container">
		<form>
			<input type="hidden" />
			<ul>
				<li>
					<span>Date: </span><span class="date_holder"></span> 
				</li>
				<li>
					<label for="start">Heure de début: </label><select name="start"><option value="">Sélectionner l'heure de début</option></select>
				</li>
				<li>
					<label for="end">Heure de fin: </label><select name="end"><option value="">Sélectionner l'heure de fin</option></select>
				</li>
				<li>
					<label for="title">Titre: </label><input type="text" name="title" />
				</li>
				<li>
					<label for="body">Message: </label><textarea name="body"></textarea>
				</li>
			</ul>
		</form>
	</div>
