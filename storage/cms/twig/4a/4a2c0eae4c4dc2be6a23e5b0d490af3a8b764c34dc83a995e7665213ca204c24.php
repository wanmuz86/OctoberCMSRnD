<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/partials/admin/dashboard_top_service.htm */
class __TwigTemplate_df895246f173a3c9eb35e7cf4d51a8e61fdd931b79c6773d81201e3a8e025997 extends Twig_Template
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
<script src=\"//cdn.amcharts.com/lib/3/plugins/export/export.min.js\"></script>
<link  type=\"text/css\" href=\"//cdn.amcharts.com/lib/3/plugins/export/export.css\" rel=\"stylesheet\">

<div id=\"chartdiv_top\" style=\"width: 100%; height: 55%;\"></div>
<script>
var chart = AmCharts.makeChart( \"chartdiv_top\", {
  \"type\": \"serial\",
  \"theme\": \"light\",
  \"dataProvider\": [ {
    \"country\": \"MyEG/ Replacement Identity Card\",
    \"visits\": 2100,
    \"fontsize\": 4,
    \"color\":\"#206fa7\"
  }, {
    \"country\": \"Semakan Rayuan Asrama Penuh\",
    \"visits\": 2000
    ,\"color\":\"#206fa7\"},
 {
    \"country\": \"eKahwin\",
    \"visits\": 1800,
    \"color\":\"#206fa7\"
  }, {
    \"country\": \"Semakan Saman\",
    \"visits\": 1500,
    \"color\":\"#206fa7\"
  }, {
    \"country\": \"e-Pengeluaran/ i-Akaun\",
    \"visits\": 1200,
    \"color\":\"#206fa7\"
    
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
    \"valueField\": \"visits\",
    \"labelsEnabled\": false
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
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/partials/admin/dashboard_top_service.htm";
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
/* <script src="//cdn.amcharts.com/lib/3/plugins/export/export.min.js"></script>*/
/* <link  type="text/css" href="//cdn.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet">*/
/* */
/* <div id="chartdiv_top" style="width: 100%; height: 55%;"></div>*/
/* <script>*/
/* var chart = AmCharts.makeChart( "chartdiv_top", {*/
/*   "type": "serial",*/
/*   "theme": "light",*/
/*   "dataProvider": [ {*/
/*     "country": "MyEG/ Replacement Identity Card",*/
/*     "visits": 2100,*/
/*     "fontsize": 4,*/
/*     "color":"#206fa7"*/
/*   }, {*/
/*     "country": "Semakan Rayuan Asrama Penuh",*/
/*     "visits": 2000*/
/*     ,"color":"#206fa7"},*/
/*  {*/
/*     "country": "eKahwin",*/
/*     "visits": 1800,*/
/*     "color":"#206fa7"*/
/*   }, {*/
/*     "country": "Semakan Saman",*/
/*     "visits": 1500,*/
/*     "color":"#206fa7"*/
/*   }, {*/
/*     "country": "e-Pengeluaran/ i-Akaun",*/
/*     "visits": 1200,*/
/*     "color":"#206fa7"*/
/*     */
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
/*     "valueField": "visits",*/
/*     "labelsEnabled": false*/
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
