<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_11d1885057f6b52c78643c4042824dffc592883e725d995ad827f0c38335e2af extends Twig_Template
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
        $__internal_7c6f6276301e2b95e40058a6ebb88a12fc14edcaa03eaa0332a534c9bb809005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6f6276301e2b95e40058a6ebb88a12fc14edcaa03eaa0332a534c9bb809005->enter($__internal_7c6f6276301e2b95e40058a6ebb88a12fc14edcaa03eaa0332a534c9bb809005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5acb148a4f2794bbd799553ae9f1e83542f45608f2acdb8262b052939845ed3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acb148a4f2794bbd799553ae9f1e83542f45608f2acdb8262b052939845ed3a->enter($__internal_5acb148a4f2794bbd799553ae9f1e83542f45608f2acdb8262b052939845ed3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7c6f6276301e2b95e40058a6ebb88a12fc14edcaa03eaa0332a534c9bb809005->leave($__internal_7c6f6276301e2b95e40058a6ebb88a12fc14edcaa03eaa0332a534c9bb809005_prof);

        
        $__internal_5acb148a4f2794bbd799553ae9f1e83542f45608f2acdb8262b052939845ed3a->leave($__internal_5acb148a4f2794bbd799553ae9f1e83542f45608f2acdb8262b052939845ed3a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
