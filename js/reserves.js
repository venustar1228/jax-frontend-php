const state = {};

void async function main() {
    setInterval(update_reserves, 10000);
    await update_reserves();
    init_charts();
}()

async function update_reserves() {
    const {data: reserves} = await axios.get("/api/reserves");
    Object.keys(reserves).map(key => 
        $(`#${key}`).html(reserves[key])
    );
    state.reserves = reserves;
}

function init_charts() {
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
        hand.showValue(state.reserves.busd_liquidity_ratio, 1000, am4core.ease.cubicOut);
    }, 2000);
    
    
    }); // end am4core.ready()


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
            hand.showValue(state.reserves.wjax_collateral, 1000, am4core.ease.cubicOut);
        }, 2000);
        
        
    }); // end am4core.ready()

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
            hand.showValue(state.reserves.wjxn_collateral, 1000, am4core.ease.cubicOut);
        }, 2000);
        
        
    }); // end am4core.ready()
}