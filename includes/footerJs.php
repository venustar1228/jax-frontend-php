<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.8/holder.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/lodash.min.js"></script>
<script src="js/offcanvas.js"></script>
<script src="js/awn.min.js"></script>
<script src="js/web3.min.js"></script>
<script src="js/wallet.js"></script>
<script src="./js/custom.yarik.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<!--- FOR VIDEO--->
<script type="text/javascript">
  		$(document).ready(function () {
		    $(".arrow-right").bind("click", function (event) {
		        event.preventDefault();
		        $(".vid-list-container").stop().animate({
		            scrollLeft: "+=336"
		        }, 750);
		    });
		    $(".arrow-left").bind("click", function (event) {
		        event.preventDefault();
		        $(".vid-list-container").stop().animate({
		            scrollLeft: "-=336"
		        }, 750);
		    });

		});
  	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            connect_wallet();
        });
    </script>

    <!-- Chart code --> 
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end



// create chart
var chart = am4core.create("chartdiv", am4charts.GaugeChart);
chart.innerRadius = -15;

var axis = chart.xAxes.push(new am4charts.ValueAxis());
axis.min = 0;
axis.max = 100;
axis.strictMinMax = true;

var colorSet = new am4core.ColorSet();

var gradient = new am4core.LinearGradient();
gradient.stops.push({color:am4core.color("red")})
gradient.stops.push({color:am4core.color("yellow")})
gradient.stops.push({color:am4core.color("green")})

axis.renderer.line.stroke = gradient;
axis.renderer.line.strokeWidth = 15;
axis.renderer.line.strokeOpacity = 1;

axis.renderer.grid.template.disabled = true;

var hand = chart.hands.push(new am4charts.ClockHand());
hand.radius = am4core.percent(97);

setInterval(function() {
  hand.showValue(Math.abs(10), 1000, am4core.ease.cubicOut);
}, 2000);


}); // end am4core.ready()
</script> 
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end



// create chart
var chart = am4core.create("chartdiv1", am4charts.GaugeChart);
	
chart.innerRadius = -15;

var axis = chart.xAxes.push(new am4charts.ValueAxis());
axis.min = 0;
axis.max = 100;
axis.strictMinMax = true;

var colorSet = new am4core.ColorSet();

var gradient = new am4core.LinearGradient();
gradient.stops.push({color:am4core.color("red")})
gradient.stops.push({color:am4core.color("yellow")})
gradient.stops.push({color:am4core.color("green")})

axis.renderer.line.stroke = gradient;
axis.renderer.line.strokeWidth = 15;
axis.renderer.line.strokeOpacity = 1;

axis.renderer.grid.template.disabled = true;

var hand = chart.hands.push(new am4charts.ClockHand());
hand.radius = am4core.percent(97);

setInterval(function() {
    hand.showValue(Math.abs(20), 1000, am4core.ease.cubicOut);
}, 2000);


}); // end am4core.ready()
</script>
	<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end



// create chart
var chart = am4core.create("chartdiv2", am4charts.GaugeChart);
	
chart.innerRadius = -15;

var axis = chart.xAxes.push(new am4charts.ValueAxis());
axis.min = 0;
axis.max = 100;
axis.strictMinMax = true;

var colorSet = new am4core.ColorSet();

var gradient = new am4core.LinearGradient();
gradient.stops.push({color:am4core.color("red")})
gradient.stops.push({color:am4core.color("yellow")})
gradient.stops.push({color:am4core.color("green")})

axis.renderer.line.stroke = gradient;
axis.renderer.line.strokeWidth = 15;
axis.renderer.line.strokeOpacity = 1;

axis.renderer.grid.template.disabled = true;

var hand = chart.hands.push(new am4charts.ClockHand());
hand.radius = am4core.percent(97);

setInterval(function() {
    hand.showValue(Math.abs(30), 1000, am4core.ease.cubicOut);
}, 2000);


}); // end am4core.ready()
</script>



<script src="https://code.highcharts.com/highcharts.src.js"></script>
<!-- 1  graph-->
<script>
        Highcharts.chart('container1', {
            title: {
                    text: 'BUSD Liquidty'
                },
            xAxis: {
                title: {
                    text: 'Month'
                },
                categories: ['Jul 20021','Aug 20021', 'Sep 2021', 'Oct 2021', 'Nov 2021']
            },
            yAxis: {
                title: {
                    text: 'Percentage'
                }
                // categories: ['0', '10%', '20%', '30%', '40%', '50%', '60%', '70%', '80%', '90%', '1000%']
            },
            series: [{
                type: 'line',
                name: ' ',
                data: [20, 40, 60, 80, 100],
                zones: [{
                    value: 50,
                    color: '#FF0000'
                }, {
                    color: '#7CFC00'
                }]
            }]
        });
    </script>

<!-- 2  graph-->
<script>
        Highcharts.chart('container2', {
            title: {
                    text: 'WJAX Collateral'
                },
            xAxis: {
                title: {
                    text: 'Month'
                },
                categories: ['Jul 20021','Aug 20021', 'Sep 2021', 'Oct 2021', 'Nov 2021']
            },
            yAxis: {
                title: {
                    text: 'Percentage'
                }
                // categories: ['0', '10%', '20%', '30%', '40%', '50%', '60%', '70%', '80%', '90%', '1000%']
            },
            series: [{
                type: 'line',
                name: ' ',
                data: [20, 40, 60, 80, 100],
                zones: [{
                    value: 50,
                    color: '#FF0000'
                }, {
                    color: '#7CFC00'
                }]
            }]
        });
    </script>

    <!-- 3  graph-->
    <script>
        Highcharts.chart('container3', {
            title: {
                    text: 'WJXN Collateral (VRP)'
                },
            xAxis: {
                title: {
                    text: 'Month'
                },
                categories: ['Jul 20021','Aug 20021', 'Sep 2021', 'Oct 2021', 'Nov 2021']
            },
            yAxis: {
                title: {
                    text: 'Percentage'
                }
                // categories: ['0', '10%', '20%', '30%', '40%', '50%', '60%', '70%', '80%', '90%', '1000%']
            },
            series: [{
                type: 'line',
                name: ' ',
                data: [20, 40, 60, 80, 100],
                zones: [{
                    value: 50,
                    color: '#FF0000'
                }, {
                    color: '#7CFC00'
                }]
            }]
        });
    </script>

<script>
  function makeActive() {
        var element = document.getElementById("voting_cl_wrap");
        element.classList.add("voting_active_wrap");
    }
</script>



<!-- percent value calc -->
<script>
   (function () {
        var x = document.getElementById("rangevalue").value;
        var percent = 5;
        var result = x * percent / (100 * 365);

        document.getElementById("dayIncome").innerHTML = "$" +result.toFixed(4) ;
}());

</script>

<!-- <script>
     if ($('#sidebar').is(':visible')) {
    $('body').addClass("fixed-position");
 } else {
    $('body').removeClass("fixed-position");
 }
</script> -->

