<?php

/* :adminsViews:schoolAdmin.html.twig */
class __TwigTemplate_06534e06b86240a7fdd4701e312e8f46ddb42f30bb6daf1fe4064a3cb0af3f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adminsViews:schoolAdmin.html.twig", 1);
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
        $__internal_6f2339d62a48ed297a1583370a4868621a5afe2e6ba96edf071cef60d51bdab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2339d62a48ed297a1583370a4868621a5afe2e6ba96edf071cef60d51bdab8->enter($__internal_6f2339d62a48ed297a1583370a4868621a5afe2e6ba96edf071cef60d51bdab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $__internal_ae287cf5c20c04a2dca8522d357895ea616a57ab8950a441a1fc5e18376215ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae287cf5c20c04a2dca8522d357895ea616a57ab8950a441a1fc5e18376215ab->enter($__internal_ae287cf5c20c04a2dca8522d357895ea616a57ab8950a441a1fc5e18376215ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f2339d62a48ed297a1583370a4868621a5afe2e6ba96edf071cef60d51bdab8->leave($__internal_6f2339d62a48ed297a1583370a4868621a5afe2e6ba96edf071cef60d51bdab8_prof);

        
        $__internal_ae287cf5c20c04a2dca8522d357895ea616a57ab8950a441a1fc5e18376215ab->leave($__internal_ae287cf5c20c04a2dca8522d357895ea616a57ab8950a441a1fc5e18376215ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3c07542c707e46779cd5bc925c36ea36ae7c58b8e23eec7a7b27689c31df995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c07542c707e46779cd5bc925c36ea36ae7c58b8e23eec7a7b27689c31df995->enter($__internal_d3c07542c707e46779cd5bc925c36ea36ae7c58b8e23eec7a7b27689c31df995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20979dadd4b1ec668a967eb5d61013d3e2b7ce63d8c2ca8ae02ffb98af84eee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20979dadd4b1ec668a967eb5d61013d3e2b7ce63d8c2ca8ae02ffb98af84eee9->enter($__internal_20979dadd4b1ec668a967eb5d61013d3e2b7ce63d8c2ca8ae02ffb98af84eee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pas d'ecole associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo " </h1>
<h2>Selectioner une Ecole</h2>\t
\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoSchool", array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array()), "idp" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
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
        
        $__internal_20979dadd4b1ec668a967eb5d61013d3e2b7ce63d8c2ca8ae02ffb98af84eee9->leave($__internal_20979dadd4b1ec668a967eb5d61013d3e2b7ce63d8c2ca8ae02ffb98af84eee9_prof);

        
        $__internal_d3c07542c707e46779cd5bc925c36ea36ae7c58b8e23eec7a7b27689c31df995->leave($__internal_d3c07542c707e46779cd5bc925c36ea36ae7c58b8e23eec7a7b27689c31df995_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:schoolAdmin.html.twig";
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
{% endblock %}", ":adminsViews:schoolAdmin.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/adminsViews/schoolAdmin.html.twig");
    }
}
