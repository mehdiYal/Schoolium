<?php

/* adminsViews/schoolAdmin.html.twig */
class __TwigTemplate_d3ccb3c05ecd6b8919bdf4e77c3662bb400a7083f3c6950215e3ad1bc98bc628 extends Twig_Template
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
        $__internal_cb517efdce726d410f614513292872e0ca2b91ebd2c40fd0c3c911a01a544b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb517efdce726d410f614513292872e0ca2b91ebd2c40fd0c3c911a01a544b84->enter($__internal_cb517efdce726d410f614513292872e0ca2b91ebd2c40fd0c3c911a01a544b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $__internal_e4d1f48c2a286833fa9e92d15bf27b800b10634469dd8ddf72babbc00884cc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d1f48c2a286833fa9e92d15bf27b800b10634469dd8ddf72babbc00884cc35->enter($__internal_e4d1f48c2a286833fa9e92d15bf27b800b10634469dd8ddf72babbc00884cc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb517efdce726d410f614513292872e0ca2b91ebd2c40fd0c3c911a01a544b84->leave($__internal_cb517efdce726d410f614513292872e0ca2b91ebd2c40fd0c3c911a01a544b84_prof);

        
        $__internal_e4d1f48c2a286833fa9e92d15bf27b800b10634469dd8ddf72babbc00884cc35->leave($__internal_e4d1f48c2a286833fa9e92d15bf27b800b10634469dd8ddf72babbc00884cc35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c9ab1ddd21b71644b11c43f3b1bc83f4158d6b42c6def79892bf76061682547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9ab1ddd21b71644b11c43f3b1bc83f4158d6b42c6def79892bf76061682547->enter($__internal_8c9ab1ddd21b71644b11c43f3b1bc83f4158d6b42c6def79892bf76061682547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1baef8478ebaafebdefeb11ae2ca971ec3caf1ddada6841bbfc394add40e7642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1baef8478ebaafebdefeb11ae2ca971ec3caf1ddada6841bbfc394add40e7642->enter($__internal_1baef8478ebaafebdefeb11ae2ca971ec3caf1ddada6841bbfc394add40e7642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1baef8478ebaafebdefeb11ae2ca971ec3caf1ddada6841bbfc394add40e7642->leave($__internal_1baef8478ebaafebdefeb11ae2ca971ec3caf1ddada6841bbfc394add40e7642_prof);

        
        $__internal_8c9ab1ddd21b71644b11c43f3b1bc83f4158d6b42c6def79892bf76061682547->leave($__internal_8c9ab1ddd21b71644b11c43f3b1bc83f4158d6b42c6def79892bf76061682547_prof);

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
{% endblock %}", "adminsViews/schoolAdmin.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/adminsViews/schoolAdmin.html.twig");
    }
}
