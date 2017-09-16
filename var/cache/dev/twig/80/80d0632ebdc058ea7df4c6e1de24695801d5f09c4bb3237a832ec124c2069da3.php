<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_587128cadfe3e3a54ffb7413d194c7b1ce455e0d80e46391938dc4d8769f8ea0 extends Twig_Template
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
        $__internal_33b4ef7de895208f7849d3ac51e744c36a2fdcd0bda4c72fadc5e6cdad296f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b4ef7de895208f7849d3ac51e744c36a2fdcd0bda4c72fadc5e6cdad296f37->enter($__internal_33b4ef7de895208f7849d3ac51e744c36a2fdcd0bda4c72fadc5e6cdad296f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_19f865590a82bde31c63d4ece5a9683a0f9ea84c7bc1d08d17cbb544d5e5a848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f865590a82bde31c63d4ece5a9683a0f9ea84c7bc1d08d17cbb544d5e5a848->enter($__internal_19f865590a82bde31c63d4ece5a9683a0f9ea84c7bc1d08d17cbb544d5e5a848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_33b4ef7de895208f7849d3ac51e744c36a2fdcd0bda4c72fadc5e6cdad296f37->leave($__internal_33b4ef7de895208f7849d3ac51e744c36a2fdcd0bda4c72fadc5e6cdad296f37_prof);

        
        $__internal_19f865590a82bde31c63d4ece5a9683a0f9ea84c7bc1d08d17cbb544d5e5a848->leave($__internal_19f865590a82bde31c63d4ece5a9683a0f9ea84c7bc1d08d17cbb544d5e5a848_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
