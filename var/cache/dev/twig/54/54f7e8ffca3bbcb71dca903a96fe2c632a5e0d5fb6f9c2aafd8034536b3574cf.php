<?php

/* elevesViews/parentEleve.html.twig */
class __TwigTemplate_45c6d4126ffb9acaf7c68067a2f322509f1131b0aeee1d8726349f896e8918bf extends Twig_Template
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
        $__internal_6bff636963cbab781aef7e6b016f0953557de19428826ae1e4a53264f44806d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bff636963cbab781aef7e6b016f0953557de19428826ae1e4a53264f44806d0->enter($__internal_6bff636963cbab781aef7e6b016f0953557de19428826ae1e4a53264f44806d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $__internal_233d61de93f609891cf1181d501cba46d3dcea6150c1673538b7291d5d0ed572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233d61de93f609891cf1181d501cba46d3dcea6150c1673538b7291d5d0ed572->enter($__internal_233d61de93f609891cf1181d501cba46d3dcea6150c1673538b7291d5d0ed572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bff636963cbab781aef7e6b016f0953557de19428826ae1e4a53264f44806d0->leave($__internal_6bff636963cbab781aef7e6b016f0953557de19428826ae1e4a53264f44806d0_prof);

        
        $__internal_233d61de93f609891cf1181d501cba46d3dcea6150c1673538b7291d5d0ed572->leave($__internal_233d61de93f609891cf1181d501cba46d3dcea6150c1673538b7291d5d0ed572_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2662504bc78e8cf615b3d65152182772efafb586ab23252caccbcdc0551f59a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2662504bc78e8cf615b3d65152182772efafb586ab23252caccbcdc0551f59a7->enter($__internal_2662504bc78e8cf615b3d65152182772efafb586ab23252caccbcdc0551f59a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a31a9fae6ebb9d59947a505c985f577ddd8ff5a8fe5568758e4fe2c9b06f91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a31a9fae6ebb9d59947a505c985f577ddd8ff5a8fe5568758e4fe2c9b06f91b->enter($__internal_2a31a9fae6ebb9d59947a505c985f577ddd8ff5a8fe5568758e4fe2c9b06f91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a31a9fae6ebb9d59947a505c985f577ddd8ff5a8fe5568758e4fe2c9b06f91b->leave($__internal_2a31a9fae6ebb9d59947a505c985f577ddd8ff5a8fe5568758e4fe2c9b06f91b_prof);

        
        $__internal_2662504bc78e8cf615b3d65152182772efafb586ab23252caccbcdc0551f59a7->leave($__internal_2662504bc78e8cf615b3d65152182772efafb586ab23252caccbcdc0551f59a7_prof);

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
{% endblock %}", "elevesViews/parentEleve.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\elevesViews\\parentEleve.html.twig");
    }
}
