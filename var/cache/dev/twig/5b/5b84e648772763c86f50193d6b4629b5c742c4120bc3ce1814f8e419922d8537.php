<?php

/* :parentsViews:parent.html.twig */
class __TwigTemplate_7890dc9855f4405d58799095dae37fb42ed01302b234cba25a034e6ef6c33881 extends Twig_Template
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
        $__internal_ce9ba3b11bc5a8d5c17f5f7566d5de41506b766363c80587a3f106b8d1363229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9ba3b11bc5a8d5c17f5f7566d5de41506b766363c80587a3f106b8d1363229->enter($__internal_ce9ba3b11bc5a8d5c17f5f7566d5de41506b766363c80587a3f106b8d1363229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        $__internal_d211717c5e9d57aaae31ac524e51535082c162e59df30d56105c831e6fd5ff28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d211717c5e9d57aaae31ac524e51535082c162e59df30d56105c831e6fd5ff28->enter($__internal_d211717c5e9d57aaae31ac524e51535082c162e59df30d56105c831e6fd5ff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        // line 1
        echo "
  <li class=\"\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>";
        
        $__internal_ce9ba3b11bc5a8d5c17f5f7566d5de41506b766363c80587a3f106b8d1363229->leave($__internal_ce9ba3b11bc5a8d5c17f5f7566d5de41506b766363c80587a3f106b8d1363229_prof);

        
        $__internal_d211717c5e9d57aaae31ac524e51535082c162e59df30d56105c831e6fd5ff28->leave($__internal_d211717c5e9d57aaae31ac524e51535082c162e59df30d56105c831e6fd5ff28_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:parent.html.twig";
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
        return new Twig_Source("
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", ":parentsViews:parent.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/parentsViews/parent.html.twig");
    }
}
