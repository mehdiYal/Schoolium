<?php

/* :enseignantsViews:enseignant.html.twig */
class __TwigTemplate_a7e50772fc5805e9ce4bea0a5cf26f9cbbad3fff9c10af87e7a199e12775fc05 extends Twig_Template
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
        $__internal_a4ba264e413028188019d9f8d35b689be9cfe1942010920b11aafcf7a4f58e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ba264e413028188019d9f8d35b689be9cfe1942010920b11aafcf7a4f58e98->enter($__internal_a4ba264e413028188019d9f8d35b689be9cfe1942010920b11aafcf7a4f58e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        $__internal_ef9d37615883b9a8e9be21d14af740c7eb8d324052aa056178425823ae628488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9d37615883b9a8e9be21d14af740c7eb8d324052aa056178425823ae628488->enter($__internal_ef9d37615883b9a8e9be21d14af740c7eb8d324052aa056178425823ae628488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        // line 1
        echo " <li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
";
        
        $__internal_a4ba264e413028188019d9f8d35b689be9cfe1942010920b11aafcf7a4f58e98->leave($__internal_a4ba264e413028188019d9f8d35b689be9cfe1942010920b11aafcf7a4f58e98_prof);

        
        $__internal_ef9d37615883b9a8e9be21d14af740c7eb8d324052aa056178425823ae628488->leave($__internal_ef9d37615883b9a8e9be21d14af740c7eb8d324052aa056178425823ae628488_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:enseignant.html.twig";
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
", ":enseignantsViews:enseignant.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/enseignantsViews/enseignant.html.twig");
    }
}
