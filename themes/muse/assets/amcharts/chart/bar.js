// -----------------------------CHART 3--------------------------------//

    var chart = AmCharts.makeChart( "chart3div", {
      "type": "serial",
      "theme": "light",
      "dataProvider": [ {
        "country": "Malaysia",
        "visits": 2015
      }, {
        "country": "Indonesia",
        "visits": 1882
      }, {
        "country": "Singapore",
        "visits": 1809
      }, {
        "country": "Philippines",
        "visits": 1522
      }, {
        "country": "Thailand",
        "visits": 1822
      } ],
      "valueAxes": [ {
        "gridColor": "#FFFFFF",
        "gridAlpha": 0.2,
        "dashLength": 0
      } ],
      "gridAboveGraphs": true,
      "startDuration": 1,
      "graphs": [ {
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "visits"
      } ],
      "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
      },
      "categoryField": "country",
      "categoryAxis": {
        "gridPosition": "start",
        "gridAlpha": 0,
        "tickPosition": "start",
        "tickLength": 20
      },
      "export": {
        "enabled": true
      }

    } )


    var chart = AmCharts.makeChart("chart6div", {
        "type": "serial",
         "theme": "light",
        "categoryField": "year",
        "rotate": true,
        "startDuration": 1,
        "categoryAxis": {
            "gridPosition": "start",
            "position": "left"
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "Income:[[value]]",
                "fillAlphas": 0.8,
                "id": "AmGraph-1",
                "lineAlpha": 0.2,
                "title": "Income",
                "type": "column",
                "valueField": "income"
            },
            {
                "balloonText": "Expenses:[[value]]",
                "fillAlphas": 0.8,
                "id": "AmGraph-2",
                "lineAlpha": 0.2,
                "title": "Expenses",
                "type": "column",
                "valueField": "expenses"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "id": "ValueAxis-1",
                "position": "top",
                "axisAlpha": 0
            }
        ],
        "allLabels": [],
        "balloon": {},
        "titles": [],
        "dataProvider": [
            {
                "year": 2005,
                "income": 23.5,
                "expenses": 18.1
            },
            {
                "year": 2006,
                "income": 26.2,
                "expenses": 22.8
            },
            {
                "year": 2007,
                "income": 30.1,
                "expenses": 23.9
            },
            {
                "year": 2008,
                "income": 29.5,
                "expenses": 25.1
            },
            {
                "year": 2009,
                "income": 24.6,
                "expenses": 25
            }
        ],
        "export": {
            "enabled": true
         }

    });