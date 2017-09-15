<?php

/* default/index.html.twig */
class __TwigTemplate_6420f902b2ac7ffa99f6ea01e49d2a8e2784fd81fbd0bcd0a8da990ebd2ec4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_180ee6e38018917ccbe0e98491d35568f1ff9d1ce8743df753175ae0f99ed194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180ee6e38018917ccbe0e98491d35568f1ff9d1ce8743df753175ae0f99ed194->enter($__internal_180ee6e38018917ccbe0e98491d35568f1ff9d1ce8743df753175ae0f99ed194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_9ecd65bce37648f4828ad1cb6b8b256c0eb59b0beb7df7d21525243cb7aedadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecd65bce37648f4828ad1cb6b8b256c0eb59b0beb7df7d21525243cb7aedadd->enter($__internal_9ecd65bce37648f4828ad1cb6b8b256c0eb59b0beb7df7d21525243cb7aedadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180ee6e38018917ccbe0e98491d35568f1ff9d1ce8743df753175ae0f99ed194->leave($__internal_180ee6e38018917ccbe0e98491d35568f1ff9d1ce8743df753175ae0f99ed194_prof);

        
        $__internal_9ecd65bce37648f4828ad1cb6b8b256c0eb59b0beb7df7d21525243cb7aedadd->leave($__internal_9ecd65bce37648f4828ad1cb6b8b256c0eb59b0beb7df7d21525243cb7aedadd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23fd1fdf22ebb6fc695b2073bdd8e9aa8f327ba0fbb211fbda4e0bc5e24fc60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fd1fdf22ebb6fc695b2073bdd8e9aa8f327ba0fbb211fbda4e0bc5e24fc60f->enter($__internal_23fd1fdf22ebb6fc695b2073bdd8e9aa8f327ba0fbb211fbda4e0bc5e24fc60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c15115bbbd3f3db4cf684e1ff92e4314ec869e00010dd766c051d1a3d232d830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15115bbbd3f3db4cf684e1ff92e4314ec869e00010dd766c051d1a3d232d830->enter($__internal_c15115bbbd3f3db4cf684e1ff92e4314ec869e00010dd766c051d1a3d232d830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_c15115bbbd3f3db4cf684e1ff92e4314ec869e00010dd766c051d1a3d232d830->leave($__internal_c15115bbbd3f3db4cf684e1ff92e4314ec869e00010dd766c051d1a3d232d830_prof);

        
        $__internal_23fd1fdf22ebb6fc695b2073bdd8e9aa8f327ba0fbb211fbda4e0bc5e24fc60f->leave($__internal_23fd1fdf22ebb6fc695b2073bdd8e9aa8f327ba0fbb211fbda4e0bc5e24fc60f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            {% if  app.user %}
            <h1>{{app.user.nom}}</h1>
            {% endif %}
        </div>
    </div>
{% endblock %}", "default/index.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\default\\index.html.twig");
    }
}
