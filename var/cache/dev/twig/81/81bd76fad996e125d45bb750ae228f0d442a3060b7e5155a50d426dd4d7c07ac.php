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

/* security/registration.html.twig */
class __TwigTemplate_7a467be61038de22eaf4b18baf9c62891aa559fe1ca2ce8ef35947c7dcb895fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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
<h1>Bienvenue sur la page d'inscription !</h1>
    
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
    
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "Nom", [], "any", false, false, false, 9), 'row', ["label" => "Nom d'utilisateur", "attr" => ["placeholder" => "Nom de l'utilisateur", "class" => "form-control"]]);
        // line 10
        echo " 

     ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "Prenom", [], "any", false, false, false, 12), 'row', ["label" => "Prénom de l'utilisateur", "attr" => ["placeholder" => "Prénom de l'utilisateur", "class" => "form-control"]]);
        // line 13
        echo "
      ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "Sexe", [], "any", false, false, false, 14), 'row', ["label" => "Sexe", "attr" => ["placeholder" => "Genre", "class" => "form-control"]]);
        // line 15
        echo "
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "Email", [], "any", false, false, false, 16), 'row', ["label" => "Email", "attr" => ["placeholder" => "Email", "class" => "form-control"]]);
        // line 17
        echo "
      ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Mdp", [], "any", false, false, false, 18), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "Mot de passe", "class" => "form-control"]]);
        // line 19
        echo "
      ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Confirm_mdp", [], "any", false, false, false, 20), 'row', ["label" => "Confirmation du mot de passe", "attr" => ["placeholder" => "Confirmation du mot de passe", "class" => "form-control"]]);
        // line 21
        echo "
      ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "TypeUtilisateur", [], "any", false, false, false, 22), 'row', ["label" => "Type d'utilisateur", "attr" => ["placeholder" => "Type d'utilisateur", "class" => "form-control"]]);
        // line 23
        echo "
    <br/>
    <button type=\"submit\" class=\"btn btn-success\">Inscrire</button>
    <button type=\"reset\" class=\"btn btn-secondary \">  Effacer  </button>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo " 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  111 => 23,  109 => 22,  106 => 21,  104 => 20,  101 => 19,  99 => 18,  96 => 17,  94 => 16,  91 => 15,  89 => 14,  86 => 13,  84 => 12,  80 => 10,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<h1>Bienvenue sur la page d'inscription !</h1>
    
    {{form_start(form)}}
    
    {{form_row(form.Nom, {'label':'Nom d\\'utilisateur', 'attr':{
        'placeholder':'Nom de l\\'utilisateur', 'class':'form-control' }} ) }} 

     {{form_row(form.Prenom, {'label':'Prénom de l\\'utilisateur', 'attr':{
        'placeholder':'Prénom de l\\'utilisateur','class':'form-control'  }} ) }}
      {{form_row(form.Sexe, {'label':'Sexe', 'attr':{
        'placeholder':'Genre','class':'form-control'  }} ) }}
      {{form_row(form.Email, {'label':'Email', 'attr':{
        'placeholder':'Email','class':'form-control'  }} ) }}
      {{form_row(form.Mdp, {'label':'Mot de passe', 'attr':{
        'placeholder':'Mot de passe','class':'form-control'  }} ) }}
      {{form_row(form.Confirm_mdp, {'label':'Confirmation du mot de passe', 'attr':{
        'placeholder':'Confirmation du mot de passe','class':'form-control'  }} ) }}
      {{form_row(form.TypeUtilisateur, {'label':'Type d\\'utilisateur', 'attr':{
        'placeholder':'Type d\\'utilisateur','class':'form-control'}} ) }}
    <br/>
    <button type=\"submit\" class=\"btn btn-success\">Inscrire</button>
    <button type=\"reset\" class=\"btn btn-secondary \">  Effacer  </button>
    {{form_end(form)}} 

{% endblock %}

", "security/registration.html.twig", "D:\\INGETIS 2019-2020\\Projet Fil Rouge\\DailyFridge\\templates\\security\\registration.html.twig");
    }
}
