<?php

/* :elevesViews:parentEleve.html.twig */
class __TwigTemplate_573e401ba6352335624a8c7a2cd15ca3630fbc326da46fffe11bfd9ae58bb992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":elevesViews:parentEleve.html.twig", 1);
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
        $__internal_21b382c0a3c8c7dc4f522eb4d9520810f06535d14ec2d01147604d895e6a9800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b382c0a3c8c7dc4f522eb4d9520810f06535d14ec2d01147604d895e6a9800->enter($__internal_21b382c0a3c8c7dc4f522eb4d9520810f06535d14ec2d01147604d895e6a9800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $__internal_da68d786ef6887ac968b23d220a313b01f4bee4ef5a5b727a69386516913599d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da68d786ef6887ac968b23d220a313b01f4bee4ef5a5b727a69386516913599d->enter($__internal_da68d786ef6887ac968b23d220a313b01f4bee4ef5a5b727a69386516913599d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21b382c0a3c8c7dc4f522eb4d9520810f06535d14ec2d01147604d895e6a9800->leave($__internal_21b382c0a3c8c7dc4f522eb4d9520810f06535d14ec2d01147604d895e6a9800_prof);

        
        $__internal_da68d786ef6887ac968b23d220a313b01f4bee4ef5a5b727a69386516913599d->leave($__internal_da68d786ef6887ac968b23d220a313b01f4bee4ef5a5b727a69386516913599d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d512308e4bd467321b401d2d7d9bc0359037275cd80b7cf8b4f81786503d6f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d512308e4bd467321b401d2d7d9bc0359037275cd80b7cf8b4f81786503d6f0b->enter($__internal_d512308e4bd467321b401d2d7d9bc0359037275cd80b7cf8b4f81786503d6f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fb5819bdc513a62d6c427850d68fb99a400b7e8033895b5914b399d19bc41e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb5819bdc513a62d6c427850d68fb99a400b7e8033895b5914b399d19bc41e9->enter($__internal_0fb5819bdc513a62d6c427850d68fb99a400b7e8033895b5914b399d19bc41e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0fb5819bdc513a62d6c427850d68fb99a400b7e8033895b5914b399d19bc41e9->leave($__internal_0fb5819bdc513a62d6c427850d68fb99a400b7e8033895b5914b399d19bc41e9_prof);

        
        $__internal_d512308e4bd467321b401d2d7d9bc0359037275cd80b7cf8b4f81786503d6f0b->leave($__internal_d512308e4bd467321b401d2d7d9bc0359037275cd80b7cf8b4f81786503d6f0b_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:parentEleve.html.twig";
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
{% endblock %}", ":elevesViews:parentEleve.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/elevesViews/parentEleve.html.twig");
    }
}
