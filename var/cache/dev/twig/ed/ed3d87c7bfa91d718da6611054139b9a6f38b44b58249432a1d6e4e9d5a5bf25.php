<?php

/* enseignantsViews/listEnseignants.html.twig */
class __TwigTemplate_dad1d01d5e14daae2f1882a572c897088b3e6cb0a7c40ef333877858fbddceb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enseignantsViews/listEnseignants.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbe598e0c2a74767ea5b219e118fd25e97b1a091da1ec9e3efdacd72294a59a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe598e0c2a74767ea5b219e118fd25e97b1a091da1ec9e3efdacd72294a59a1->enter($__internal_dbe598e0c2a74767ea5b219e118fd25e97b1a091da1ec9e3efdacd72294a59a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $__internal_b01935542f5e5d62ccf9666b0cacbd60c73913dc13766b07165638cfe959706a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01935542f5e5d62ccf9666b0cacbd60c73913dc13766b07165638cfe959706a->enter($__internal_b01935542f5e5d62ccf9666b0cacbd60c73913dc13766b07165638cfe959706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe598e0c2a74767ea5b219e118fd25e97b1a091da1ec9e3efdacd72294a59a1->leave($__internal_dbe598e0c2a74767ea5b219e118fd25e97b1a091da1ec9e3efdacd72294a59a1_prof);

        
        $__internal_b01935542f5e5d62ccf9666b0cacbd60c73913dc13766b07165638cfe959706a->leave($__internal_b01935542f5e5d62ccf9666b0cacbd60c73913dc13766b07165638cfe959706a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95a3153ab0cd6e3356d6a2fbd4df5783198b9245ffb09265715cd83d1622a23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a3153ab0cd6e3356d6a2fbd4df5783198b9245ffb09265715cd83d1622a23d->enter($__internal_95a3153ab0cd6e3356d6a2fbd4df5783198b9245ffb09265715cd83d1622a23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02fac96d810b9a820f1e34618cf0f2721822b75033ca0b3215eeec24bd164910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fac96d810b9a820f1e34618cf0f2721822b75033ca0b3215eeec24bd164910->enter($__internal_02fac96d810b9a820f1e34618cf0f2721822b75033ca0b3215eeec24bd164910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "prenom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_02fac96d810b9a820f1e34618cf0f2721822b75033ca0b3215eeec24bd164910->leave($__internal_02fac96d810b9a820f1e34618cf0f2721822b75033ca0b3215eeec24bd164910_prof);

        
        $__internal_95a3153ab0cd6e3356d6a2fbd4df5783198b9245ffb09265715cd83d1622a23d->leave($__internal_95a3153ab0cd6e3356d6a2fbd4df5783198b9245ffb09265715cd83d1622a23d_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/listEnseignants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
\t<ol>
\t\t{% for enseignant in app.user.ecole.enseignants %}
\t\t\t<li>{{ enseignant.nom}} {{ enseignant.prenom}} <a href=\"{{ path('editEnseignant',{'id':enseignant.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeEnseignant',{'id':enseignant.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileEnseignant',{'id':enseignant.id})}}\">{{'profile'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "enseignantsViews/listEnseignants.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/enseignantsViews/listEnseignants.html.twig");
    }
}
