<?php

/* elevesViews/parentEleve.html.twig */
class __TwigTemplate_1524a11dca7d1c17bb88a47b406c924f654892d350ee5780c6d16175aeaf66e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "elevesViews/parentEleve.html.twig", 1);
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
        $__internal_34dd55c0b52f29f1881508cc9b57d967ca2f6d5eea603b8a69ea27a0a3698a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34dd55c0b52f29f1881508cc9b57d967ca2f6d5eea603b8a69ea27a0a3698a07->enter($__internal_34dd55c0b52f29f1881508cc9b57d967ca2f6d5eea603b8a69ea27a0a3698a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $__internal_83953d4c0432dcd93d9412eddaa19eb8fbe219d1c6869ebaba34781de9e29492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83953d4c0432dcd93d9412eddaa19eb8fbe219d1c6869ebaba34781de9e29492->enter($__internal_83953d4c0432dcd93d9412eddaa19eb8fbe219d1c6869ebaba34781de9e29492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34dd55c0b52f29f1881508cc9b57d967ca2f6d5eea603b8a69ea27a0a3698a07->leave($__internal_34dd55c0b52f29f1881508cc9b57d967ca2f6d5eea603b8a69ea27a0a3698a07_prof);

        
        $__internal_83953d4c0432dcd93d9412eddaa19eb8fbe219d1c6869ebaba34781de9e29492->leave($__internal_83953d4c0432dcd93d9412eddaa19eb8fbe219d1c6869ebaba34781de9e29492_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a864b860b2cd6b89d57d54bafe8bd34271a07738c6a6057270a63098c986028e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a864b860b2cd6b89d57d54bafe8bd34271a07738c6a6057270a63098c986028e->enter($__internal_a864b860b2cd6b89d57d54bafe8bd34271a07738c6a6057270a63098c986028e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12ad7874d8697b19144cd38a6d11649dd19270ee5118f0a91abd240dd8a985c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ad7874d8697b19144cd38a6d11649dd19270ee5118f0a91abd240dd8a985c0->enter($__internal_12ad7874d8697b19144cd38a6d11649dd19270ee5118f0a91abd240dd8a985c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pas de parent associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eleve"] ?? $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eleve"] ?? $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo " </h1>
<h2>Selectioner un parent</h2>\t
\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parents"] ?? $this->getContext($context, "parents")));
        foreach ($context['_seq'] as $context["_key"] => $context["parant"]) {
            // line 8
            echo "\t\t\t<li>
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "prenom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoParent", array("id" => $this->getAttribute(($context["eleve"] ?? $this->getContext($context, "eleve")), "id", array()), "idp" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">Associer</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ol>
";
        
        $__internal_12ad7874d8697b19144cd38a6d11649dd19270ee5118f0a91abd240dd8a985c0->leave($__internal_12ad7874d8697b19144cd38a6d11649dd19270ee5118f0a91abd240dd8a985c0_prof);

        
        $__internal_a864b860b2cd6b89d57d54bafe8bd34271a07738c6a6057270a63098c986028e->leave($__internal_a864b860b2cd6b89d57d54bafe8bd34271a07738c6a6057270a63098c986028e_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/parentEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  65 => 9,  62 => 8,  58 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Pas de parent associé à {{eleve.nom}} {{eleve.prenom}} </h1>
<h2>Selectioner un parent</h2>\t
\t<ol>
\t\t{% for parant in parents %}
\t\t\t<li>
\t\t\t\t{{ parant.nom}} {{ parant.prenom}} <a href=\"{{ path('assoParent',{'id':eleve.id,'idp':parant.id})}}\">Associer</a>
\t\t\t</li>
\t\t{% endfor %}
\t</ol>
{% endblock %}", "elevesViews/parentEleve.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/parentEleve.html.twig");
    }
}
