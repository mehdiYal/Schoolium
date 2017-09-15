<?php

/* enseignantsViews/enseignant.html.twig */
class __TwigTemplate_fd33b1da08e3634d7a709e712749e949906d5442bdf9ebc937dcb6de138aec95 extends Twig_Template
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
        $__internal_0ddb5c6aade25d03d6cac06f6a55171ad3d8024773a3ec5619cd33e056142d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddb5c6aade25d03d6cac06f6a55171ad3d8024773a3ec5619cd33e056142d84->enter($__internal_0ddb5c6aade25d03d6cac06f6a55171ad3d8024773a3ec5619cd33e056142d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/enseignant.html.twig"));

        $__internal_edf8fa3db57e122d5099b71ae7541339e01814013ab3abcf6345ea172a9cdb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf8fa3db57e122d5099b71ae7541339e01814013ab3abcf6345ea172a9cdb02->enter($__internal_edf8fa3db57e122d5099b71ae7541339e01814013ab3abcf6345ea172a9cdb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/enseignant.html.twig"));

        // line 1
        echo " <li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
";
        
        $__internal_0ddb5c6aade25d03d6cac06f6a55171ad3d8024773a3ec5619cd33e056142d84->leave($__internal_0ddb5c6aade25d03d6cac06f6a55171ad3d8024773a3ec5619cd33e056142d84_prof);

        
        $__internal_edf8fa3db57e122d5099b71ae7541339e01814013ab3abcf6345ea172a9cdb02->leave($__internal_edf8fa3db57e122d5099b71ae7541339e01814013ab3abcf6345ea172a9cdb02_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/enseignant.html.twig";
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
        return new Twig_Source(" <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>
", "enseignantsViews/enseignant.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\enseignantsViews\\enseignant.html.twig");
    }
}
