<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea433c954008cc98fc4961ee87e62ea394532fe1ad525075d74e0fd9dc626d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd7f048ace15df7f5ef0fbad99e0d764fd2069734befb8c10bf265abbd0866ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7f048ace15df7f5ef0fbad99e0d764fd2069734befb8c10bf265abbd0866ba->enter($__internal_cd7f048ace15df7f5ef0fbad99e0d764fd2069734befb8c10bf265abbd0866ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4289001383197a903ad6e82f45f63933247d37ae7094d2eacc99073038d60e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4289001383197a903ad6e82f45f63933247d37ae7094d2eacc99073038d60e30->enter($__internal_4289001383197a903ad6e82f45f63933247d37ae7094d2eacc99073038d60e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd7f048ace15df7f5ef0fbad99e0d764fd2069734befb8c10bf265abbd0866ba->leave($__internal_cd7f048ace15df7f5ef0fbad99e0d764fd2069734befb8c10bf265abbd0866ba_prof);

        
        $__internal_4289001383197a903ad6e82f45f63933247d37ae7094d2eacc99073038d60e30->leave($__internal_4289001383197a903ad6e82f45f63933247d37ae7094d2eacc99073038d60e30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e676ed447e39112b79d8efedc9120f83b6392690fc00941be408a03a05b9a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e676ed447e39112b79d8efedc9120f83b6392690fc00941be408a03a05b9a83->enter($__internal_0e676ed447e39112b79d8efedc9120f83b6392690fc00941be408a03a05b9a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2ce760d4c64128ad0ec9d04677b087835ccc4aca6236ab370ba9103652d22962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce760d4c64128ad0ec9d04677b087835ccc4aca6236ab370ba9103652d22962->enter($__internal_2ce760d4c64128ad0ec9d04677b087835ccc4aca6236ab370ba9103652d22962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2ce760d4c64128ad0ec9d04677b087835ccc4aca6236ab370ba9103652d22962->leave($__internal_2ce760d4c64128ad0ec9d04677b087835ccc4aca6236ab370ba9103652d22962_prof);

        
        $__internal_0e676ed447e39112b79d8efedc9120f83b6392690fc00941be408a03a05b9a83->leave($__internal_0e676ed447e39112b79d8efedc9120f83b6392690fc00941be408a03a05b9a83_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cec7b3d4153b9482c389705f5198519dd5d49c9e1a157e5ca5cb4284bf51410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cec7b3d4153b9482c389705f5198519dd5d49c9e1a157e5ca5cb4284bf51410->enter($__internal_8cec7b3d4153b9482c389705f5198519dd5d49c9e1a157e5ca5cb4284bf51410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_65fb9d43f2360bb2e4f0a2eb845f6f4f43a823ff82e9d55c2bdde3a7a869bfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fb9d43f2360bb2e4f0a2eb845f6f4f43a823ff82e9d55c2bdde3a7a869bfa8->enter($__internal_65fb9d43f2360bb2e4f0a2eb845f6f4f43a823ff82e9d55c2bdde3a7a869bfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_65fb9d43f2360bb2e4f0a2eb845f6f4f43a823ff82e9d55c2bdde3a7a869bfa8->leave($__internal_65fb9d43f2360bb2e4f0a2eb845f6f4f43a823ff82e9d55c2bdde3a7a869bfa8_prof);

        
        $__internal_8cec7b3d4153b9482c389705f5198519dd5d49c9e1a157e5ca5cb4284bf51410->leave($__internal_8cec7b3d4153b9482c389705f5198519dd5d49c9e1a157e5ca5cb4284bf51410_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0b903cd6a8576e03aabe1bca989e170fcc17d1d2b5431e8abc475ed2cc1bd92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b903cd6a8576e03aabe1bca989e170fcc17d1d2b5431e8abc475ed2cc1bd92->enter($__internal_e0b903cd6a8576e03aabe1bca989e170fcc17d1d2b5431e8abc475ed2cc1bd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27d99cb41ebc29ce561b7993eb83b02b869e64825447e2f5f73cadf2905d7992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d99cb41ebc29ce561b7993eb83b02b869e64825447e2f5f73cadf2905d7992->enter($__internal_27d99cb41ebc29ce561b7993eb83b02b869e64825447e2f5f73cadf2905d7992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_27d99cb41ebc29ce561b7993eb83b02b869e64825447e2f5f73cadf2905d7992->leave($__internal_27d99cb41ebc29ce561b7993eb83b02b869e64825447e2f5f73cadf2905d7992_prof);

        
        $__internal_e0b903cd6a8576e03aabe1bca989e170fcc17d1d2b5431e8abc475ed2cc1bd92->leave($__internal_e0b903cd6a8576e03aabe1bca989e170fcc17d1d2b5431e8abc475ed2cc1bd92_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Schoolium\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
