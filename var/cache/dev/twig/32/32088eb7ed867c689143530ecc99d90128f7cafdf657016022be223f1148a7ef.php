<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_fad78add6dda3affbf0e1a16f37b6737cea13ea248cb78b0b689a9f48f7c7d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2aab94ab81fe0731ed7d0209c5d4b43c8012e8987ec98624829981aef2e700b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2aab94ab81fe0731ed7d0209c5d4b43c8012e8987ec98624829981aef2e700b->enter($__internal_f2aab94ab81fe0731ed7d0209c5d4b43c8012e8987ec98624829981aef2e700b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_b5acb02d28a063151a71d3ccf150ba3d6e8f94dee545b65bddcf79387c4170a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5acb02d28a063151a71d3ccf150ba3d6e8f94dee545b65bddcf79387c4170a6->enter($__internal_b5acb02d28a063151a71d3ccf150ba3d6e8f94dee545b65bddcf79387c4170a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2aab94ab81fe0731ed7d0209c5d4b43c8012e8987ec98624829981aef2e700b->leave($__internal_f2aab94ab81fe0731ed7d0209c5d4b43c8012e8987ec98624829981aef2e700b_prof);

        
        $__internal_b5acb02d28a063151a71d3ccf150ba3d6e8f94dee545b65bddcf79387c4170a6->leave($__internal_b5acb02d28a063151a71d3ccf150ba3d6e8f94dee545b65bddcf79387c4170a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4c9a56729a4974393cce84fda411413f34f5d1a536349bcc07c890db6c23dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c9a56729a4974393cce84fda411413f34f5d1a536349bcc07c890db6c23dc9->enter($__internal_c4c9a56729a4974393cce84fda411413f34f5d1a536349bcc07c890db6c23dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62699508bc75034d629a74c45d2a4bf25ce2c5033211f9138e07322c5647d5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62699508bc75034d629a74c45d2a4bf25ce2c5033211f9138e07322c5647d5d5->enter($__internal_62699508bc75034d629a74c45d2a4bf25ce2c5033211f9138e07322c5647d5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_62699508bc75034d629a74c45d2a4bf25ce2c5033211f9138e07322c5647d5d5->leave($__internal_62699508bc75034d629a74c45d2a4bf25ce2c5033211f9138e07322c5647d5d5_prof);

        
        $__internal_c4c9a56729a4974393cce84fda411413f34f5d1a536349bcc07c890db6c23dc9->leave($__internal_c4c9a56729a4974393cce84fda411413f34f5d1a536349bcc07c890db6c23dc9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
