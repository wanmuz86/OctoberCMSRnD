<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/partials/statistics/list.htm */
class __TwigTemplate_6d7053da026d4f6d71503f67f4b8133d445625c43e7cb1c26bea898834806bcb extends Twig_Template
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
        echo "<div class=\"row\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"widget\">
\t\t\t<div class=\"widget-content\">
    <h1>Pilihan Statistik</h1>

    \t
    <script src=\"https://code.jquery.com/jquery-1.10.2.js\"></script>
    <script>
    \$(document).ready( function ()
    {
        \$('#account_type').change(function()
        {
            var option = \$(this).find('option:selected').val();
            if(option != 3){
                \$('#agency_form').hide();
            }else{
                \$('#agency_form').show();
            }
        });
    });
    </script>
\t<form method=\"GET\" action=\"statistics/statresult\" accept-charset=\"UTF-8\">
        <!-- agency field -->
\t\t<div class=\"form-group\">
      <select class=\"form-control\">
              <option selected>Pilihan Statistik</option>
                        <option value=\"Statistik Penggunaan Servis}\">Statistik Penggunaan Servis</option>
                        <option value=\"Peggunaan Servis Atas Talian}\">Peggunaan Servis Atas Talian</option>
                </select>   
\t  </div>
\t  <div class=\"form-group\"> 
\t\t  <select class=\"form-control\" name=\"agency\"><option value=\"1\">Jabatan Pendaftaran Negara</option><option value=\"3\">Kumpulan Wang Simpanan Nasional</option><option value=\"6\">Jabatan Pengakutan Jalan</option><option value=\"7\">Jabatan Imigresen Malaysia</option><option value=\"10\">PERKESO</option><option value=\"11\">Lembaga Hasil Dalam Negeri</option><option value=\"14\">Jabatan Kastam Malaysia</option><option value=\"15\">Kementerian Kesihatan</option><option value=\"18\">Kementerian Pendidikan</option><option value=\"19\">Kementerian Kewangan</option><option value=\"20\">Kementerian Pembangunan Sumber Manusia</option><option value=\"23\">MAMPU</option><option value=\"24\">Kementerian Pembangunan Wanita,Keluarga dan Masyarakat</option><option value=\"25\">Kementerian Sumber Alam dan Sekitar</option></select>
\t\t</div>
        <!-- Update Profile Field -->
        <div class=\"form-group\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Dapatkan Statistik\">
        </div>
\t\t<i>Use JPN, JPJ and KWSP for testing purposes.</i>
</form>
</div>
</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/partials/statistics/list.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="row">*/
/* <div class="container">*/
/* 	<div class="row">*/
/* 		<div class="widget">*/
/* 			<div class="widget-content">*/
/*     <h1>Pilihan Statistik</h1>*/
/* */
/*     	*/
/*     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>*/
/*     <script>*/
/*     $(document).ready( function ()*/
/*     {*/
/*         $('#account_type').change(function()*/
/*         {*/
/*             var option = $(this).find('option:selected').val();*/
/*             if(option != 3){*/
/*                 $('#agency_form').hide();*/
/*             }else{*/
/*                 $('#agency_form').show();*/
/*             }*/
/*         });*/
/*     });*/
/*     </script>*/
/* 	<form method="GET" action="statistics/statresult" accept-charset="UTF-8">*/
/*         <!-- agency field -->*/
/* 		<div class="form-group">*/
/*       <select class="form-control">*/
/*               <option selected>Pilihan Statistik</option>*/
/*                         <option value="Statistik Penggunaan Servis}">Statistik Penggunaan Servis</option>*/
/*                         <option value="Peggunaan Servis Atas Talian}">Peggunaan Servis Atas Talian</option>*/
/*                 </select>   */
/* 	  </div>*/
/* 	  <div class="form-group"> */
/* 		  <select class="form-control" name="agency"><option value="1">Jabatan Pendaftaran Negara</option><option value="3">Kumpulan Wang Simpanan Nasional</option><option value="6">Jabatan Pengakutan Jalan</option><option value="7">Jabatan Imigresen Malaysia</option><option value="10">PERKESO</option><option value="11">Lembaga Hasil Dalam Negeri</option><option value="14">Jabatan Kastam Malaysia</option><option value="15">Kementerian Kesihatan</option><option value="18">Kementerian Pendidikan</option><option value="19">Kementerian Kewangan</option><option value="20">Kementerian Pembangunan Sumber Manusia</option><option value="23">MAMPU</option><option value="24">Kementerian Pembangunan Wanita,Keluarga dan Masyarakat</option><option value="25">Kementerian Sumber Alam dan Sekitar</option></select>*/
/* 		</div>*/
/*         <!-- Update Profile Field -->*/
/*         <div class="form-group">*/
/*             <input class="btn btn-primary" type="submit" value="Dapatkan Statistik">*/
/*         </div>*/
/* 		<i>Use JPN, JPJ and KWSP for testing purposes.</i>*/
/* </form>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
