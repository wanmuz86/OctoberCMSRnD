<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/partials/statistics/percentage.htm */
class __TwigTemplate_405595baf50d3f7f8641a03fa192701b20914e254f9e2326c86b19790d048fab extends Twig_Template
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
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/amcharts/amcharts.js", 1 => "assets/amcharts/pie.js", 2 => "assets/amcharts/themes/light.js", 3 => "assets/amcharts/plugins/responsive/responsive.min.js", 4 => "assets/amcharts/export/export.js", 5 => "assets/amcharts/libs/3/amcharts.js", 6 => "assets/amcharts/libs/3/pie.js", 7 => "assets/amcharts/libs/3/lights.js"));
        // line 9
        echo "\"></script>

<link href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/amcharts/export/export.css"));
        echo "\" rel=\"stylesheet\">

<style>
#chartdiv {
  width: 100%;
  height: 500px;
  font-size: 11px;
}

.amcharts-pie-slice {
  transform: scale(1);
  transform-origin: 50% 50%;
  transition-duration: 0.3s;
  transition: all .3s ease-out;
  -webkit-transition: all .3s ease-out;
  -moz-transition: all .3s ease-out;
  -o-transition: all .3s ease-out;
  cursor: pointer;
  box-shadow: 0 0 30px 0 #000;
}

.amcharts-pie-slice:hover {
  transform: scale(1.1);
  filter: url(#shadow);
}\t\t\t\t\t\t\t
</style>


  <div class=\"container\">
  \t <ul class=\"nav nav-tabs\" id=\"add\">
  <li class=\"active\"><a href=\"statresult\">Percentage Data</a></li>
  <li><a  href=\"barresult\">Bar by Month</a></li>
</ul>
<br/>

<div class=\"left_nav\">
    <ul class=\"nav nav-tabs\" id=\"edit-survey-text-element-language-selection\">
              <li class=\"active\"><a data-toggle=\"tab\" href=\"#presentation\">Graph</a></li>
              <li><a data-toggle=\"tab\" href=\"#import\">Table</a></li>
        </ul>
    </div>
     <div class=\"tab-content\">
     <div role=\"presentation\" id=\"presentation\" class=\"tab-pane fade in active\">
            <div class=\"row\">
              <div class=\"span6\">  
                  <div class=\"widget\">
                      <div class=\"widget-header\">
                          <i class=\"icon-bar-chart\"></i>
                          <h3>Percentage Data</h3>
                      </div> <!-- /widget-header -->
                        <div class=\"widget-content\">
                          <!-- Button Export -->
                          <div class=\"col-md-12 col-fix\">
                            <div class=\"col-md-3 col-fix\">
                            </div>
                          </div>
                          <!-- /Button Export -->
                            <div id=\"chartdiv\" style=\"width: 100%; height: 600px;\"></div>  
                        </div>
                  </div>
\t\t\t  </div> 

          </div><!-- /row --> 
      </div>
    <!-- Grid -->
    <div id=\"import\" role=\"presentation\" class=\"tab-pane fade\">
 <div class=\"row\">
        <div class=\"col-lg-12 content-right\">
            <div style=\"cursor: pointer;\" class=\"hoverAction\" id=\"survey-grid\">
<table class=\"items table\">
<thead>
<tr>
\t<th id=\"survey-grid_c0\">Total Mark (%)</th>
\t<th id=\"survey-grid_c5\">Total</th></tr>
</thead>
<tbody>
<tr>
\t<td class=\"col-md-5\">Higher >90%</td>
\t<td class=\"col-md-2\">119.9</td>
</tr>
<tr>
  <td class=\"col-md-5\">Higher >80%</td>
  <td class=\"col-md-2\">301.9</td>
</tr>
<tr>
  <td class=\"col-md-5\">Higher >75%</td>
  <td class=\"col-md-2\">201.1</td>
</tr>
<tr>
  <td class=\"col-md-5\">Higher >70%</td>
  <td class=\"col-md-2\">165.8</td>
</tr>
<tr>
  <td class=\"col-md-5\">Higher >64%</td>
  <td class=\"col-md-2\">139.9</td>
</tr>
<tr>
  <td class=\"col-md-5\">Higher >55%</td>
  <td class=\"col-md-2\">128.3</td>
</tr>
<tr>
  <td class=\"col-md-5\">Higher >50%</td>
  <td class=\"col-md-2\">99</td>
</tr>
<tr>
  <td class=\"col-md-5\">Higher >45%</td>
  <td class=\"col-md-2\">75</td>
</tr>
<tr>
  <td class=\"col-md-5\">Lower <45% </td>
  <td class=\"col-md-2\">130.4</td>
</tr>
</tbody>
</table>
<div class=\"row-fluid\"><div class=\"span6\"></div><div class=\"span6\"><div class=\"summary\">Displaying 1-5 of 5 result(s). <select class=\"changePageSize form-control\" style=\"display: inline; width: auto\" name=\"pageSize\" id=\"pageSize\">
<option value=\"5\">5</option>
<option value=\"10\" selected=\"selected\">10</option>
</select> rows per page</div></div></div><div class=\"keys\" style=\"display:none\" title=\"/index.php/admin/survey/sa/listsurveys\"><span>837319</span><span>852743</span><span>464641</span><span>193941</span><span>342581</span></div>
</div>        </div>
    </div>
</div>
</div><!--end tab-->

         
        </div><!-- /container --> 

<!--script-->
<script>
var chart = AmCharts.makeChart(\"chartdiv\", {
  \"type\": \"pie\",
  \"startDuration\": 0,
   \"theme\": \"light\",
  \"addClassNames\": true,
  \"legend\":{
   \t\"position\":\"right\",
    \"marginRight\":100,
    \"autoMargins\":false
  },
  \"innerRadius\": \"30%\",
  \"defs\": {
    \"filter\": [{
      \"id\": \"shadow\",
      \"width\": \"200%\",
      \"height\": \"200%\",
      \"feOffset\": {
        \"result\": \"offOut\",
        \"in\": \"SourceAlpha\",
        \"dx\": 0,
        \"dy\": 0
      },
      \"feGaussianBlur\": {
        \"result\": \"blurOut\",
        \"in\": \"offOut\",
        \"stdDeviation\": 5
      },
      \"feBlend\": {
        \"in\": \"SourceGraphic\",
        \"in2\": \"blurOut\",
        \"mode\": \"normal\"
      }
    }]
  },
  \"dataProvider\": [{
    \"country\": \"Higher >90%\",
    \"litres\": 119.9
  }, {
    \"country\": \"Higher >80%\",
    \"litres\": 301.9
  }, {
    \"country\": \"Higher >75%\",
    \"litres\": 201.1
  }, {
    \"country\": \"Higher >70%\",
    \"litres\": 165.8
  }, {
    \"country\": \"Higher >64%\",
    \"litres\": 139.9
  }, {
    \"country\": \"Higher >55%\",
    \"litres\": 128.3
  }, {
    \"country\": \"Higher >50%\",
    \"litres\": 99
  }, {
    \"country\": \"Higher >45%\",
    \"litres\": 75
  }, {
    \"country\": \"Lower <45%\",
    \"litres\": 130.4
  }],
  \"valueField\": \"litres\",
  \"titleField\": \"country\",
  \"export\": {
    \"enabled\": true
  }
});

chart.addListener(\"init\", handleInit);

chart.addListener(\"rollOverSlice\", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart.legend.addListener(\"rollOverItem\", handleRollOver);
}

function handleRollOver(e){
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);  
}
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/partials/statistics/percentage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 11,  22 => 9,  19 => 1,);
    }
}
/* <script src="{{ ['assets/amcharts/amcharts.js',*/
/* 'assets/amcharts/pie.js',*/
/* 'assets/amcharts/themes/light.js',*/
/* 'assets/amcharts/plugins/responsive/responsive.min.js',*/
/* 'assets/amcharts/export/export.js',*/
/* 'assets/amcharts/libs/3/amcharts.js',*/
/* 'assets/amcharts/libs/3/pie.js',*/
/* 'assets/amcharts/libs/3/lights.js'*/
/* ]|theme }}"></script>*/
/* */
/* <link href="{{ ['assets/amcharts/export/export.css']|theme }}" rel="stylesheet">*/
/* */
/* <style>*/
/* #chartdiv {*/
/*   width: 100%;*/
/*   height: 500px;*/
/*   font-size: 11px;*/
/* }*/
/* */
/* .amcharts-pie-slice {*/
/*   transform: scale(1);*/
/*   transform-origin: 50% 50%;*/
/*   transition-duration: 0.3s;*/
/*   transition: all .3s ease-out;*/
/*   -webkit-transition: all .3s ease-out;*/
/*   -moz-transition: all .3s ease-out;*/
/*   -o-transition: all .3s ease-out;*/
/*   cursor: pointer;*/
/*   box-shadow: 0 0 30px 0 #000;*/
/* }*/
/* */
/* .amcharts-pie-slice:hover {*/
/*   transform: scale(1.1);*/
/*   filter: url(#shadow);*/
/* }							*/
/* </style>*/
/* */
/* */
/*   <div class="container">*/
/*   	 <ul class="nav nav-tabs" id="add">*/
/*   <li class="active"><a href="statresult">Percentage Data</a></li>*/
/*   <li><a  href="barresult">Bar by Month</a></li>*/
/* </ul>*/
/* <br/>*/
/* */
/* <div class="left_nav">*/
/*     <ul class="nav nav-tabs" id="edit-survey-text-element-language-selection">*/
/*               <li class="active"><a data-toggle="tab" href="#presentation">Graph</a></li>*/
/*               <li><a data-toggle="tab" href="#import">Table</a></li>*/
/*         </ul>*/
/*     </div>*/
/*      <div class="tab-content">*/
/*      <div role="presentation" id="presentation" class="tab-pane fade in active">*/
/*             <div class="row">*/
/*               <div class="span6">  */
/*                   <div class="widget">*/
/*                       <div class="widget-header">*/
/*                           <i class="icon-bar-chart"></i>*/
/*                           <h3>Percentage Data</h3>*/
/*                       </div> <!-- /widget-header -->*/
/*                         <div class="widget-content">*/
/*                           <!-- Button Export -->*/
/*                           <div class="col-md-12 col-fix">*/
/*                             <div class="col-md-3 col-fix">*/
/*                             </div>*/
/*                           </div>*/
/*                           <!-- /Button Export -->*/
/*                             <div id="chartdiv" style="width: 100%; height: 600px;"></div>  */
/*                         </div>*/
/*                   </div>*/
/* 			  </div> */
/* */
/*           </div><!-- /row --> */
/*       </div>*/
/*     <!-- Grid -->*/
/*     <div id="import" role="presentation" class="tab-pane fade">*/
/*  <div class="row">*/
/*         <div class="col-lg-12 content-right">*/
/*             <div style="cursor: pointer;" class="hoverAction" id="survey-grid">*/
/* <table class="items table">*/
/* <thead>*/
/* <tr>*/
/* 	<th id="survey-grid_c0">Total Mark (%)</th>*/
/* 	<th id="survey-grid_c5">Total</th></tr>*/
/* </thead>*/
/* <tbody>*/
/* <tr>*/
/* 	<td class="col-md-5">Higher >90%</td>*/
/* 	<td class="col-md-2">119.9</td>*/
/* </tr>*/
/* <tr>*/
/*   <td class="col-md-5">Higher >80%</td>*/
/*   <td class="col-md-2">301.9</td>*/
/* </tr>*/
/* <tr>*/
/*   <td class="col-md-5">Higher >75%</td>*/
/*   <td class="col-md-2">201.1</td>*/
/* </tr>*/
/* <tr>*/
/*   <td class="col-md-5">Higher >70%</td>*/
/*   <td class="col-md-2">165.8</td>*/
/* </tr>*/
/* <tr>*/
/*   <td class="col-md-5">Higher >64%</td>*/
/*   <td class="col-md-2">139.9</td>*/
/* </tr>*/
/* <tr>*/
/*   <td class="col-md-5">Higher >55%</td>*/
/*   <td class="col-md-2">128.3</td>*/
/* </tr>*/
/* <tr>*/
/*   <td class="col-md-5">Higher >50%</td>*/
/*   <td class="col-md-2">99</td>*/
/* </tr>*/
/* <tr>*/
/*   <td class="col-md-5">Higher >45%</td>*/
/*   <td class="col-md-2">75</td>*/
/* </tr>*/
/* <tr>*/
/*   <td class="col-md-5">Lower <45% </td>*/
/*   <td class="col-md-2">130.4</td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
/* <div class="row-fluid"><div class="span6"></div><div class="span6"><div class="summary">Displaying 1-5 of 5 result(s). <select class="changePageSize form-control" style="display: inline; width: auto" name="pageSize" id="pageSize">*/
/* <option value="5">5</option>*/
/* <option value="10" selected="selected">10</option>*/
/* </select> rows per page</div></div></div><div class="keys" style="display:none" title="/index.php/admin/survey/sa/listsurveys"><span>837319</span><span>852743</span><span>464641</span><span>193941</span><span>342581</span></div>*/
/* </div>        </div>*/
/*     </div>*/
/* </div>*/
/* </div><!--end tab-->*/
/* */
/*          */
/*         </div><!-- /container --> */
/* */
/* <!--script-->*/
/* <script>*/
/* var chart = AmCharts.makeChart("chartdiv", {*/
/*   "type": "pie",*/
/*   "startDuration": 0,*/
/*    "theme": "light",*/
/*   "addClassNames": true,*/
/*   "legend":{*/
/*    	"position":"right",*/
/*     "marginRight":100,*/
/*     "autoMargins":false*/
/*   },*/
/*   "innerRadius": "30%",*/
/*   "defs": {*/
/*     "filter": [{*/
/*       "id": "shadow",*/
/*       "width": "200%",*/
/*       "height": "200%",*/
/*       "feOffset": {*/
/*         "result": "offOut",*/
/*         "in": "SourceAlpha",*/
/*         "dx": 0,*/
/*         "dy": 0*/
/*       },*/
/*       "feGaussianBlur": {*/
/*         "result": "blurOut",*/
/*         "in": "offOut",*/
/*         "stdDeviation": 5*/
/*       },*/
/*       "feBlend": {*/
/*         "in": "SourceGraphic",*/
/*         "in2": "blurOut",*/
/*         "mode": "normal"*/
/*       }*/
/*     }]*/
/*   },*/
/*   "dataProvider": [{*/
/*     "country": "Higher >90%",*/
/*     "litres": 119.9*/
/*   }, {*/
/*     "country": "Higher >80%",*/
/*     "litres": 301.9*/
/*   }, {*/
/*     "country": "Higher >75%",*/
/*     "litres": 201.1*/
/*   }, {*/
/*     "country": "Higher >70%",*/
/*     "litres": 165.8*/
/*   }, {*/
/*     "country": "Higher >64%",*/
/*     "litres": 139.9*/
/*   }, {*/
/*     "country": "Higher >55%",*/
/*     "litres": 128.3*/
/*   }, {*/
/*     "country": "Higher >50%",*/
/*     "litres": 99*/
/*   }, {*/
/*     "country": "Higher >45%",*/
/*     "litres": 75*/
/*   }, {*/
/*     "country": "Lower <45%",*/
/*     "litres": 130.4*/
/*   }],*/
/*   "valueField": "litres",*/
/*   "titleField": "country",*/
/*   "export": {*/
/*     "enabled": true*/
/*   }*/
/* });*/
/* */
/* chart.addListener("init", handleInit);*/
/* */
/* chart.addListener("rollOverSlice", function(e) {*/
/*   handleRollOver(e);*/
/* });*/
/* */
/* function handleInit(){*/
/*   chart.legend.addListener("rollOverItem", handleRollOver);*/
/* }*/
/* */
/* function handleRollOver(e){*/
/*   var wedge = e.dataItem.wedge.node;*/
/*   wedge.parentNode.appendChild(wedge);  */
/* }*/
/* </script>*/
