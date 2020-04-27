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
class __TwigTemplate_3ddad42bceed9f00d1cf5c2cb8861bd99e64ff9dd18a6d3443319552392791f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
    <h2> Scan </h2>

    <div id=\"camera\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "        
        <script src=\"D:\\Ingetis\\Projet Fil Rouge\\DailyFridge\\serratus-quaggaJS-862df88\\dist\\quagga.min.js\"></script>
        
        <script type=\"text/javascript\">

            var code=\"\";
            var nom=\"\";
            var type_produit=\"\";
            var nutriments=\"\";
            var requestURL2='';
            var image=\"\";

                Quagga.init({
                inputStream : {
                    name : \"Live\",
                    type : \"LiveStream\",
                    target: document.querySelector('#camera')    // Or '#yourElement' (optional)
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
                    console.error(err);
                } else {

                        code=data.code
                        nom=data.product.brands
                        type_produit=data.product.product_name
                        nutriments=\" Calcium : \"+data.product.nutriments.calcium + \"/ sel: \"+data.product.nutriments.salt+\"/ sodium:\"+data.product.nutriments.sodium+\"/ Sucre : \"+data.product.nutriments.sugars
                        image=data.product.image_url

                    console.log(image);


            //          text = `code: \${data.code}
            // product: \${data.product.product_name}`

                //console.log(text);
                console.log(code);
                console.log(\"nutriments :\"+nutriments);

            // var myH1 = document.createElement('h1');
            // myH1.textContent = text;
            // header.appendChild(myH1);


                }
            });
            var myH3 = document.createElement('h3');
            myH3.textContent = \"code :\"+code + \"/ nom:\"+nom+\" / Type produit :\"+type_produit+\"/ nutriments :\"+nutriments;
            header.appendChild(myH3);

            var myArticle = document.createElement('article');
            var myImage = document.createElement(\"IMG\");
            myImage.setAttribute(\"src\",image);
            myArticle.appendChild(myImage);
            section.appendChild(myArticle);





            // var myArticle = document.createElement('article');
            // var myH2 = document.createElement('h2');
            //
            // myH2.textContent = nutriments;
            //
            // myArticle.appendChild(myH2);
            // section.appendChild(myArticle);


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
        return array (  93 => 11,  83 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <h2> Scan </h2>

    <div id=\"camera\"></div>
{% endblock %}

    {% block javascripts %}
        
        <script src=\"D:\\Ingetis\\Projet Fil Rouge\\DailyFridge\\serratus-quaggaJS-862df88\\dist\\quagga.min.js\"></script>
        
        <script type=\"text/javascript\">

            var code=\"\";
            var nom=\"\";
            var type_produit=\"\";
            var nutriments=\"\";
            var requestURL2='';
            var image=\"\";

                Quagga.init({
                inputStream : {
                    name : \"Live\",
                    type : \"LiveStream\",
                    target: document.querySelector('#camera')    // Or '#yourElement' (optional)
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
                    console.error(err);
                } else {

                        code=data.code
                        nom=data.product.brands
                        type_produit=data.product.product_name
                        nutriments=\" Calcium : \"+data.product.nutriments.calcium + \"/ sel: \"+data.product.nutriments.salt+\"/ sodium:\"+data.product.nutriments.sodium+\"/ Sucre : \"+data.product.nutriments.sugars
                        image=data.product.image_url

                    console.log(image);


            //          text = `code: \${data.code}
            // product: \${data.product.product_name}`

                //console.log(text);
                console.log(code);
                console.log(\"nutriments :\"+nutriments);

            // var myH1 = document.createElement('h1');
            // myH1.textContent = text;
            // header.appendChild(myH1);


                }
            });
            var myH3 = document.createElement('h3');
            myH3.textContent = \"code :\"+code + \"/ nom:\"+nom+\" / Type produit :\"+type_produit+\"/ nutriments :\"+nutriments;
            header.appendChild(myH3);

            var myArticle = document.createElement('article');
            var myImage = document.createElement(\"IMG\");
            myImage.setAttribute(\"src\",image);
            myArticle.appendChild(myImage);
            section.appendChild(myArticle);





            // var myArticle = document.createElement('article');
            // var myH2 = document.createElement('h2');
            //
            // myH2.textContent = nutriments;
            //
            // myArticle.appendChild(myH2);
            // section.appendChild(myArticle);


            });

        </script>   
{% endblock %}", "daily_fridge/page_scan.html.twig", "D:\\INGETIS 2019-2020\\Projet Fil Rouge\\DailyFridge\\templates\\daily_fridge\\page_scan.html.twig");
    }
}
