<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5472197a9615cca948475b890f8f9dbf7313921e10924c2903bc9d99a179f2d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_0038c1e3b7c40104cc5bb8477a07e663a8e195ccefa290cdc412c9c4508fffec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0038c1e3b7c40104cc5bb8477a07e663a8e195ccefa290cdc412c9c4508fffec->enter($__internal_0038c1e3b7c40104cc5bb8477a07e663a8e195ccefa290cdc412c9c4508fffec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_166a8cfb178eaf2489557ac1bf3c17639a386c93c569c86283f2c74bf86d0955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166a8cfb178eaf2489557ac1bf3c17639a386c93c569c86283f2c74bf86d0955->enter($__internal_166a8cfb178eaf2489557ac1bf3c17639a386c93c569c86283f2c74bf86d0955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0038c1e3b7c40104cc5bb8477a07e663a8e195ccefa290cdc412c9c4508fffec->leave($__internal_0038c1e3b7c40104cc5bb8477a07e663a8e195ccefa290cdc412c9c4508fffec_prof);

        
        $__internal_166a8cfb178eaf2489557ac1bf3c17639a386c93c569c86283f2c74bf86d0955->leave($__internal_166a8cfb178eaf2489557ac1bf3c17639a386c93c569c86283f2c74bf86d0955_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_665265d6cc7c5ede2b3df9d18c760041d71aea2db687a4dfc49f21121f97213f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665265d6cc7c5ede2b3df9d18c760041d71aea2db687a4dfc49f21121f97213f->enter($__internal_665265d6cc7c5ede2b3df9d18c760041d71aea2db687a4dfc49f21121f97213f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d8f2ee79c8309f8f1a10f9336d0057f5e01913c99e4f8ad13f7fdebf39c47bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f2ee79c8309f8f1a10f9336d0057f5e01913c99e4f8ad13f7fdebf39c47bee->enter($__internal_d8f2ee79c8309f8f1a10f9336d0057f5e01913c99e4f8ad13f7fdebf39c47bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d8f2ee79c8309f8f1a10f9336d0057f5e01913c99e4f8ad13f7fdebf39c47bee->leave($__internal_d8f2ee79c8309f8f1a10f9336d0057f5e01913c99e4f8ad13f7fdebf39c47bee_prof);

        
        $__internal_665265d6cc7c5ede2b3df9d18c760041d71aea2db687a4dfc49f21121f97213f->leave($__internal_665265d6cc7c5ede2b3df9d18c760041d71aea2db687a4dfc49f21121f97213f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
