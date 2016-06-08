<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/partials/admin/dashboard_low_service.htm */
class __TwigTemplate_df9d9d9d7d0c50f5ff8ae7ca998d59addd8aaf1d130bf840638f76d86729ef14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/amcharts/amcharts.js", 1 => "assets/amcharts/serial.js", 2 => "assets/amcharts/themes/light.js", 3 => "assets/amcharts/plugins/responsive/responsive.min.js"));
        // line 5
        echo "\"></script>


<div id=\"chartdiv2\" style=\"width: 100%; height: 55%;\"></div>

<script>
var chart = AmCharts.makeChart( \"chartdiv2\", {
  \"type\": \"serial\",
  \"theme\": \"light\",
  \"dataProvider\": [ {
    \"country\": \"E-Tribunal\",
    \"visits\": 200,
    \"color\":\"#93278f\"
  }, {
    \"country\": \"MyGST System\",
    \"visits\": 400,
    \"color\":\"#93278f\"
  }, {
    \"country\": \" CJP Online\",
    \"visits\": 700,
    \"color\":\"#93278f\"
  }, {
    \"country\": \"MyOnline Maid\",
    \"visits\": 1000,
    \"color\":\"#93278f\"
  }, {
    \"country\": \"MyOnline Student\",
    \"visits\": 1100,
    \"color\":\"#93278f\"
  } ],
  \"valueAxes\": [ {
    \"gridColor\": \"#FFFFFF\",
    \"gridAlpha\": 0.2,
    \"dashLength\": 0
  } ],
  \"gridAboveGraphs\": false,
  \"startDuration\": 1,
  \"graphs\": [ {
    \"balloonText\": \"[[category]]: <b>[[value]]</b>\",
    \"fillAlphas\": 0.8,
    \"lineAlpha\": 0.2,
    \"colorField\" : \"color\",
    \"type\": \"column\",
    \"valueField\": \"visits\"
  } ],
  \"chartCursor\": {
    \"categoryBalloonEnabled\": false,
    \"cursorAlpha\": 0,
    \"zoomable\": false
  },
  \"categoryField\": \"country\",
  \"categoryAxis\": {
    \"gridPosition\": \"start\",
    \"gridAlpha\": 0,
    \"tickPosition\": \"start\",
    \"tickLength\": 20,
  \"labelsEnabled\": false
  },
  \"export\": {
    \"enabled\": true
  }

} );
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/partials/admin/dashboard_low_service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 1,);
    }
}
/* <script src="{{ ['assets/amcharts/amcharts.js',*/
/* 'assets/amcharts/serial.js',*/
/* 'assets/amcharts/themes/light.js',*/
/* 'assets/amcharts/plugins/responsive/responsive.min.js'*/
/* ]|theme }}"></script>*/
/* */
/* */
/* <div id="chartdiv2" style="width: 100%; height: 55%;"></div>*/
/* */
/* <script>*/
/* var chart = AmCharts.makeChart( "chartdiv2", {*/
/*   "type": "serial",*/
/*   "theme": "light",*/
/*   "dataProvider": [ {*/
/*     "country": "E-Tribunal",*/
/*     "visits": 200,*/
/*     "color":"#93278f"*/
/*   }, {*/
/*     "country": "MyGST System",*/
/*     "visits": 400,*/
/*     "color":"#93278f"*/
/*   }, {*/
/*     "country": " CJP Online",*/
/*     "visits": 700,*/
/*     "color":"#93278f"*/
/*   }, {*/
/*     "country": "MyOnline Maid",*/
/*     "visits": 1000,*/
/*     "color":"#93278f"*/
/*   }, {*/
/*     "country": "MyOnline Student",*/
/*     "visits": 1100,*/
/*     "color":"#93278f"*/
/*   } ],*/
/*   "valueAxes": [ {*/
/*     "gridColor": "#FFFFFF",*/
/*     "gridAlpha": 0.2,*/
/*     "dashLength": 0*/
/*   } ],*/
/*   "gridAboveGraphs": false,*/
/*   "startDuration": 1,*/
/*   "graphs": [ {*/
/*     "balloonText": "[[category]]: <b>[[value]]</b>",*/
/*     "fillAlphas": 0.8,*/
/*     "lineAlpha": 0.2,*/
/*     "colorField" : "color",*/
/*     "type": "column",*/
/*     "valueField": "visits"*/
/*   } ],*/
/*   "chartCursor": {*/
/*     "categoryBalloonEnabled": false,*/
/*     "cursorAlpha": 0,*/
/*     "zoomable": false*/
/*   },*/
/*   "categoryField": "country",*/
/*   "categoryAxis": {*/
/*     "gridPosition": "start",*/
/*     "gridAlpha": 0,*/
/*     "tickPosition": "start",*/
/*     "tickLength": 20,*/
/*   "labelsEnabled": false*/
/*   },*/
/*   "export": {*/
/*     "enabled": true*/
/*   }*/
/* */
/* } );*/
/* </script>*/
