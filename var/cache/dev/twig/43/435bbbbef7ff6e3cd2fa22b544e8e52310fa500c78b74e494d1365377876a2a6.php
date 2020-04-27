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

/* daily_fridge/DailyFridgeController.php */
class __TwigTemplate_2b3878d5e8d3583eac495b9860dd527b6f86e291cd514bb118d854ff7e27cf8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/DailyFridgeController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/DailyFridgeController.php"));

        // line 1
        echo "<?php

namespace App\\Controller;
use App\\Entity\\Utilisateur;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\Routing\\Annotation\\Route;

use App\\Entity\\Produit;
use App\\Repository\\ProduitRepository;

class DailyFridgeController extends AbstractController
{
    /**
     * @Route(\"/\", name=\"daily_fridge_index\")
     */
    //";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_create");
        echo "
    public function index()
    {
        return \$this->render('daily_fridge/index.html.twig', [
            'controller_name' => 'DailyFridgeController'
        ]);
    }

     /**
     * @Route(\"/daily_fridge_inscription2\",name=\"daily_fridge_eric\")
     */
    public function create()
    {
        return \$this->render('daily_fridge/inscription.html.twig');

    }


    /**
     * @Route(\"/daily_fridge_inscription3\",name=\"daily_fridge_test\")
     */
    public function test()
    {
        return \$this->render('daily_fridge/test.html.twig');

    }

    /**
     * @Route(\"/daily_fridge_accueil\",name=\"daily_fridge_accueil\")
     */

    public function accueil()
    {
        return \$this->render('daily_fridge/accueil.html.twig');
    }

    /**
     * @Route(\"/daily_fridge_Mes_Produits\",name=\"daily_fridge_Mes_Produits\")
     */

    public function liste_produit()
    {
        \$repo=\$this->getDoctrine()->getRepository(Produit::class);

        \$produits = \$repo->findAll();

        return \$this->render('daily_fridge/mes_produits.html.twig', [
                'produits' => \$produits
        ]);

    }

    /**
     * @Route(\"/daily_fridge_Mon_Frigo\",name=\"daily_fridge_Mon_Frigo\")
     */

    public function frigo()
    {
        \$repo=\$this->getDoctrine()->getRepository(Produit::class);

        \$produits = \$repo->findAll();

        return \$this->render('daily_fridge/mon_frigo.html.twig', [
                'produits' => \$produits
        ]);

    }

    /**
     * @Route(\"/daily_fridge_Mes_Recettes\",name=\"daily_fridge_Mes_Recettes\")
     */

    public function recette()
    {
        return \$this->render('daily_fridge/mes_recettes.html.twig');

    }

    /**
     * @Route(\"/daily_fridge_Info_Recette\",name=\"daily_fridge_Info_Recette\")
     */

    public function info_recette()
    {
        return \$this->render('daily_fridge/info_recette.html.twig');

    }

    /**
     * @Route(\"/daily_fridge_Scan\",name=\"daily_fridge_Scan\")
     */

    public function scan()
    {
        return \$this->render('daily_fridge/page_scan.html.twig');

    }


    

    

   
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "daily_fridge/DailyFridgeController.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Controller;
use App\\Entity\\Utilisateur;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\Routing\\Annotation\\Route;

use App\\Entity\\Produit;
use App\\Repository\\ProduitRepository;

class DailyFridgeController extends AbstractController
{
    /**
     * @Route(\"/\", name=\"daily_fridge_index\")
     */
    //{{path('daily_fridge_create')}}
    public function index()
    {
        return \$this->render('daily_fridge/index.html.twig', [
            'controller_name' => 'DailyFridgeController'
        ]);
    }

     /**
     * @Route(\"/daily_fridge_inscription2\",name=\"daily_fridge_eric\")
     */
    public function create()
    {
        return \$this->render('daily_fridge/inscription.html.twig');

    }


    /**
     * @Route(\"/daily_fridge_inscription3\",name=\"daily_fridge_test\")
     */
    public function test()
    {
        return \$this->render('daily_fridge/test.html.twig');

    }

    /**
     * @Route(\"/daily_fridge_accueil\",name=\"daily_fridge_accueil\")
     */

    public function accueil()
    {
        return \$this->render('daily_fridge/accueil.html.twig');
    }

    /**
     * @Route(\"/daily_fridge_Mes_Produits\",name=\"daily_fridge_Mes_Produits\")
     */

    public function liste_produit()
    {
        \$repo=\$this->getDoctrine()->getRepository(Produit::class);

        \$produits = \$repo->findAll();

        return \$this->render('daily_fridge/mes_produits.html.twig', [
                'produits' => \$produits
        ]);

    }

    /**
     * @Route(\"/daily_fridge_Mon_Frigo\",name=\"daily_fridge_Mon_Frigo\")
     */

    public function frigo()
    {
        \$repo=\$this->getDoctrine()->getRepository(Produit::class);

        \$produits = \$repo->findAll();

        return \$this->render('daily_fridge/mon_frigo.html.twig', [
                'produits' => \$produits
        ]);

    }

    /**
     * @Route(\"/daily_fridge_Mes_Recettes\",name=\"daily_fridge_Mes_Recettes\")
     */

    public function recette()
    {
        return \$this->render('daily_fridge/mes_recettes.html.twig');

    }

    /**
     * @Route(\"/daily_fridge_Info_Recette\",name=\"daily_fridge_Info_Recette\")
     */

    public function info_recette()
    {
        return \$this->render('daily_fridge/info_recette.html.twig');

    }

    /**
     * @Route(\"/daily_fridge_Scan\",name=\"daily_fridge_Scan\")
     */

    public function scan()
    {
        return \$this->render('daily_fridge/page_scan.html.twig');

    }


    

    

   
}
", "daily_fridge/DailyFridgeController.php", "D:\\INGETIS 2019-2020\\Projet Fil Rouge\\DailyFridge\\templates\\daily_fridge\\DailyFridgeController.php");
    }
}
