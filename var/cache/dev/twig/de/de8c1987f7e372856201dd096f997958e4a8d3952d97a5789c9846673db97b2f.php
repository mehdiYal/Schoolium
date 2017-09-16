<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
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
        $__internal_14506b24286d794831269d3626f0f463bf9757aafd78a14fd99d4e1ecc51524a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14506b24286d794831269d3626f0f463bf9757aafd78a14fd99d4e1ecc51524a->enter($__internal_14506b24286d794831269d3626f0f463bf9757aafd78a14fd99d4e1ecc51524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b918722da02f38d3ca9487c2189480138552225facba3d086bbe9ab09add1412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b918722da02f38d3ca9487c2189480138552225facba3d086bbe9ab09add1412->enter($__internal_b918722da02f38d3ca9487c2189480138552225facba3d086bbe9ab09add1412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14506b24286d794831269d3626f0f463bf9757aafd78a14fd99d4e1ecc51524a->leave($__internal_14506b24286d794831269d3626f0f463bf9757aafd78a14fd99d4e1ecc51524a_prof);

        
        $__internal_b918722da02f38d3ca9487c2189480138552225facba3d086bbe9ab09add1412->leave($__internal_b918722da02f38d3ca9487c2189480138552225facba3d086bbe9ab09add1412_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f92d2d00674486fed52c3932f8a8812fb33c059e16339859643efde0eb701eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92d2d00674486fed52c3932f8a8812fb33c059e16339859643efde0eb701eb4->enter($__internal_f92d2d00674486fed52c3932f8a8812fb33c059e16339859643efde0eb701eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b0a8c25c367e39d03c97ab59a79c6bc956a22448a6f807cdf12bbde709bdb48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a8c25c367e39d03c97ab59a79c6bc956a22448a6f807cdf12bbde709bdb48a->enter($__internal_b0a8c25c367e39d03c97ab59a79c6bc956a22448a6f807cdf12bbde709bdb48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0a8c25c367e39d03c97ab59a79c6bc956a22448a6f807cdf12bbde709bdb48a->leave($__internal_b0a8c25c367e39d03c97ab59a79c6bc956a22448a6f807cdf12bbde709bdb48a_prof);

        
        $__internal_f92d2d00674486fed52c3932f8a8812fb33c059e16339859643efde0eb701eb4->leave($__internal_f92d2d00674486fed52c3932f8a8812fb33c059e16339859643efde0eb701eb4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c12c3f5fbd7c60f7389d5fc289171d8a122206e9fdfe4e58edde4df53ce00048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12c3f5fbd7c60f7389d5fc289171d8a122206e9fdfe4e58edde4df53ce00048->enter($__internal_c12c3f5fbd7c60f7389d5fc289171d8a122206e9fdfe4e58edde4df53ce00048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa4c68e0846e86ce31e73421c1baab47e14cddf275549edb88e172102984c3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4c68e0846e86ce31e73421c1baab47e14cddf275549edb88e172102984c3d2->enter($__internal_aa4c68e0846e86ce31e73421c1baab47e14cddf275549edb88e172102984c3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa4c68e0846e86ce31e73421c1baab47e14cddf275549edb88e172102984c3d2->leave($__internal_aa4c68e0846e86ce31e73421c1baab47e14cddf275549edb88e172102984c3d2_prof);

        
        $__internal_c12c3f5fbd7c60f7389d5fc289171d8a122206e9fdfe4e58edde4df53ce00048->leave($__internal_c12c3f5fbd7c60f7389d5fc289171d8a122206e9fdfe4e58edde4df53ce00048_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f45781ebf8288569f1c706990598f5c2568bb5c10a433e7e74f3faa2c0a5433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f45781ebf8288569f1c706990598f5c2568bb5c10a433e7e74f3faa2c0a5433->enter($__internal_1f45781ebf8288569f1c706990598f5c2568bb5c10a433e7e74f3faa2c0a5433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_068d49eb1903d8160b281bc981a58098275ac568e427a638b3ed7dfedb3ea056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068d49eb1903d8160b281bc981a58098275ac568e427a638b3ed7dfedb3ea056->enter($__internal_068d49eb1903d8160b281bc981a58098275ac568e427a638b3ed7dfedb3ea056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_068d49eb1903d8160b281bc981a58098275ac568e427a638b3ed7dfedb3ea056->leave($__internal_068d49eb1903d8160b281bc981a58098275ac568e427a638b3ed7dfedb3ea056_prof);

        
        $__internal_1f45781ebf8288569f1c706990598f5c2568bb5c10a433e7e74f3faa2c0a5433->leave($__internal_1f45781ebf8288569f1c706990598f5c2568bb5c10a433e7e74f3faa2c0a5433_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
