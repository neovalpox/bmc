<table class="cadre" cellspacing="0" width="280">
    <tr background="images/clouds.jpg" class="cadre"><td height="43" align="center"><font color="#FFFFFF"><b>Utilisateurs</b></font></td></tr><tr><td>
<div style="margin:8px;">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
$.post("count_pers.php", {}, function(msg){
    
    tot = Number(msg.tot_0)+Number(msg.tot_1)+Number(msg.tot_2)
    
    
    
    // Flavio //
    fva = msg.user_1;
    fva_tot = Number(msg.tot_1)*100/tot;

    fva_tot = Math.round(fva_tot);
    window.localStorage.setItem("fva_tot", fva_tot);
    
    // Daniel //
    ddo = msg.user_2;
    ddo_tot = Number(msg.tot_2)*100/tot;

    ddo_tot = Math.round(ddo_tot);
    window.localStorage.setItem("ddo_tot", ddo_tot);
	
    // Benoit //
    bsi = msg.user_0;
    bsi_tot = Number(msg.tot_0)*100/tot;
    
    bsi_tot = Math.round(bsi_tot);
    window.localStorage.setItem("bsi_tot", bsi_tot);
    
    // Daniele //
    dpr = msg.user_0;
    dpr_tot = Number(msg.tot_0)*100/tot;
    
    dpr_tot = Math.round(dpr_tot);
    window.localStorage.setItem("dpr_tot", dpr_tot);

});
$(function () {
    var chart;
    $(document).ready(function() {
    
        var colors = Highcharts.getOptions().colors,
            categories = ['DDO', 'BSI', 'FVA', 'DPR'],
            name = 'Sauvegardes',
            data = [{
                    y: Number(window.localStorage.getItem("ddo_tot")),
                    color: colors[0],
                    drilldown: {
                        name: 'DDO',
                        categories: ['Sauvegardes'],
                        data: [Number(window.localStorage.getItem("ddo_tot"))],
                        color: colors[0]
                    }
                },{
                    y: Number(window.localStorage.getItem("dpr_tot")),
                    color: colors[5],
                    drilldown: {
                        name: 'DPR',
                        categories: ['Sauvegardes'],
                        data: [Number(window.localStorage.getItem("dpr_tot"))],
                        color: colors[4]
                    }
                },{
                    y: Number(window.localStorage.getItem("bsi_tot")),
                    color: colors[5],
                    drilldown: {
                        name: 'BSI',
                        categories: ['Sauvegardes'],
                        data: [Number(window.localStorage.getItem("bsi_tot"))],
                        color: colors[5]
                    }
                }, {
                    y: Number(window.localStorage.getItem("fva_tot")),
                    color: colors[3],
                    drilldown: {
                        name: 'FVA',
                        categories: ['Sauvegardes'],
                        data: [Number(window.localStorage.getItem("fva_tot"))],
                        color: colors[3]
                    }
                }];
    
        function setChart(name, categories, data, color) {
			chart.xAxis[0].setCategories(categories, false);
			chart.series[0].remove(false);
			chart.addSeries({
				name: name,
				data: data,
				color: color || 'white'
			}, false);
			chart.redraw();
        }
    
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container2',
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            plotOptions: {
                column: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                var drilldown = this.drilldown;
                                if (drilldown) { // drill down
                                    setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                } else { // restore
                                    setChart(name, categories, data);
                                }
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        color: colors[0],
                        style: {
                            fontWeight: 'bold'
                        },
                        formatter: function() {
                            return this.y +'%';
                        }
                    }
                }
            },
            tooltip: {
                formatter: function() {
                    var point = this.point,
                        s = this.x +':<b>'+ this.y +'% des sauvegardes</b><br/>';
                    
                    return s;
                }
            },
            series: [{
                name: name,
                data: data,
                color: 'white'
            }],
            exporting: {
                enabled: false
            }
        });
    });
    
});
		</script>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container2" style="min-width: 270px; height: 250px; margin: 0 auto"></div>
</div></td></tr></table>

