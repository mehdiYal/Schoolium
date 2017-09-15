<?php

/* :enseignantsViews:enseignant.html.twig */
class __TwigTemplate_44667544ede661902923c4799592f06c848b192aa1a7dfa978e2df375c3f0bfd extends Twig_Template
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
        $__internal_525fd887ffb059b83619362e24f127e0416ef3feddd3cfc74e16e534dfda2b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525fd887ffb059b83619362e24f127e0416ef3feddd3cfc74e16e534dfda2b43->enter($__internal_525fd887ffb059b83619362e24f127e0416ef3feddd3cfc74e16e534dfda2b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        $__internal_7abc73a6aa12949b45c58a47e206f2558620d2b510d3952933a9c5491aee43dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abc73a6aa12949b45c58a47e206f2558620d2b510d3952933a9c5491aee43dc->enter($__internal_7abc73a6aa12949b45c58a47e206f2558620d2b510d3952933a9c5491aee43dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:enseignant.html.twig"));

        // line 1
        echo " <li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
";
        
        $__internal_525fd887ffb059b83619362e24f127e0416ef3feddd3cfc74e16e534dfda2b43->leave($__internal_525fd887ffb059b83619362e24f127e0416ef3feddd3cfc74e16e534dfda2b43_prof);

        
        $__internal_7abc73a6aa12949b45c58a47e206f2558620d2b510d3952933a9c5491aee43dc->leave($__internal_7abc73a6aa12949b45c58a47e206f2558620d2b510d3952933a9c5491aee43dc_prof);

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
", ":enseignantsViews:enseignant.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/enseignantsViews/enseignant.html.twig");
    }
}
