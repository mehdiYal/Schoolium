<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
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
        $__internal_982b4e1cc5bcc00b133d60458f6535c7983748dfc77ee37a6a97572eb092d066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982b4e1cc5bcc00b133d60458f6535c7983748dfc77ee37a6a97572eb092d066->enter($__internal_982b4e1cc5bcc00b133d60458f6535c7983748dfc77ee37a6a97572eb092d066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d0c67996e4f0898556e3633b5490c5a2bc267448a21d36b0da71c7ec749c7536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c67996e4f0898556e3633b5490c5a2bc267448a21d36b0da71c7ec749c7536->enter($__internal_d0c67996e4f0898556e3633b5490c5a2bc267448a21d36b0da71c7ec749c7536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_982b4e1cc5bcc00b133d60458f6535c7983748dfc77ee37a6a97572eb092d066->leave($__internal_982b4e1cc5bcc00b133d60458f6535c7983748dfc77ee37a6a97572eb092d066_prof);

        
        $__internal_d0c67996e4f0898556e3633b5490c5a2bc267448a21d36b0da71c7ec749c7536->leave($__internal_d0c67996e4f0898556e3633b5490c5a2bc267448a21d36b0da71c7ec749c7536_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10882fe1c981be27fd5a59d3c328401aa34860bdd89790c677bcc102f1e21ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10882fe1c981be27fd5a59d3c328401aa34860bdd89790c677bcc102f1e21ecc->enter($__internal_10882fe1c981be27fd5a59d3c328401aa34860bdd89790c677bcc102f1e21ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd390e15e9819db177fcf108cdf5d7844bcf2870717b4be5eeb77e911ad237f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd390e15e9819db177fcf108cdf5d7844bcf2870717b4be5eeb77e911ad237f6->enter($__internal_cd390e15e9819db177fcf108cdf5d7844bcf2870717b4be5eeb77e911ad237f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cd390e15e9819db177fcf108cdf5d7844bcf2870717b4be5eeb77e911ad237f6->leave($__internal_cd390e15e9819db177fcf108cdf5d7844bcf2870717b4be5eeb77e911ad237f6_prof);

        
        $__internal_10882fe1c981be27fd5a59d3c328401aa34860bdd89790c677bcc102f1e21ecc->leave($__internal_10882fe1c981be27fd5a59d3c328401aa34860bdd89790c677bcc102f1e21ecc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd9573316317d4c880481d5ce9f2b795db3b72dd3956f3d3c4a49ed266dc5048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9573316317d4c880481d5ce9f2b795db3b72dd3956f3d3c4a49ed266dc5048->enter($__internal_bd9573316317d4c880481d5ce9f2b795db3b72dd3956f3d3c4a49ed266dc5048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_43e0be5c424fdb87d3b5799ef333745a448566059d4cb19465217bdbafba8fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e0be5c424fdb87d3b5799ef333745a448566059d4cb19465217bdbafba8fef->enter($__internal_43e0be5c424fdb87d3b5799ef333745a448566059d4cb19465217bdbafba8fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_43e0be5c424fdb87d3b5799ef333745a448566059d4cb19465217bdbafba8fef->leave($__internal_43e0be5c424fdb87d3b5799ef333745a448566059d4cb19465217bdbafba8fef_prof);

        
        $__internal_bd9573316317d4c880481d5ce9f2b795db3b72dd3956f3d3c4a49ed266dc5048->leave($__internal_bd9573316317d4c880481d5ce9f2b795db3b72dd3956f3d3c4a49ed266dc5048_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2cace8f66a1fe9ba6382a22efc07b7619b3e9522ee72a056b14d42ba7cf13fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cace8f66a1fe9ba6382a22efc07b7619b3e9522ee72a056b14d42ba7cf13fda->enter($__internal_2cace8f66a1fe9ba6382a22efc07b7619b3e9522ee72a056b14d42ba7cf13fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a53c77cf3d91cd8f26dbbaafa4101ba9784f6aab55ea430148c633d13a2e1147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53c77cf3d91cd8f26dbbaafa4101ba9784f6aab55ea430148c633d13a2e1147->enter($__internal_a53c77cf3d91cd8f26dbbaafa4101ba9784f6aab55ea430148c633d13a2e1147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a53c77cf3d91cd8f26dbbaafa4101ba9784f6aab55ea430148c633d13a2e1147->leave($__internal_a53c77cf3d91cd8f26dbbaafa4101ba9784f6aab55ea430148c633d13a2e1147_prof);

        
        $__internal_2cace8f66a1fe9ba6382a22efc07b7619b3e9522ee72a056b14d42ba7cf13fda->leave($__internal_2cace8f66a1fe9ba6382a22efc07b7619b3e9522ee72a056b14d42ba7cf13fda_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
