<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_22a999904cd32a1d89f426ccaab34a42554c32649573535ce9bffd11eed96b39 extends Twig_Template
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
        $__internal_f52bb6f2a17cc0672e64314f70a85f8e79d9997c30d14de1fdea57c2a936a9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52bb6f2a17cc0672e64314f70a85f8e79d9997c30d14de1fdea57c2a936a9f5->enter($__internal_f52bb6f2a17cc0672e64314f70a85f8e79d9997c30d14de1fdea57c2a936a9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c2ccfd0fba7b3085559f922e7fe306f43f889012da178940fdd47bb8082b1177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ccfd0fba7b3085559f922e7fe306f43f889012da178940fdd47bb8082b1177->enter($__internal_c2ccfd0fba7b3085559f922e7fe306f43f889012da178940fdd47bb8082b1177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f52bb6f2a17cc0672e64314f70a85f8e79d9997c30d14de1fdea57c2a936a9f5->leave($__internal_f52bb6f2a17cc0672e64314f70a85f8e79d9997c30d14de1fdea57c2a936a9f5_prof);

        
        $__internal_c2ccfd0fba7b3085559f922e7fe306f43f889012da178940fdd47bb8082b1177->leave($__internal_c2ccfd0fba7b3085559f922e7fe306f43f889012da178940fdd47bb8082b1177_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
