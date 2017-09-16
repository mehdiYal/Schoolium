<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c8d21550850074782862265b813a9c2aea7c608253db98e24225c2ea859cc33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_4f799fe0cc7f22495efc73fba23694e0a3a0583a5214948f3c58038a44fe2573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f799fe0cc7f22495efc73fba23694e0a3a0583a5214948f3c58038a44fe2573->enter($__internal_4f799fe0cc7f22495efc73fba23694e0a3a0583a5214948f3c58038a44fe2573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e2229cc8c004aedff67d2ce1c45f9efcfa69922e12b762676067fdd639b13361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2229cc8c004aedff67d2ce1c45f9efcfa69922e12b762676067fdd639b13361->enter($__internal_e2229cc8c004aedff67d2ce1c45f9efcfa69922e12b762676067fdd639b13361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f799fe0cc7f22495efc73fba23694e0a3a0583a5214948f3c58038a44fe2573->leave($__internal_4f799fe0cc7f22495efc73fba23694e0a3a0583a5214948f3c58038a44fe2573_prof);

        
        $__internal_e2229cc8c004aedff67d2ce1c45f9efcfa69922e12b762676067fdd639b13361->leave($__internal_e2229cc8c004aedff67d2ce1c45f9efcfa69922e12b762676067fdd639b13361_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb109454b38b7b24070cff9ccc466e56af2d95b49464b6409586a5d2d6a2c19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb109454b38b7b24070cff9ccc466e56af2d95b49464b6409586a5d2d6a2c19a->enter($__internal_cb109454b38b7b24070cff9ccc466e56af2d95b49464b6409586a5d2d6a2c19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5f178640e8cca7dbb07a0d59d8a8fdfb7be7bfc9c63cb7423b245a520c7e632d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f178640e8cca7dbb07a0d59d8a8fdfb7be7bfc9c63cb7423b245a520c7e632d->enter($__internal_5f178640e8cca7dbb07a0d59d8a8fdfb7be7bfc9c63cb7423b245a520c7e632d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f178640e8cca7dbb07a0d59d8a8fdfb7be7bfc9c63cb7423b245a520c7e632d->leave($__internal_5f178640e8cca7dbb07a0d59d8a8fdfb7be7bfc9c63cb7423b245a520c7e632d_prof);

        
        $__internal_cb109454b38b7b24070cff9ccc466e56af2d95b49464b6409586a5d2d6a2c19a->leave($__internal_cb109454b38b7b24070cff9ccc466e56af2d95b49464b6409586a5d2d6a2c19a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72ed7e1b4749995ea5e7260ecc524f48453edb598dbde0a3016fbc2e5b926b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ed7e1b4749995ea5e7260ecc524f48453edb598dbde0a3016fbc2e5b926b3d->enter($__internal_72ed7e1b4749995ea5e7260ecc524f48453edb598dbde0a3016fbc2e5b926b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_475683fdbeda0d78d3d7fe71e064ce50ca9a62435dad2752533107cf00f9f060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475683fdbeda0d78d3d7fe71e064ce50ca9a62435dad2752533107cf00f9f060->enter($__internal_475683fdbeda0d78d3d7fe71e064ce50ca9a62435dad2752533107cf00f9f060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_475683fdbeda0d78d3d7fe71e064ce50ca9a62435dad2752533107cf00f9f060->leave($__internal_475683fdbeda0d78d3d7fe71e064ce50ca9a62435dad2752533107cf00f9f060_prof);

        
        $__internal_72ed7e1b4749995ea5e7260ecc524f48453edb598dbde0a3016fbc2e5b926b3d->leave($__internal_72ed7e1b4749995ea5e7260ecc524f48453edb598dbde0a3016fbc2e5b926b3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c19da141a630f3669f5fe7c94e5a968903f29bcb7cd994a4051ecf7ff1079825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19da141a630f3669f5fe7c94e5a968903f29bcb7cd994a4051ecf7ff1079825->enter($__internal_c19da141a630f3669f5fe7c94e5a968903f29bcb7cd994a4051ecf7ff1079825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_312c0a27d2cccc06836145cd58525914aabe820d95097702356e71e0e516ea07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312c0a27d2cccc06836145cd58525914aabe820d95097702356e71e0e516ea07->enter($__internal_312c0a27d2cccc06836145cd58525914aabe820d95097702356e71e0e516ea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_312c0a27d2cccc06836145cd58525914aabe820d95097702356e71e0e516ea07->leave($__internal_312c0a27d2cccc06836145cd58525914aabe820d95097702356e71e0e516ea07_prof);

        
        $__internal_c19da141a630f3669f5fe7c94e5a968903f29bcb7cd994a4051ecf7ff1079825->leave($__internal_c19da141a630f3669f5fe7c94e5a968903f29bcb7cd994a4051ecf7ff1079825_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
