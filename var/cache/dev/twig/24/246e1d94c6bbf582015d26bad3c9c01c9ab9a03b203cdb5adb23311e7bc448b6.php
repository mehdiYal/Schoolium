<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f2061152e22b3b2391859ea642e0d745ff39c7846225ac74f8dcde9a43603dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_b75f63413b4c45a7ea822016ba57115bf74066a3850afd5db040da5657bb1b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75f63413b4c45a7ea822016ba57115bf74066a3850afd5db040da5657bb1b76->enter($__internal_b75f63413b4c45a7ea822016ba57115bf74066a3850afd5db040da5657bb1b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a59674ea2fda17aa84bbc6271e400ce9a6a7beca616d14a20b2cd80f64e52253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59674ea2fda17aa84bbc6271e400ce9a6a7beca616d14a20b2cd80f64e52253->enter($__internal_a59674ea2fda17aa84bbc6271e400ce9a6a7beca616d14a20b2cd80f64e52253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b75f63413b4c45a7ea822016ba57115bf74066a3850afd5db040da5657bb1b76->leave($__internal_b75f63413b4c45a7ea822016ba57115bf74066a3850afd5db040da5657bb1b76_prof);

        
        $__internal_a59674ea2fda17aa84bbc6271e400ce9a6a7beca616d14a20b2cd80f64e52253->leave($__internal_a59674ea2fda17aa84bbc6271e400ce9a6a7beca616d14a20b2cd80f64e52253_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d71f1aed0e538b4b6dd7f08d3ee80fa6dbada27d4541e11a6a715c52ec27df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d71f1aed0e538b4b6dd7f08d3ee80fa6dbada27d4541e11a6a715c52ec27df4->enter($__internal_9d71f1aed0e538b4b6dd7f08d3ee80fa6dbada27d4541e11a6a715c52ec27df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c288f74837519a5a8c10692351e2c32ad4646359fe6e4c785eecf4a855fd49c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c288f74837519a5a8c10692351e2c32ad4646359fe6e4c785eecf4a855fd49c0->enter($__internal_c288f74837519a5a8c10692351e2c32ad4646359fe6e4c785eecf4a855fd49c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c288f74837519a5a8c10692351e2c32ad4646359fe6e4c785eecf4a855fd49c0->leave($__internal_c288f74837519a5a8c10692351e2c32ad4646359fe6e4c785eecf4a855fd49c0_prof);

        
        $__internal_9d71f1aed0e538b4b6dd7f08d3ee80fa6dbada27d4541e11a6a715c52ec27df4->leave($__internal_9d71f1aed0e538b4b6dd7f08d3ee80fa6dbada27d4541e11a6a715c52ec27df4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52f2ce4d1259348da99ee03053961f140b965c3435fa06829c5f573e4c7dead8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f2ce4d1259348da99ee03053961f140b965c3435fa06829c5f573e4c7dead8->enter($__internal_52f2ce4d1259348da99ee03053961f140b965c3435fa06829c5f573e4c7dead8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8eb122652ddf6a8a2c2ef9775d826e9be230ed0864044bdc96d824116b66f193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb122652ddf6a8a2c2ef9775d826e9be230ed0864044bdc96d824116b66f193->enter($__internal_8eb122652ddf6a8a2c2ef9775d826e9be230ed0864044bdc96d824116b66f193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8eb122652ddf6a8a2c2ef9775d826e9be230ed0864044bdc96d824116b66f193->leave($__internal_8eb122652ddf6a8a2c2ef9775d826e9be230ed0864044bdc96d824116b66f193_prof);

        
        $__internal_52f2ce4d1259348da99ee03053961f140b965c3435fa06829c5f573e4c7dead8->leave($__internal_52f2ce4d1259348da99ee03053961f140b965c3435fa06829c5f573e4c7dead8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6c442a1ffd7dc364c54c6c30b3a69d60782d7e79f2f5790a83c4314c7ca8596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c442a1ffd7dc364c54c6c30b3a69d60782d7e79f2f5790a83c4314c7ca8596->enter($__internal_d6c442a1ffd7dc364c54c6c30b3a69d60782d7e79f2f5790a83c4314c7ca8596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13cf74bae26f8b26b3e978950ea50b5e2a63dd6bf4690e11261910858c6a743b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cf74bae26f8b26b3e978950ea50b5e2a63dd6bf4690e11261910858c6a743b->enter($__internal_13cf74bae26f8b26b3e978950ea50b5e2a63dd6bf4690e11261910858c6a743b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_13cf74bae26f8b26b3e978950ea50b5e2a63dd6bf4690e11261910858c6a743b->leave($__internal_13cf74bae26f8b26b3e978950ea50b5e2a63dd6bf4690e11261910858c6a743b_prof);

        
        $__internal_d6c442a1ffd7dc364c54c6c30b3a69d60782d7e79f2f5790a83c4314c7ca8596->leave($__internal_d6c442a1ffd7dc364c54c6c30b3a69d60782d7e79f2f5790a83c4314c7ca8596_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
