<table class="cadre" cellspacing="0" width="280">
    <tr class="cadre"><td height="43" align="center"><font color="#FFFFFF"><b>Etat des sauvegardes</b></font></td></tr><tr class="vierge"><td>
<div style="margin:8px;">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">

$.post("count.php", {}, function(msg){
    ok = Number(msg.ok);
    window.localStorage.setItem("ok", ok);
    non = Number(msg.faux);
    window.localStorage.setItem("non", non);
    
    tot = ok + non;
    
    ok = tot*ok/100;
    non = tot*non/100;

});
$(function () {
    var chart;
    
    $(document).ready(function () {
    	
    	// Build the chart
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Sauvegardes'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            	percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: 'Client',
                data: [
                    ['Ok',   Number(window.localStorage.getItem("ok"))],
                    {
                        name: 'Problème',
                        y: Number(window.localStorage.getItem("non")),
                        sliced: true,
                        selected: true
                    },
                ]
            }]
        });
    });
    
});
		</script>

<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container" style="min-width: 270px; height: 250px; margin: 0 auto"></div>
</div></td></tr></table>