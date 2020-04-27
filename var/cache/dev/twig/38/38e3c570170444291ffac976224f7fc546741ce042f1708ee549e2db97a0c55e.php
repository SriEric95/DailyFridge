<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* daily_fridge/page_scan.html.twig */
class __TwigTemplate_bbb6a3f8b316754e2c52d60f23c77a3f58bec71b18cf41375c08954677297e64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/page_scan.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/page_scan.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/page_scan.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<head>
  <title>Camera</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  
</head>
<body>
  <section id=\"sel\">

  </section>
  <h2> Bienvenue sur la page de Scan d'un produit ! </h2>
  <div id=\"camera\"></div>

";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        // line 173
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "

      <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/quagga.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\">

      // const myDiv = 0;
      var tableau = \"\";
      var quantite = \"0\";
      var date_limite = \"00-00-0000\";
      var testAffichage = \"\";
      var sel_V = \"0\";
      var calcium = \"0\";
      var sucre = \"0\";
      var fibre = \"0\";
      var energie = \"0\";
      var gras = \"0\";
      var sodium = \"0\";
      var proteines = \"0\";
      var code=\"\";
      var nom=\"Non défini\";
      var nomCheckbox = \"Non défini\" ;
      var marque=\"Non défini\";
      var type_produit=\"0\";
      var nutriments=\"0\";
      var requestURL2='';
      var image=\"\";
      


      

        Quagga.init({
          inputStream : {
            name : \"Live\",
                    type : \"LiveStream\",
                    constraints: {width:1000, height: 1000},
                    target: document.querySelector('#camera')     // Or '#yourElement' (optional)
          },
          decoder: {
              readers: ['ean_reader', 'code_128_reader']
          }
        }, function(err) {
            if (err) {
                console.log(err);
                return
            }
            console.log(\"Initialization finished. Ready to start\");
            Quagga.start();
        });

    var header = document.querySelector('header');
    var section = document.querySelector('section');
      Quagga.onDetected(function (data){
           console.log(data);
           //console.log(data.codeResult.code);
           code=data.codeResult.code;
           var getJSON = function(url, callback) {
           var xhr = new XMLHttpRequest();
           xhr.open('GET', url, true);
           xhr.responseType = 'json';

           xhr.onload = function() {
               var status = xhr.status;
               if (status == 200) {
                   callback(null, xhr.response);
               } else {
                   callback(status);
               }
           };
           xhr.send();
       };

       getJSON('https://world.openfoodfacts.org/api/v0/product/'+code+'.json',  function(err, data) {

           if (err != null) {
              //²² alert(\"Le scanne a échoué !\");
               console.error(err);              

           } else {
                code=data.code
                nom=data.product.product_name 
                marque=data.product.brands
                type_produit=data.product.product_name
                sel_V = data.product.nutriments.salt
                calcium = data.product.nutriments.calcium
                sucre = data.product.nutriments.sugars
                sodium = data.product.nutriments.sodium
                fibre = data.product.nutriments.fiber
                gras = data.product.nutriments.fat
                energie =  data.product.nutriments.energy
                proteines =  data.product.nutriments.proteins
                nutriments=\" Calcium : \"+data.product.nutriments.calcium + \"/ sel: \"+data.product.nutriments.salt+\"/ sodium:\"+data.product.nutriments.sodium+\"/ Sucre : \"+data.product.nutriments.sugars
                image= \"<img src='\"+data.product.image_url+ \"'>\";

              
              console.log(image);
              //console.log(text);
              console.log(code);
              console.log(\"nutriments :\"+nutriments);
           }
       }); 
            
         
           
           taux2 = \"Valeurtaux2\";
          tableau = '<form action=\"\" method=\"post\">' +
                    '<table class=\"table table-hover\">'+
                    '<thead><tr>'+                    
                    '<th scope=\"col\">Nom</th>'+
                    '<th scope=\"col\">Marque</th>'+
                    '<th scope=\"col\">Date limite</th>'+     
                    '<th scope=\"col\">Sucre</th>'+
                    '<th scope=\"col\">Sel</th>'+
                    '<th scope=\"col\">Protéine</th>'+                      
                    '</tr></thead>'+            
                    '<tbody><tr class=\"table-light\">'+                    
                    '<td><input type=\"text\" name=nom value =\"' + nom + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=marque value =\"' + marque + '\">'+'</label></div></td>'+
                    '<td><input type=\"date\" name=date_limite value=\"' + date_limite + '\" >'+'</label></div></td>'+
                    '<td><input type=\"text\" name=sucre value =\"' + sucre + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=sel_V value =\"' + sel_V + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=proteines value =\"' + proteines + '\">'+'</label></div></td>'+                    
                    '</tr></tbody>'+
                    '<thead><tr>'+  
                    '<th scope=\"col\">Energie</th>'+
                    '<th scope=\"col\">Gras</th>'+  
                    '<th scope=\"col\">Sodium</th>'+
                    '<th scope=\"col\">Calcium</th>'+ 
                    '<th scope=\"col\">Fibre</th>'+
                    '<th scope=\"col\">Quantite</th>'+
                    '</tr></thead>'+
                    '<tbody><tr class=\"table-light\">'+   
                    '<td><input type=\"text\" name=energie value =\"' + energie + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=gras value =\"' + gras + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=sodium value =\"' + sodium + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=calcium value =\"' + calcium + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=fibre value =\"' + fibre + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=quantite value =\"' + quantite + '\">'+'</label></div></td>'+
                    '<td><input class=\"form-check-input\" type=\"checkbox\" name=frigo value=\"Frigo\" checked=\"\">Frigo</label></div></td>'+
                    '<td><button type=\"submit\" class=\"btn btn-success\">Valider</button></td>'+
                    '<td><a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Scan");
        echo "\"><button type=\"reset\" class=\"btn btn-danger\">Annuler</button></a></td>'+
                    '</tr></tbody></table>'+
                    '</form>';

                    

               const myDiv = document.getElementById('sel');
               myDiv.innerHTML = tableau;
      });
     

  </script>
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "daily_fridge/page_scan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 159,  112 => 21,  108 => 19,  98 => 18,  87 => 173,  85 => 18,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<head>
  <title>Camera</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  
</head>
<body>
  <section id=\"sel\">

  </section>
  <h2> Bienvenue sur la page de Scan d'un produit ! </h2>
  <div id=\"camera\"></div>

{% block javascript %}


      <script src=\"{{ asset('build/quagga.min.js') }}\"></script>
      <script type=\"text/javascript\">

      // const myDiv = 0;
      var tableau = \"\";
      var quantite = \"0\";
      var date_limite = \"00-00-0000\";
      var testAffichage = \"\";
      var sel_V = \"0\";
      var calcium = \"0\";
      var sucre = \"0\";
      var fibre = \"0\";
      var energie = \"0\";
      var gras = \"0\";
      var sodium = \"0\";
      var proteines = \"0\";
      var code=\"\";
      var nom=\"Non défini\";
      var nomCheckbox = \"Non défini\" ;
      var marque=\"Non défini\";
      var type_produit=\"0\";
      var nutriments=\"0\";
      var requestURL2='';
      var image=\"\";
      


      

        Quagga.init({
          inputStream : {
            name : \"Live\",
                    type : \"LiveStream\",
                    constraints: {width:1000, height: 1000},
                    target: document.querySelector('#camera')     // Or '#yourElement' (optional)
          },
          decoder: {
              readers: ['ean_reader', 'code_128_reader']
          }
        }, function(err) {
            if (err) {
                console.log(err);
                return
            }
            console.log(\"Initialization finished. Ready to start\");
            Quagga.start();
        });

    var header = document.querySelector('header');
    var section = document.querySelector('section');
      Quagga.onDetected(function (data){
           console.log(data);
           //console.log(data.codeResult.code);
           code=data.codeResult.code;
           var getJSON = function(url, callback) {
           var xhr = new XMLHttpRequest();
           xhr.open('GET', url, true);
           xhr.responseType = 'json';

           xhr.onload = function() {
               var status = xhr.status;
               if (status == 200) {
                   callback(null, xhr.response);
               } else {
                   callback(status);
               }
           };
           xhr.send();
       };

       getJSON('https://world.openfoodfacts.org/api/v0/product/'+code+'.json',  function(err, data) {

           if (err != null) {
              //²² alert(\"Le scanne a échoué !\");
               console.error(err);              

           } else {
                code=data.code
                nom=data.product.product_name 
                marque=data.product.brands
                type_produit=data.product.product_name
                sel_V = data.product.nutriments.salt
                calcium = data.product.nutriments.calcium
                sucre = data.product.nutriments.sugars
                sodium = data.product.nutriments.sodium
                fibre = data.product.nutriments.fiber
                gras = data.product.nutriments.fat
                energie =  data.product.nutriments.energy
                proteines =  data.product.nutriments.proteins
                nutriments=\" Calcium : \"+data.product.nutriments.calcium + \"/ sel: \"+data.product.nutriments.salt+\"/ sodium:\"+data.product.nutriments.sodium+\"/ Sucre : \"+data.product.nutriments.sugars
                image= \"<img src='\"+data.product.image_url+ \"'>\";

              
              console.log(image);
              //console.log(text);
              console.log(code);
              console.log(\"nutriments :\"+nutriments);
           }
       }); 
            
         
           
           taux2 = \"Valeurtaux2\";
          tableau = '<form action=\"\" method=\"post\">' +
                    '<table class=\"table table-hover\">'+
                    '<thead><tr>'+                    
                    '<th scope=\"col\">Nom</th>'+
                    '<th scope=\"col\">Marque</th>'+
                    '<th scope=\"col\">Date limite</th>'+     
                    '<th scope=\"col\">Sucre</th>'+
                    '<th scope=\"col\">Sel</th>'+
                    '<th scope=\"col\">Protéine</th>'+                      
                    '</tr></thead>'+            
                    '<tbody><tr class=\"table-light\">'+                    
                    '<td><input type=\"text\" name=nom value =\"' + nom + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=marque value =\"' + marque + '\">'+'</label></div></td>'+
                    '<td><input type=\"date\" name=date_limite value=\"' + date_limite + '\" >'+'</label></div></td>'+
                    '<td><input type=\"text\" name=sucre value =\"' + sucre + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=sel_V value =\"' + sel_V + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=proteines value =\"' + proteines + '\">'+'</label></div></td>'+                    
                    '</tr></tbody>'+
                    '<thead><tr>'+  
                    '<th scope=\"col\">Energie</th>'+
                    '<th scope=\"col\">Gras</th>'+  
                    '<th scope=\"col\">Sodium</th>'+
                    '<th scope=\"col\">Calcium</th>'+ 
                    '<th scope=\"col\">Fibre</th>'+
                    '<th scope=\"col\">Quantite</th>'+
                    '</tr></thead>'+
                    '<tbody><tr class=\"table-light\">'+   
                    '<td><input type=\"text\" name=energie value =\"' + energie + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=gras value =\"' + gras + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=sodium value =\"' + sodium + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=calcium value =\"' + calcium + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=fibre value =\"' + fibre + '\">'+'</label></div></td>'+
                    '<td><input type=\"text\" name=quantite value =\"' + quantite + '\">'+'</label></div></td>'+
                    '<td><input class=\"form-check-input\" type=\"checkbox\" name=frigo value=\"Frigo\" checked=\"\">Frigo</label></div></td>'+
                    '<td><button type=\"submit\" class=\"btn btn-success\">Valider</button></td>'+
                    '<td><a href=\"{{ path(\"daily_fridge_Scan\") }}\"><button type=\"reset\" class=\"btn btn-danger\">Annuler</button></a></td>'+
                    '</tr></tbody></table>'+
                    '</form>';

                    

               const myDiv = document.getElementById('sel');
               myDiv.innerHTML = tableau;
      });
     

  </script>
    
    {% endblock %}
    
{% endblock %}", "daily_fridge/page_scan.html.twig", "D:\\DailyFridge\\templates\\daily_fridge\\page_scan.html.twig");
    }
}
