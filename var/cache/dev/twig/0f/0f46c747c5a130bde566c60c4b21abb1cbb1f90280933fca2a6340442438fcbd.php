<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_09a4032973f8cc4f1c86fa4e79b429fc42c726d6c905186ea2a27c83f32cef1e extends Twig_Template
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
        $__internal_c79855fcc877b3980ebf3b49f9dbb1272f095b42fc3d603d8628950188112260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79855fcc877b3980ebf3b49f9dbb1272f095b42fc3d603d8628950188112260->enter($__internal_c79855fcc877b3980ebf3b49f9dbb1272f095b42fc3d603d8628950188112260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ee8223188da9dd4b7192ee1e227e8a53edbc6f9a8c22e6f49558e9ce450df58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8223188da9dd4b7192ee1e227e8a53edbc6f9a8c22e6f49558e9ce450df58e->enter($__internal_ee8223188da9dd4b7192ee1e227e8a53edbc6f9a8c22e6f49558e9ce450df58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c79855fcc877b3980ebf3b49f9dbb1272f095b42fc3d603d8628950188112260->leave($__internal_c79855fcc877b3980ebf3b49f9dbb1272f095b42fc3d603d8628950188112260_prof);

        
        $__internal_ee8223188da9dd4b7192ee1e227e8a53edbc6f9a8c22e6f49558e9ce450df58e->leave($__internal_ee8223188da9dd4b7192ee1e227e8a53edbc6f9a8c22e6f49558e9ce450df58e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9ca0ffc22dbb7430f7f463ff953e0c92ea552af21277e465bb27481d67d4c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ca0ffc22dbb7430f7f463ff953e0c92ea552af21277e465bb27481d67d4c1f->enter($__internal_d9ca0ffc22dbb7430f7f463ff953e0c92ea552af21277e465bb27481d67d4c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c5726b986266815ca7c8515fb729d95696c520f820130b3d71282b4ee29ca58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5726b986266815ca7c8515fb729d95696c520f820130b3d71282b4ee29ca58->enter($__internal_3c5726b986266815ca7c8515fb729d95696c520f820130b3d71282b4ee29ca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3c5726b986266815ca7c8515fb729d95696c520f820130b3d71282b4ee29ca58->leave($__internal_3c5726b986266815ca7c8515fb729d95696c520f820130b3d71282b4ee29ca58_prof);

        
        $__internal_d9ca0ffc22dbb7430f7f463ff953e0c92ea552af21277e465bb27481d67d4c1f->leave($__internal_d9ca0ffc22dbb7430f7f463ff953e0c92ea552af21277e465bb27481d67d4c1f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_216d1dcd597299aa97a8d10da33b1e7e016cb5f53e17c75db9da37d2b41d8e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216d1dcd597299aa97a8d10da33b1e7e016cb5f53e17c75db9da37d2b41d8e4a->enter($__internal_216d1dcd597299aa97a8d10da33b1e7e016cb5f53e17c75db9da37d2b41d8e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d323cf5925ae13b59f96faa41bac77fbc28d78dfcfbda765daeb862d5bf91f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d323cf5925ae13b59f96faa41bac77fbc28d78dfcfbda765daeb862d5bf91f61->enter($__internal_d323cf5925ae13b59f96faa41bac77fbc28d78dfcfbda765daeb862d5bf91f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d323cf5925ae13b59f96faa41bac77fbc28d78dfcfbda765daeb862d5bf91f61->leave($__internal_d323cf5925ae13b59f96faa41bac77fbc28d78dfcfbda765daeb862d5bf91f61_prof);

        
        $__internal_216d1dcd597299aa97a8d10da33b1e7e016cb5f53e17c75db9da37d2b41d8e4a->leave($__internal_216d1dcd597299aa97a8d10da33b1e7e016cb5f53e17c75db9da37d2b41d8e4a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0075388ae28a3416f19a4e98a83719be6f0728908fa9d680d800e2740546b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0075388ae28a3416f19a4e98a83719be6f0728908fa9d680d800e2740546b66->enter($__internal_e0075388ae28a3416f19a4e98a83719be6f0728908fa9d680d800e2740546b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_113d19dd5973d67ded19998d9698b1878b639d4a0e850661a70a90afd03c843c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113d19dd5973d67ded19998d9698b1878b639d4a0e850661a70a90afd03c843c->enter($__internal_113d19dd5973d67ded19998d9698b1878b639d4a0e850661a70a90afd03c843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_113d19dd5973d67ded19998d9698b1878b639d4a0e850661a70a90afd03c843c->leave($__internal_113d19dd5973d67ded19998d9698b1878b639d4a0e850661a70a90afd03c843c_prof);

        
        $__internal_e0075388ae28a3416f19a4e98a83719be6f0728908fa9d680d800e2740546b66->leave($__internal_e0075388ae28a3416f19a4e98a83719be6f0728908fa9d680d800e2740546b66_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
