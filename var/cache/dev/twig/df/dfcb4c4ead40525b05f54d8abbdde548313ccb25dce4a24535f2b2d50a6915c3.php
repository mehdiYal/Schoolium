<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_773856ec5765f2af18de8d4e66250af78ef7a69794f5beba82d76d1d259e9ee7 extends Twig_Template
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
        $__internal_90fa14584fc80a0da1f5f92cf27cdbcc30db0c786d4eb1bb9e152618fd90c675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90fa14584fc80a0da1f5f92cf27cdbcc30db0c786d4eb1bb9e152618fd90c675->enter($__internal_90fa14584fc80a0da1f5f92cf27cdbcc30db0c786d4eb1bb9e152618fd90c675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_888b6dfe904a496c4e42647b7e9ed3b47ea6e17a78dd2d9c498fc9734186024a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888b6dfe904a496c4e42647b7e9ed3b47ea6e17a78dd2d9c498fc9734186024a->enter($__internal_888b6dfe904a496c4e42647b7e9ed3b47ea6e17a78dd2d9c498fc9734186024a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90fa14584fc80a0da1f5f92cf27cdbcc30db0c786d4eb1bb9e152618fd90c675->leave($__internal_90fa14584fc80a0da1f5f92cf27cdbcc30db0c786d4eb1bb9e152618fd90c675_prof);

        
        $__internal_888b6dfe904a496c4e42647b7e9ed3b47ea6e17a78dd2d9c498fc9734186024a->leave($__internal_888b6dfe904a496c4e42647b7e9ed3b47ea6e17a78dd2d9c498fc9734186024a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e5d10c8bf67b05f03560f16e0777c8ce9e94bd506914cbd9aa21b64cabacb73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5d10c8bf67b05f03560f16e0777c8ce9e94bd506914cbd9aa21b64cabacb73->enter($__internal_2e5d10c8bf67b05f03560f16e0777c8ce9e94bd506914cbd9aa21b64cabacb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_68795930ee57a193c0f11a9a5767702c51166cba78a3658cb7810be309289f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68795930ee57a193c0f11a9a5767702c51166cba78a3658cb7810be309289f01->enter($__internal_68795930ee57a193c0f11a9a5767702c51166cba78a3658cb7810be309289f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_68795930ee57a193c0f11a9a5767702c51166cba78a3658cb7810be309289f01->leave($__internal_68795930ee57a193c0f11a9a5767702c51166cba78a3658cb7810be309289f01_prof);

        
        $__internal_2e5d10c8bf67b05f03560f16e0777c8ce9e94bd506914cbd9aa21b64cabacb73->leave($__internal_2e5d10c8bf67b05f03560f16e0777c8ce9e94bd506914cbd9aa21b64cabacb73_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7a9d711867a153a879112adf40f07ab63ca547ffba4fe1d0214be995fcabbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a9d711867a153a879112adf40f07ab63ca547ffba4fe1d0214be995fcabbcf->enter($__internal_e7a9d711867a153a879112adf40f07ab63ca547ffba4fe1d0214be995fcabbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8aa88e8c2cdab7304d6091aaf894ffbc7d25f3f3e1e1f024489701e8522e911a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa88e8c2cdab7304d6091aaf894ffbc7d25f3f3e1e1f024489701e8522e911a->enter($__internal_8aa88e8c2cdab7304d6091aaf894ffbc7d25f3f3e1e1f024489701e8522e911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8aa88e8c2cdab7304d6091aaf894ffbc7d25f3f3e1e1f024489701e8522e911a->leave($__internal_8aa88e8c2cdab7304d6091aaf894ffbc7d25f3f3e1e1f024489701e8522e911a_prof);

        
        $__internal_e7a9d711867a153a879112adf40f07ab63ca547ffba4fe1d0214be995fcabbcf->leave($__internal_e7a9d711867a153a879112adf40f07ab63ca547ffba4fe1d0214be995fcabbcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2ce9f911094f56679de6b035e1f83dfa5a9301fb6de6423f8432b19f169d8f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ce9f911094f56679de6b035e1f83dfa5a9301fb6de6423f8432b19f169d8f0->enter($__internal_d2ce9f911094f56679de6b035e1f83dfa5a9301fb6de6423f8432b19f169d8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_758df7f6e6d0c061f92c0134e7570cdff15e34653b6e8e44bb38d24708c9e595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758df7f6e6d0c061f92c0134e7570cdff15e34653b6e8e44bb38d24708c9e595->enter($__internal_758df7f6e6d0c061f92c0134e7570cdff15e34653b6e8e44bb38d24708c9e595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_758df7f6e6d0c061f92c0134e7570cdff15e34653b6e8e44bb38d24708c9e595->leave($__internal_758df7f6e6d0c061f92c0134e7570cdff15e34653b6e8e44bb38d24708c9e595_prof);

        
        $__internal_d2ce9f911094f56679de6b035e1f83dfa5a9301fb6de6423f8432b19f169d8f0->leave($__internal_d2ce9f911094f56679de6b035e1f83dfa5a9301fb6de6423f8432b19f169d8f0_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
