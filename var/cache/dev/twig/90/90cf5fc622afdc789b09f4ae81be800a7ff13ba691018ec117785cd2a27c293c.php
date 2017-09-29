<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_33727356872726efe1c610ed9d3acd7eed028a45157b20cc4d3ac9278833493f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_214992fab4f2bff01d86c8b6d526905cd3428e049b98bc7e7f3fee313ae332ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214992fab4f2bff01d86c8b6d526905cd3428e049b98bc7e7f3fee313ae332ed->enter($__internal_214992fab4f2bff01d86c8b6d526905cd3428e049b98bc7e7f3fee313ae332ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e66a1592b4b98b92099627a1757a99f0ed0e40f398de31cb38cf1c32d656371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66a1592b4b98b92099627a1757a99f0ed0e40f398de31cb38cf1c32d656371d->enter($__internal_e66a1592b4b98b92099627a1757a99f0ed0e40f398de31cb38cf1c32d656371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214992fab4f2bff01d86c8b6d526905cd3428e049b98bc7e7f3fee313ae332ed->leave($__internal_214992fab4f2bff01d86c8b6d526905cd3428e049b98bc7e7f3fee313ae332ed_prof);

        
        $__internal_e66a1592b4b98b92099627a1757a99f0ed0e40f398de31cb38cf1c32d656371d->leave($__internal_e66a1592b4b98b92099627a1757a99f0ed0e40f398de31cb38cf1c32d656371d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_459aed1758dcccb604ea3e254b502cbd545a67821e9fac0fe87253c0cc4c2213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459aed1758dcccb604ea3e254b502cbd545a67821e9fac0fe87253c0cc4c2213->enter($__internal_459aed1758dcccb604ea3e254b502cbd545a67821e9fac0fe87253c0cc4c2213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ce64a24055b88c08b479eb59aa3cade548102d8025866a6a53c435a651c91399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce64a24055b88c08b479eb59aa3cade548102d8025866a6a53c435a651c91399->enter($__internal_ce64a24055b88c08b479eb59aa3cade548102d8025866a6a53c435a651c91399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ce64a24055b88c08b479eb59aa3cade548102d8025866a6a53c435a651c91399->leave($__internal_ce64a24055b88c08b479eb59aa3cade548102d8025866a6a53c435a651c91399_prof);

        
        $__internal_459aed1758dcccb604ea3e254b502cbd545a67821e9fac0fe87253c0cc4c2213->leave($__internal_459aed1758dcccb604ea3e254b502cbd545a67821e9fac0fe87253c0cc4c2213_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e78d793c0a1864c0e5261961a5f7b397676f47f566b8e4eca3b9bf653e51418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e78d793c0a1864c0e5261961a5f7b397676f47f566b8e4eca3b9bf653e51418->enter($__internal_0e78d793c0a1864c0e5261961a5f7b397676f47f566b8e4eca3b9bf653e51418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e5d4e1809a30f3e715319ba881a75928adacfcc55130e260fc24172bd3db579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5d4e1809a30f3e715319ba881a75928adacfcc55130e260fc24172bd3db579->enter($__internal_1e5d4e1809a30f3e715319ba881a75928adacfcc55130e260fc24172bd3db579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e5d4e1809a30f3e715319ba881a75928adacfcc55130e260fc24172bd3db579->leave($__internal_1e5d4e1809a30f3e715319ba881a75928adacfcc55130e260fc24172bd3db579_prof);

        
        $__internal_0e78d793c0a1864c0e5261961a5f7b397676f47f566b8e4eca3b9bf653e51418->leave($__internal_0e78d793c0a1864c0e5261961a5f7b397676f47f566b8e4eca3b9bf653e51418_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d619d952964e14cf1cd2d21bed512d0fb1f8a820691eb6f2e993c014759a2bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d619d952964e14cf1cd2d21bed512d0fb1f8a820691eb6f2e993c014759a2bf3->enter($__internal_d619d952964e14cf1cd2d21bed512d0fb1f8a820691eb6f2e993c014759a2bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a7c8babcba520b2bf2c95cc2a977d777c52e1aa418807078d8863159649f86d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c8babcba520b2bf2c95cc2a977d777c52e1aa418807078d8863159649f86d9->enter($__internal_a7c8babcba520b2bf2c95cc2a977d777c52e1aa418807078d8863159649f86d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a7c8babcba520b2bf2c95cc2a977d777c52e1aa418807078d8863159649f86d9->leave($__internal_a7c8babcba520b2bf2c95cc2a977d777c52e1aa418807078d8863159649f86d9_prof);

        
        $__internal_d619d952964e14cf1cd2d21bed512d0fb1f8a820691eb6f2e993c014759a2bf3->leave($__internal_d619d952964e14cf1cd2d21bed512d0fb1f8a820691eb6f2e993c014759a2bf3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Schoolium\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
