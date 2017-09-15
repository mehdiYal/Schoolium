<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
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
        $__internal_64274b108802e671085dd8452876470ec0354ad06fe43c0af3e8fa43c98b7483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64274b108802e671085dd8452876470ec0354ad06fe43c0af3e8fa43c98b7483->enter($__internal_64274b108802e671085dd8452876470ec0354ad06fe43c0af3e8fa43c98b7483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8ada85cfee148f3e9f57fd93f426ec0541b0e74e3f0462c32265166d6e347dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ada85cfee148f3e9f57fd93f426ec0541b0e74e3f0462c32265166d6e347dd3->enter($__internal_8ada85cfee148f3e9f57fd93f426ec0541b0e74e3f0462c32265166d6e347dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64274b108802e671085dd8452876470ec0354ad06fe43c0af3e8fa43c98b7483->leave($__internal_64274b108802e671085dd8452876470ec0354ad06fe43c0af3e8fa43c98b7483_prof);

        
        $__internal_8ada85cfee148f3e9f57fd93f426ec0541b0e74e3f0462c32265166d6e347dd3->leave($__internal_8ada85cfee148f3e9f57fd93f426ec0541b0e74e3f0462c32265166d6e347dd3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c3b5bd740bd4e7400d8dc37dec68d5461a511c6d04bd9e0511add1bc896856e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3b5bd740bd4e7400d8dc37dec68d5461a511c6d04bd9e0511add1bc896856e->enter($__internal_0c3b5bd740bd4e7400d8dc37dec68d5461a511c6d04bd9e0511add1bc896856e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7187bdd570033f02ba81b5d1ff7533242e04a3d3b2815800c781ce4a6589eb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7187bdd570033f02ba81b5d1ff7533242e04a3d3b2815800c781ce4a6589eb40->enter($__internal_7187bdd570033f02ba81b5d1ff7533242e04a3d3b2815800c781ce4a6589eb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7187bdd570033f02ba81b5d1ff7533242e04a3d3b2815800c781ce4a6589eb40->leave($__internal_7187bdd570033f02ba81b5d1ff7533242e04a3d3b2815800c781ce4a6589eb40_prof);

        
        $__internal_0c3b5bd740bd4e7400d8dc37dec68d5461a511c6d04bd9e0511add1bc896856e->leave($__internal_0c3b5bd740bd4e7400d8dc37dec68d5461a511c6d04bd9e0511add1bc896856e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd65e1ba4e7d03a571ee218f83cd844f7bd1282c24362b484d6fbaf1a7a89475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd65e1ba4e7d03a571ee218f83cd844f7bd1282c24362b484d6fbaf1a7a89475->enter($__internal_dd65e1ba4e7d03a571ee218f83cd844f7bd1282c24362b484d6fbaf1a7a89475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1f7484c879324fe983eddd62d0bec14aa2794babcc733d7880f7b38c2bfd96cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7484c879324fe983eddd62d0bec14aa2794babcc733d7880f7b38c2bfd96cb->enter($__internal_1f7484c879324fe983eddd62d0bec14aa2794babcc733d7880f7b38c2bfd96cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1f7484c879324fe983eddd62d0bec14aa2794babcc733d7880f7b38c2bfd96cb->leave($__internal_1f7484c879324fe983eddd62d0bec14aa2794babcc733d7880f7b38c2bfd96cb_prof);

        
        $__internal_dd65e1ba4e7d03a571ee218f83cd844f7bd1282c24362b484d6fbaf1a7a89475->leave($__internal_dd65e1ba4e7d03a571ee218f83cd844f7bd1282c24362b484d6fbaf1a7a89475_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fc3fbdfe269cea46db40feff8e4aa089d8db3abb8a3374fcecb20fd318dd9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc3fbdfe269cea46db40feff8e4aa089d8db3abb8a3374fcecb20fd318dd9d2->enter($__internal_0fc3fbdfe269cea46db40feff8e4aa089d8db3abb8a3374fcecb20fd318dd9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1fe5c3673fcf8adf32c18c43171c567f54d2e32941e390b784fa8e2c3640a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fe5c3673fcf8adf32c18c43171c567f54d2e32941e390b784fa8e2c3640a32->enter($__internal_a1fe5c3673fcf8adf32c18c43171c567f54d2e32941e390b784fa8e2c3640a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1fe5c3673fcf8adf32c18c43171c567f54d2e32941e390b784fa8e2c3640a32->leave($__internal_a1fe5c3673fcf8adf32c18c43171c567f54d2e32941e390b784fa8e2c3640a32_prof);

        
        $__internal_0fc3fbdfe269cea46db40feff8e4aa089d8db3abb8a3374fcecb20fd318dd9d2->leave($__internal_0fc3fbdfe269cea46db40feff8e4aa089d8db3abb8a3374fcecb20fd318dd9d2_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
