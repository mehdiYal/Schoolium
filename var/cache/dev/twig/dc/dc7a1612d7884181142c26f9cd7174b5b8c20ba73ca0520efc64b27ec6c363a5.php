<?php

/* adminsViews/schoolAdmin.html.twig */
class __TwigTemplate_f33907426e86888b408351b510de98f8bcf9ea5cbd78e3510c9b76fb0d02ff18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adminsViews/schoolAdmin.html.twig", 1);
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
        $__internal_0cdf945e327e39aec863484566768ec1ae07f2e45d4d421cd298f64ae2e114c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdf945e327e39aec863484566768ec1ae07f2e45d4d421cd298f64ae2e114c7->enter($__internal_0cdf945e327e39aec863484566768ec1ae07f2e45d4d421cd298f64ae2e114c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $__internal_7090f98b485ac86e9798bb149c618138e633cdcf2e56088d08c8c57b0779ef19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7090f98b485ac86e9798bb149c618138e633cdcf2e56088d08c8c57b0779ef19->enter($__internal_7090f98b485ac86e9798bb149c618138e633cdcf2e56088d08c8c57b0779ef19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cdf945e327e39aec863484566768ec1ae07f2e45d4d421cd298f64ae2e114c7->leave($__internal_0cdf945e327e39aec863484566768ec1ae07f2e45d4d421cd298f64ae2e114c7_prof);

        
        $__internal_7090f98b485ac86e9798bb149c618138e633cdcf2e56088d08c8c57b0779ef19->leave($__internal_7090f98b485ac86e9798bb149c618138e633cdcf2e56088d08c8c57b0779ef19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_995b8478b76e54707f3c87a49d334801ddd908450f2a036dc60a72bf5c24ea6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995b8478b76e54707f3c87a49d334801ddd908450f2a036dc60a72bf5c24ea6f->enter($__internal_995b8478b76e54707f3c87a49d334801ddd908450f2a036dc60a72bf5c24ea6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7248acaad1212cb2c2bf896ef1421991befd96685d3aa8abb156506b9592247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7248acaad1212cb2c2bf896ef1421991befd96685d3aa8abb156506b9592247->enter($__internal_b7248acaad1212cb2c2bf896ef1421991befd96685d3aa8abb156506b9592247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pas d'ecole associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo " </h1>
<h2>Selectioner une Ecole</h2>\t
\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecoles"] ?? $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 8
            echo "\t\t\t";
            if (($this->getAttribute($context["ecole"], "admin", array()) == null)) {
                // line 9
                echo "\t\t\t<li>
\t\t\t\t";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoSchool", array("id" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array()), "idp" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
                echo "\">Associer</a>
\t\t\t</li>
\t\t\t";
            }
            // line 13
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</ol>
";
        
        $__internal_b7248acaad1212cb2c2bf896ef1421991befd96685d3aa8abb156506b9592247->leave($__internal_b7248acaad1212cb2c2bf896ef1421991befd96685d3aa8abb156506b9592247_prof);

        
        $__internal_995b8478b76e54707f3c87a49d334801ddd908450f2a036dc60a72bf5c24ea6f->leave($__internal_995b8478b76e54707f3c87a49d334801ddd908450f2a036dc60a72bf5c24ea6f_prof);

    }

    public function getTemplateName()
    {
        return "adminsViews/schoolAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  78 => 13,  68 => 10,  65 => 9,  62 => 8,  58 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Pas d'ecole associé à {{admin.nom}} {{admin.prenom}} </h1>
<h2>Selectioner une Ecole</h2>\t
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t{% if ecole.admin ==null %}
\t\t\t<li>
\t\t\t\t{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('assoSchool',{'id':admin.id,'idp':ecole.id})}}\">Associer</a>
\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</ol>
{% endblock %}", "adminsViews/schoolAdmin.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\adminsViews\\schoolAdmin.html.twig");
    }
}
