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
        $__internal_a6fe6f3bd937d8127e2c3950c3920987bb84426d65ed32bc6bddca73f29e56f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fe6f3bd937d8127e2c3950c3920987bb84426d65ed32bc6bddca73f29e56f1->enter($__internal_a6fe6f3bd937d8127e2c3950c3920987bb84426d65ed32bc6bddca73f29e56f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b0fc514cd78c9b710543b736dcbe04b4a17ab126a6a95f30b2c7a0df5a70b4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fc514cd78c9b710543b736dcbe04b4a17ab126a6a95f30b2c7a0df5a70b4aa->enter($__internal_b0fc514cd78c9b710543b736dcbe04b4a17ab126a6a95f30b2c7a0df5a70b4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6fe6f3bd937d8127e2c3950c3920987bb84426d65ed32bc6bddca73f29e56f1->leave($__internal_a6fe6f3bd937d8127e2c3950c3920987bb84426d65ed32bc6bddca73f29e56f1_prof);

        
        $__internal_b0fc514cd78c9b710543b736dcbe04b4a17ab126a6a95f30b2c7a0df5a70b4aa->leave($__internal_b0fc514cd78c9b710543b736dcbe04b4a17ab126a6a95f30b2c7a0df5a70b4aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_810b0237a8786b11cd3e879779f1bd2bb36c5ca09b6944419cc47eb10369a129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810b0237a8786b11cd3e879779f1bd2bb36c5ca09b6944419cc47eb10369a129->enter($__internal_810b0237a8786b11cd3e879779f1bd2bb36c5ca09b6944419cc47eb10369a129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_092bac054c243fd4eb263c49119c44b6ef6b9811d42ff31e1bdded9d5df8dbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092bac054c243fd4eb263c49119c44b6ef6b9811d42ff31e1bdded9d5df8dbcf->enter($__internal_092bac054c243fd4eb263c49119c44b6ef6b9811d42ff31e1bdded9d5df8dbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_092bac054c243fd4eb263c49119c44b6ef6b9811d42ff31e1bdded9d5df8dbcf->leave($__internal_092bac054c243fd4eb263c49119c44b6ef6b9811d42ff31e1bdded9d5df8dbcf_prof);

        
        $__internal_810b0237a8786b11cd3e879779f1bd2bb36c5ca09b6944419cc47eb10369a129->leave($__internal_810b0237a8786b11cd3e879779f1bd2bb36c5ca09b6944419cc47eb10369a129_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6891294ab10437fee9c94678f42c6a07bbbeb09227e1a3b9716080fb2d440a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6891294ab10437fee9c94678f42c6a07bbbeb09227e1a3b9716080fb2d440a09->enter($__internal_6891294ab10437fee9c94678f42c6a07bbbeb09227e1a3b9716080fb2d440a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d1bb8c362c79d37f515c49868efd81276362bc56401927eff36267a2f52baba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bb8c362c79d37f515c49868efd81276362bc56401927eff36267a2f52baba7->enter($__internal_d1bb8c362c79d37f515c49868efd81276362bc56401927eff36267a2f52baba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d1bb8c362c79d37f515c49868efd81276362bc56401927eff36267a2f52baba7->leave($__internal_d1bb8c362c79d37f515c49868efd81276362bc56401927eff36267a2f52baba7_prof);

        
        $__internal_6891294ab10437fee9c94678f42c6a07bbbeb09227e1a3b9716080fb2d440a09->leave($__internal_6891294ab10437fee9c94678f42c6a07bbbeb09227e1a3b9716080fb2d440a09_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fc080b65ba9eaf07ab2f737b8239452e825c1f15e82679bfa16bf66f9d44e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc080b65ba9eaf07ab2f737b8239452e825c1f15e82679bfa16bf66f9d44e3e->enter($__internal_2fc080b65ba9eaf07ab2f737b8239452e825c1f15e82679bfa16bf66f9d44e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa1ca996ab07ad27cae333a2d089fd97cd25ed687e1538787fc39abe48d767aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1ca996ab07ad27cae333a2d089fd97cd25ed687e1538787fc39abe48d767aa->enter($__internal_fa1ca996ab07ad27cae333a2d089fd97cd25ed687e1538787fc39abe48d767aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fa1ca996ab07ad27cae333a2d089fd97cd25ed687e1538787fc39abe48d767aa->leave($__internal_fa1ca996ab07ad27cae333a2d089fd97cd25ed687e1538787fc39abe48d767aa_prof);

        
        $__internal_2fc080b65ba9eaf07ab2f737b8239452e825c1f15e82679bfa16bf66f9d44e3e->leave($__internal_2fc080b65ba9eaf07ab2f737b8239452e825c1f15e82679bfa16bf66f9d44e3e_prof);

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
