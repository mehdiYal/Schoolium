<?php

/* enseignantsViews/enseignant.html.twig */
class __TwigTemplate_023839f67884c0cf52288bb674f3989a78731604737dbec012c405d549ed5ee3 extends Twig_Template
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
        $__internal_242f4fd047e3b4290c50194f0328fb5fec3cf4e4de83633659448e0c945fce6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242f4fd047e3b4290c50194f0328fb5fec3cf4e4de83633659448e0c945fce6c->enter($__internal_242f4fd047e3b4290c50194f0328fb5fec3cf4e4de83633659448e0c945fce6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/enseignant.html.twig"));

        $__internal_7dc9eab067fd73627f887a450ef629dd8b5bbf1cee53c6a6be40fe0f1fbfbc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc9eab067fd73627f887a450ef629dd8b5bbf1cee53c6a6be40fe0f1fbfbc29->enter($__internal_7dc9eab067fd73627f887a450ef629dd8b5bbf1cee53c6a6be40fe0f1fbfbc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/enseignant.html.twig"));

        // line 1
        echo " <li class=\"\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
";
        
        $__internal_242f4fd047e3b4290c50194f0328fb5fec3cf4e4de83633659448e0c945fce6c->leave($__internal_242f4fd047e3b4290c50194f0328fb5fec3cf4e4de83633659448e0c945fce6c_prof);

        
        $__internal_7dc9eab067fd73627f887a450ef629dd8b5bbf1cee53c6a6be40fe0f1fbfbc29->leave($__internal_7dc9eab067fd73627f887a450ef629dd8b5bbf1cee53c6a6be40fe0f1fbfbc29_prof);

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
", "enseignantsViews/enseignant.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\enseignantsViews\\enseignant.html.twig");
    }
}
