$(document).ready(function () {
    $('.button-collapse').sideNav();
    var chart = AmCharts.makeChart("chartdiv",
    {
        "type": "serial",
        "theme": "light",
        "dataProvider": [{
            "name": "John",
            "points": 35654,
            "color": "#7F8DA9",
            "bullet": "https://www.amcharts.com/lib/images/faces/A04.png"
        }, {
            "name": "Damon",
            "points": 65456,
            "color": "#FEC514",
            "bullet": "https://www.amcharts.com/lib/images/faces/C02.png"
        }, {
            "name": "Patrick",
            "points": 45724,
            "color": "#DB4C3C",
            "bullet": "https://www.amcharts.com/lib/images/faces/D02.png"
        }, {
            "name": "Mark",
            "points": 13654,
            "color": "#DAF0FD",
            "bullet": "https://www.amcharts.com/lib/images/faces/E01.png"
        }],
        "valueAxes": [{
            "maximum": 80000,
            "minimum": 0,
            "axisAlpha": 0,
            "dashLength": 4,
            "position": "left"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<span style='font-size:13px;'>[[category]]: <b>[[value]]</b></span>",
            "bulletOffset": 10,
            "bulletSize": 52,
            "colorField": "color",
            "cornerRadiusTop": 8,
            "customBulletField": "bullet",
            "fillAlphas": 0.8,
            "lineAlpha": 0,
            "type": "column",
            "valueField": "points"
        }],
        "marginTop": 0,
        "marginRight": 0,
        "marginLeft": 0,
        "marginBottom": 0,
        "autoMargins": false,
        "categoryField": "name",
        "categoryAxis": {
            "axisAlpha": 0,
            "gridAlpha": 0,
            "inside": true,
            "tickLength": 0
        }
      /*  "export": {
        	"enabled": true
        }*/
    });
    var chart = AmCharts.makeChart("chartdiv2", {
    "type": "serial",
    "theme": "light",
    "marginRight": 80,
    "marginTop": 17,
    "autoMarginOffset": 20,
    "dataProvider": [{
        "date": "2012-03-01",
        "price": 20
    }, {
        "date": "2012-03-02",
        "price": 75
    }, {
        "date": "2012-03-03",
        "price": 15
    }, {
        "date": "2012-03-04",
        "price": 75
    }],
    "valueAxes": [{
        "logarithmic": true,
        "dashLength": 1,
        "guides": [{
            "dashLength": 6,
            "inside": true,
            "label": "average",
            "lineAlpha": 1,
            "value": 90.4
        }],
        "position": "left"
    }],
    "graphs": [{
        "bullet": "round",
        "id": "g1",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "bulletSize": 7,
        "lineThickness": 2,
        "title": "Price",
        "type": "smoothedLine",
        "useLineColorForBulletBorder": true,
        "valueField": "price"
    }],
    /*"chartScrollbar": {},*/
    "chartCursor": {
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "valueLineAlpha": 0.5,
        "fullWidth": true,
        "cursorAlpha": 0.05
    },
    "dataDateFormat": "YYYY-MM-DD",
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true
    }/*,
    "export": {
        "enabled": true
    }*/
});
var chart = AmCharts.makeChart( "chartdiv3", {
  "theme": "light",
  "type": "gauge",
  "axes": [ {
    "axisColor": "#67b7dc",
    "axisThickness": 3,
    "endValue": 240,
    "gridInside": false,
    "inside": false,
    "radius": "100%",
    "valueInterval": 20,
    "tickColor": "#67b7dc"
  }, {
    "axisColor": "#fdd400",
    "axisThickness": 3,
    "endValue": 160,
    "radius": "80%",
    "valueInterval": 20,
    "tickColor": "#fdd400"
  } ],
  "arrows": [ {
    "color": "#67b7dc",
    "innerRadius": "20%",
    "nailRadius": 0,
    "radius": "85%"
  } ]
} );

setInterval( randomValue, 2000 );

// set random value
function randomValue() {
  var value = Math.round( Math.random() * 240 );
  chart.arrows[ 0 ].setValue( value );
}
});
