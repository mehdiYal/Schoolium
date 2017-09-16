<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_af7a231c65a32d7171b9e3d870102ae46696bc2e331bd4aff7856a9f5ca24cda extends Twig_Template
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
        $__internal_1df1f74d7529aebc22938b7edfbb00885c34d129f183f9e5e82cc34066b41140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df1f74d7529aebc22938b7edfbb00885c34d129f183f9e5e82cc34066b41140->enter($__internal_1df1f74d7529aebc22938b7edfbb00885c34d129f183f9e5e82cc34066b41140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_59b5d107d4902e676d3aa4c68bc5d6bd868f6d5a90bb3f3ace7b5f9f149a135d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b5d107d4902e676d3aa4c68bc5d6bd868f6d5a90bb3f3ace7b5f9f149a135d->enter($__internal_59b5d107d4902e676d3aa4c68bc5d6bd868f6d5a90bb3f3ace7b5f9f149a135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1df1f74d7529aebc22938b7edfbb00885c34d129f183f9e5e82cc34066b41140->leave($__internal_1df1f74d7529aebc22938b7edfbb00885c34d129f183f9e5e82cc34066b41140_prof);

        
        $__internal_59b5d107d4902e676d3aa4c68bc5d6bd868f6d5a90bb3f3ace7b5f9f149a135d->leave($__internal_59b5d107d4902e676d3aa4c68bc5d6bd868f6d5a90bb3f3ace7b5f9f149a135d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
