<?php

/* default/index.html.twig */
class __TwigTemplate_e7dd53a1d59c18ca9afe194e1bc787facc3052bd1f139ee8df3eac6ed5269f37 extends Twig_Template
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
        $__internal_1f53b3832bb33edbf275abcc8eb2d70405e455fc2f20ce06a0b91ab583ec0e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f53b3832bb33edbf275abcc8eb2d70405e455fc2f20ce06a0b91ab583ec0e7e->enter($__internal_1f53b3832bb33edbf275abcc8eb2d70405e455fc2f20ce06a0b91ab583ec0e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_7e0c5546ebafc0e7e1f2bf6946bf1e1234058291e58817e86f371f45a6939266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0c5546ebafc0e7e1f2bf6946bf1e1234058291e58817e86f371f45a6939266->enter($__internal_7e0c5546ebafc0e7e1f2bf6946bf1e1234058291e58817e86f371f45a6939266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f53b3832bb33edbf275abcc8eb2d70405e455fc2f20ce06a0b91ab583ec0e7e->leave($__internal_1f53b3832bb33edbf275abcc8eb2d70405e455fc2f20ce06a0b91ab583ec0e7e_prof);

        
        $__internal_7e0c5546ebafc0e7e1f2bf6946bf1e1234058291e58817e86f371f45a6939266->leave($__internal_7e0c5546ebafc0e7e1f2bf6946bf1e1234058291e58817e86f371f45a6939266_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_382fd77c3c11c58983558a1d56256083ec9f5972b8e0f0176ed869fc86eb4fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382fd77c3c11c58983558a1d56256083ec9f5972b8e0f0176ed869fc86eb4fb2->enter($__internal_382fd77c3c11c58983558a1d56256083ec9f5972b8e0f0176ed869fc86eb4fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ba48fdac2bc48779877855ab3228bb3d7924bf3b38d38c945ae4947e414784b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba48fdac2bc48779877855ab3228bb3d7924bf3b38d38c945ae4947e414784b->enter($__internal_1ba48fdac2bc48779877855ab3228bb3d7924bf3b38d38c945ae4947e414784b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1ba48fdac2bc48779877855ab3228bb3d7924bf3b38d38c945ae4947e414784b->leave($__internal_1ba48fdac2bc48779877855ab3228bb3d7924bf3b38d38c945ae4947e414784b_prof);

        
        $__internal_382fd77c3c11c58983558a1d56256083ec9f5972b8e0f0176ed869fc86eb4fb2->leave($__internal_382fd77c3c11c58983558a1d56256083ec9f5972b8e0f0176ed869fc86eb4fb2_prof);

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
{% endblock %}", "default/index.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/default/index.html.twig");
    }
}
