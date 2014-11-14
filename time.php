<link rel='stylesheet' type='text/css' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css' />
<link rel='stylesheet' type='text/css' href='jquery.weekcalendar.css' />

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js'></script>
<script type='text/javascript' src='jquery.weekcalendar.js'></script>
<style type='text/css'>
	
	h1 {
		margin: 0;
		padding: 0.5em;
	}
	
	p.description {
		font-size: 0.8em;
		padding: 1em;
		position: absolute;
		top: 3.2em;
		margin-right: 400px;
	}
	
	#message {
		font-size: 0.7em;
		position: absolute;
		top: 1em; 
		right: 1em;
		width: 350px;
		display: none;
		padding: 1em;
		background: #ffc;
		border: 3px inset #dda;
	}
	
</style>

<script type='text/javascript'>


	var year = new Date().getFullYear();
	var month = new Date().getMonth();
	var day = new Date().getDate();

	var eventData1 = {
			options: {
				timeslotsPerHour: 4,
				timeslotHeight: 20
			},
			events : [
			   {"id":1, "start": new Date(year, month, day, 12), "end": new Date(year, month, day, 13, 30),"title":"Lunch with Mike"},
			   {"id":2, "start": new Date(year, month, day, 14), "end": new Date(year, month, day, 14, 45),"title":"Dev Meeting"},
			   {"id":3, "start": new Date(year, month, day + 1, 18), "end": new Date(year, month, day + 1, 18, 45),"title":"Hair cut"},
			   {"id":4, "start": new Date(year, month, day - 1, 8), "end": new Date(year, month, day - 1, 9, 30),"title":"Team breakfast"},
			   {"id":5, "start": new Date(year, month, day + 1, 14), "end": new Date(year, month, day + 1, 15),"title":"Product showcase"}
			]
		};

	var eventData2 = {
			options: {
				timeslotsPerHour: 3,
				timeslotHeight: 30
			},
			events : [
			   {"id":1, "start": new Date(year, month, day, 12), "end": new Date(year, month, day, 13, 00),"title":"Lunch with Sarah"},
			   {"id":2, "start": new Date(year, month, day, 14), "end": new Date(year, month, day, 14, 40),"title":"Team Meeting"},
			   {"id":3, "start": new Date(year, month, day + 1, 18), "end": new Date(year, month, day + 1, 18, 40),"title":"Meet with Joe"},
			   {"id":4, "start": new Date(year, month, day - 1, 8), "end": new Date(year, month, day - 1, 9, 20),"title":"Coffee with Alison"},
			   {"id":5, "start": new Date(year, month, day + 1, 14), "end": new Date(year, month, day + 1, 15),"title":"Product showcase"}
			]
		};
	   
	$(document).ready(function() {

		var $calendar = $('#calendar').weekCalendar({
			timeslotsPerHour: 4,
			scrollToHourMillis : 0,
			height: function($calendar){
				return $(window).height() - $("h1").outerHeight(true);
			},
			eventRender : function(calEvent, $event) {
				if(calEvent.end.getTime() < new Date().getTime()) {
					$event.css("backgroundColor", "#aaa");
					$event.find(".time").css({"backgroundColor": "#999", "border":"3px inset #000"});
				}
			},
			eventNew : function(calEvent, $event) {
				alert("You've added a new event. You would capture this event, add the logic for creating a new event with your own fields, data and whatever backend persistence you require.");
			},
			data: function(start, end, callback) {

				var dataSource = $("#data_source").val();
				if(dataSource === "1") {
					callback(eventData1);
				} else if(dataSource === "2") {
					callback(eventData2);
				} else {
					callback([]);
				}
            }
		});

		$("#data_source").change(function() {
			$calendar.weekCalendar("refresh");
			updateMessage();
			
		});

		function updateMessage() {
			var dataSource = $("#data_source").val();
			$("#message").fadeOut(function(){
				if(dataSource === "1") {
					$("#message").text("Displaying event data set 1 with timeslots per hour of 4 and timeslot height of 20px");
				} else if(dataSource === "2") {
					$("#message").text("Displaying event data set 2 with timeslots per hour of 3 and timeslot height of 30px");
				} else {
					$("#message").text("Displaying no events.");
				}
				$(this).fadeIn();
			});
		}

		updateMessage();
		
	});

</script>
<table cellspacing="0" class="cadre" width="800">
<tr height="43" class="cadre"><td align="center" colspan="6"><font color="#FFFFFF"><b>Fiches d'heures</b></font></td></tr>
<tr>
<td>
    <div style="margin:8px;">
	<h1>Week Calendar Demo (Data supplied config overrides)</h1>
	<p class="description">This calendar demonstrates the ability to return calendar configuration options with an event dataset.</p>
	<div id="message" class="ui-corner-all"></div>
	<div id="calendar_selection" class="ui-corner-all">
		<strong>Event Data Source: </strong>
		<select id="data_source">
			<option value="">Select Event Data</option>
			<option value="1">Event Data 1</option>
			<option value="2">Event data 2</option>
		</select>
	</div>
	<div id='calendar'></div>
    </div>

</td>
</tr>
</table>