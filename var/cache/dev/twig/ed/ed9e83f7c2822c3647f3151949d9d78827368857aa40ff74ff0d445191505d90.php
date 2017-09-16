<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5381916ee7abedc64c82ee11e0815981c0b1830acc9d2d3bd6d3fb539489798a extends Twig_Template
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
        $__internal_504c03a74a223b6a190197f9950b67d3477336a54df767db1b1f49799ed9eef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504c03a74a223b6a190197f9950b67d3477336a54df767db1b1f49799ed9eef0->enter($__internal_504c03a74a223b6a190197f9950b67d3477336a54df767db1b1f49799ed9eef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b82b6758f100e94b4dd3bd40fccc2731142015b01f638eed5228ff089c712e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82b6758f100e94b4dd3bd40fccc2731142015b01f638eed5228ff089c712e60->enter($__internal_b82b6758f100e94b4dd3bd40fccc2731142015b01f638eed5228ff089c712e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_504c03a74a223b6a190197f9950b67d3477336a54df767db1b1f49799ed9eef0->leave($__internal_504c03a74a223b6a190197f9950b67d3477336a54df767db1b1f49799ed9eef0_prof);

        
        $__internal_b82b6758f100e94b4dd3bd40fccc2731142015b01f638eed5228ff089c712e60->leave($__internal_b82b6758f100e94b4dd3bd40fccc2731142015b01f638eed5228ff089c712e60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
