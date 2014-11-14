<link rel='stylesheet' type='text/css' href='cupertino/theme.css' />
<link rel='stylesheet' type='text/css' href='fullcalendar/fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='fullcalendar/fullcalendar/fullcalendar.print.css' media='print' />
<script type='text/javascript' src='fullcalendar/jquery/jquery-1.8.1.min.js'></script>
<script type='text/javascript' src='fullcalendar/jquery/jquery-ui-1.8.23.custom.min.js'></script>
<script type='text/javascript' src='fullcalendar/fullcalendar/fullcalendar.js'></script>
<script type='text/javascript'>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Titre:');
				if (title) {
					$.post("fullcalendar/demos/addEvent.php", {
                                             title: title,
                                             start: start,
                                             end: end,
                                             allDay: allDay
                                         }, function() {
                                             calendar.fullCalendar('renderEvent',
					{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
                                                );
                                        });
					
				}
				calendar.fullCalendar('unselect');
			},
			editable: true,
			events: [
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
                                        end: new Date(y, m, d-3, 18, 0),
					allDay: false
				},
				{
					id: 560,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
			]
		});
		
	});

</script>
<style type='text/css'>

	body {
		margin-top: 40px;
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}

	#calendar {
		width: 900px;
		margin: 0 auto;
		}

</style>
<table cellspacing="0" class="cadre" width="800">
<tr height="43" class="cadre"><td background="images/clouds.jpg" align="center" colspan="6"><font color="#FFFFFF"><b>Fiches d'heures</b></font></td></tr>
<tr>
<td>
    <div style="margin:8px;">
<div id='calendar'></div>
</div>

</td>
</tr>
</table>