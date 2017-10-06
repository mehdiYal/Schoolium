<?php

/* classesViews/eleves.html.twig */
class __TwigTemplate_6d3c4452ec3e8298a24e4dcc16c516a9e1835dab2dcebceaf3101332fb670017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classesViews/eleves.html.twig", 1);
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
        $__internal_ac4aa112f4005eccbda8fc52b1badf8933d6ac82092f280c9a9337e4fe0962dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4aa112f4005eccbda8fc52b1badf8933d6ac82092f280c9a9337e4fe0962dc->enter($__internal_ac4aa112f4005eccbda8fc52b1badf8933d6ac82092f280c9a9337e4fe0962dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/eleves.html.twig"));

        $__internal_aee78c4cc671aa016513c1c3a47a4929ed59aefdfde39cf7e2ce8a201131a0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee78c4cc671aa016513c1c3a47a4929ed59aefdfde39cf7e2ce8a201131a0ea->enter($__internal_aee78c4cc671aa016513c1c3a47a4929ed59aefdfde39cf7e2ce8a201131a0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac4aa112f4005eccbda8fc52b1badf8933d6ac82092f280c9a9337e4fe0962dc->leave($__internal_ac4aa112f4005eccbda8fc52b1badf8933d6ac82092f280c9a9337e4fe0962dc_prof);

        
        $__internal_aee78c4cc671aa016513c1c3a47a4929ed59aefdfde39cf7e2ce8a201131a0ea->leave($__internal_aee78c4cc671aa016513c1c3a47a4929ed59aefdfde39cf7e2ce8a201131a0ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc3193c1a6b686c9a662762ee54860282db0d4b611400bb7e4b4f99a7a1d118a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3193c1a6b686c9a662762ee54860282db0d4b611400bb7e4b4f99a7a1d118a->enter($__internal_bc3193c1a6b686c9a662762ee54860282db0d4b611400bb7e4b4f99a7a1d118a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fc6fb2c543dac69872c1e32ba17f2ebef7c484021e7bcf5e1777aa9f17a1288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc6fb2c543dac69872c1e32ba17f2ebef7c484021e7bcf5e1777aa9f17a1288->enter($__internal_4fc6fb2c543dac69872c1e32ba17f2ebef7c484021e7bcf5e1777aa9f17a1288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump(($context["eleves"] ?? $this->getContext($context, "eleves")));
        }
        // line 6
        echo "\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eleves"] ?? $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 8
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["eleve"], "nom", array()) . " ") . $this->getAttribute($context["eleve"], "prenom", array())), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</ol>
\t
";
        
        $__internal_4fc6fb2c543dac69872c1e32ba17f2ebef7c484021e7bcf5e1777aa9f17a1288->leave($__internal_4fc6fb2c543dac69872c1e32ba17f2ebef7c484021e7bcf5e1777aa9f17a1288_prof);

        
        $__internal_bc3193c1a6b686c9a662762ee54860282db0d4b611400bb7e4b4f99a7a1d118a->leave($__internal_bc3193c1a6b686c9a662762ee54860282db0d4b611400bb7e4b4f99a7a1d118a_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/eleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  67 => 8,  63 => 7,  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
{% dump(eleves) %}
\t<ol>
\t\t{% for eleve in eleves %}
\t\t<li>{{eleve.nom~' '~eleve.prenom}}</li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "classesViews/eleves.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\classesViews\\eleves.html.twig");
    }
}
