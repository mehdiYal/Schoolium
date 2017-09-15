<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
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
        $__internal_3b142249237cafbf552415277024e966f539c2f31f6562ecb8006fb6c247472a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b142249237cafbf552415277024e966f539c2f31f6562ecb8006fb6c247472a->enter($__internal_3b142249237cafbf552415277024e966f539c2f31f6562ecb8006fb6c247472a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b0c1cb1739abaaf2498e991f8482ae961e7d377c159cb946c565205aa7d25880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c1cb1739abaaf2498e991f8482ae961e7d377c159cb946c565205aa7d25880->enter($__internal_b0c1cb1739abaaf2498e991f8482ae961e7d377c159cb946c565205aa7d25880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b142249237cafbf552415277024e966f539c2f31f6562ecb8006fb6c247472a->leave($__internal_3b142249237cafbf552415277024e966f539c2f31f6562ecb8006fb6c247472a_prof);

        
        $__internal_b0c1cb1739abaaf2498e991f8482ae961e7d377c159cb946c565205aa7d25880->leave($__internal_b0c1cb1739abaaf2498e991f8482ae961e7d377c159cb946c565205aa7d25880_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79282fe3b6aeadd6b0a371e320ac15538a823805b6b6d56ce1459f2f32cf2ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79282fe3b6aeadd6b0a371e320ac15538a823805b6b6d56ce1459f2f32cf2ce1->enter($__internal_79282fe3b6aeadd6b0a371e320ac15538a823805b6b6d56ce1459f2f32cf2ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7860d2e9e4dea790395525306c82bf929e23dd02c519fe83e6eb99cb7e94409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7860d2e9e4dea790395525306c82bf929e23dd02c519fe83e6eb99cb7e94409->enter($__internal_e7860d2e9e4dea790395525306c82bf929e23dd02c519fe83e6eb99cb7e94409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e7860d2e9e4dea790395525306c82bf929e23dd02c519fe83e6eb99cb7e94409->leave($__internal_e7860d2e9e4dea790395525306c82bf929e23dd02c519fe83e6eb99cb7e94409_prof);

        
        $__internal_79282fe3b6aeadd6b0a371e320ac15538a823805b6b6d56ce1459f2f32cf2ce1->leave($__internal_79282fe3b6aeadd6b0a371e320ac15538a823805b6b6d56ce1459f2f32cf2ce1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bd16fbf18110c49dafffde0861e1f50a305ada5afca9c3f00a47f08980473ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd16fbf18110c49dafffde0861e1f50a305ada5afca9c3f00a47f08980473ee->enter($__internal_5bd16fbf18110c49dafffde0861e1f50a305ada5afca9c3f00a47f08980473ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9180107623a42f5460d3a2f42598b27c7795d8de0de8366df0204b0a3be25e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9180107623a42f5460d3a2f42598b27c7795d8de0de8366df0204b0a3be25e44->enter($__internal_9180107623a42f5460d3a2f42598b27c7795d8de0de8366df0204b0a3be25e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9180107623a42f5460d3a2f42598b27c7795d8de0de8366df0204b0a3be25e44->leave($__internal_9180107623a42f5460d3a2f42598b27c7795d8de0de8366df0204b0a3be25e44_prof);

        
        $__internal_5bd16fbf18110c49dafffde0861e1f50a305ada5afca9c3f00a47f08980473ee->leave($__internal_5bd16fbf18110c49dafffde0861e1f50a305ada5afca9c3f00a47f08980473ee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3be93d453e597084fa6c7bdb37072e9d57b84497a42d746772fdd78271419c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be93d453e597084fa6c7bdb37072e9d57b84497a42d746772fdd78271419c04->enter($__internal_3be93d453e597084fa6c7bdb37072e9d57b84497a42d746772fdd78271419c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c165cc00e430308f5cee634a52b5087883d8be53cbb5c31b3d4ae24600a01b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c165cc00e430308f5cee634a52b5087883d8be53cbb5c31b3d4ae24600a01b5c->enter($__internal_c165cc00e430308f5cee634a52b5087883d8be53cbb5c31b3d4ae24600a01b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c165cc00e430308f5cee634a52b5087883d8be53cbb5c31b3d4ae24600a01b5c->leave($__internal_c165cc00e430308f5cee634a52b5087883d8be53cbb5c31b3d4ae24600a01b5c_prof);

        
        $__internal_3be93d453e597084fa6c7bdb37072e9d57b84497a42d746772fdd78271419c04->leave($__internal_3be93d453e597084fa6c7bdb37072e9d57b84497a42d746772fdd78271419c04_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
