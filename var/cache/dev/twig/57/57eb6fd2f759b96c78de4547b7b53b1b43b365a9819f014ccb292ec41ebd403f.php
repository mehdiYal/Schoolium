<?php

/* schoolsViews/listSchools.html.twig */
class __TwigTemplate_5d8d404ea4870075559bd45882f945368e61f3c2ed6262eb6b1e16f944efe606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "schoolsViews/listSchools.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2305e897b8d4f5b656b72c36801f35d01bd2f24a5710c05fc8c7c7aecb78de90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2305e897b8d4f5b656b72c36801f35d01bd2f24a5710c05fc8c7c7aecb78de90->enter($__internal_2305e897b8d4f5b656b72c36801f35d01bd2f24a5710c05fc8c7c7aecb78de90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $__internal_005de3294f68bd28ee2ad93cfca29bf850620c41d556545c009ea314c532a117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005de3294f68bd28ee2ad93cfca29bf850620c41d556545c009ea314c532a117->enter($__internal_005de3294f68bd28ee2ad93cfca29bf850620c41d556545c009ea314c532a117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2305e897b8d4f5b656b72c36801f35d01bd2f24a5710c05fc8c7c7aecb78de90->leave($__internal_2305e897b8d4f5b656b72c36801f35d01bd2f24a5710c05fc8c7c7aecb78de90_prof);

        
        $__internal_005de3294f68bd28ee2ad93cfca29bf850620c41d556545c009ea314c532a117->leave($__internal_005de3294f68bd28ee2ad93cfca29bf850620c41d556545c009ea314c532a117_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78e2ccf6dcb6aa8b93c910cd6fa05fd44943e85afc4f74343972eb3a5258782f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e2ccf6dcb6aa8b93c910cd6fa05fd44943e85afc4f74343972eb3a5258782f->enter($__internal_78e2ccf6dcb6aa8b93c910cd6fa05fd44943e85afc4f74343972eb3a5258782f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14b7cda7030578fc6d239341316851e85ee53baf30f841a668aafa2205064b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b7cda7030578fc6d239341316851e85ee53baf30f841a668aafa2205064b05->enter($__internal_14b7cda7030578fc6d239341316851e85ee53baf30f841a668aafa2205064b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecoles"] ?? $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Profile</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_14b7cda7030578fc6d239341316851e85ee53baf30f841a668aafa2205064b05->leave($__internal_14b7cda7030578fc6d239341316851e85ee53baf30f841a668aafa2205064b05_prof);

        
        $__internal_78e2ccf6dcb6aa8b93c910cd6fa05fd44943e85afc4f74343972eb3a5258782f->leave($__internal_78e2ccf6dcb6aa8b93c910cd6fa05fd44943e85afc4f74343972eb3a5258782f_prof);

    }

    public function getTemplateName()
    {
        return "schoolsViews/listSchools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>{{'list'|trans}} {{'schools'|trans}}</h1>
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t<li>{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('editSchool',{'id':ecole.id})}}\">Modifier</a> <a href=\"{{ path('removeSchool',{'id':ecole.id})}}\">Supprimer</a> <a href=\"{{ path('profileSchool',{'id':ecole.id})}}\">Profile</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "schoolsViews/listSchools.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/schoolsViews/listSchools.html.twig");
    }
}
