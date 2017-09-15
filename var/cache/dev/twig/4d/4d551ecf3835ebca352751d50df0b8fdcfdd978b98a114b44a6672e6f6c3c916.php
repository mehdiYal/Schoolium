<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3e7841fbbd3563ce0f1114d03107250d6dda0235822a8fe0682d98dae9bc5cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_119ef239c86bdbd35ad482f00f11db923d7f8a2856ad1c450a6661d450856681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119ef239c86bdbd35ad482f00f11db923d7f8a2856ad1c450a6661d450856681->enter($__internal_119ef239c86bdbd35ad482f00f11db923d7f8a2856ad1c450a6661d450856681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b0fa742d106f2e2a765446ce429aceb2d5e703ddc99783a6c4863b23f47f31f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fa742d106f2e2a765446ce429aceb2d5e703ddc99783a6c4863b23f47f31f2->enter($__internal_b0fa742d106f2e2a765446ce429aceb2d5e703ddc99783a6c4863b23f47f31f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_119ef239c86bdbd35ad482f00f11db923d7f8a2856ad1c450a6661d450856681->leave($__internal_119ef239c86bdbd35ad482f00f11db923d7f8a2856ad1c450a6661d450856681_prof);

        
        $__internal_b0fa742d106f2e2a765446ce429aceb2d5e703ddc99783a6c4863b23f47f31f2->leave($__internal_b0fa742d106f2e2a765446ce429aceb2d5e703ddc99783a6c4863b23f47f31f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
