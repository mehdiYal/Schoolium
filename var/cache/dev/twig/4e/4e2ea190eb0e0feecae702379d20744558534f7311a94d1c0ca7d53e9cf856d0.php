<?php

/* :enseignantsViews:listEnseignants.html.twig */
class __TwigTemplate_1140763179c4f1f086f12c70f499d4cd0492be7fcb0e8492ed3d2e60489d4fa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enseignantsViews:listEnseignants.html.twig", 1);
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
        $__internal_673626cef4374a72427bf44e205a91a6ec5d15e424ed8756a847bd909c91d825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673626cef4374a72427bf44e205a91a6ec5d15e424ed8756a847bd909c91d825->enter($__internal_673626cef4374a72427bf44e205a91a6ec5d15e424ed8756a847bd909c91d825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $__internal_31cb607b898ebd280fc4ff71bb097e10d1249e40eb8df4cba988ba66d28e566f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cb607b898ebd280fc4ff71bb097e10d1249e40eb8df4cba988ba66d28e566f->enter($__internal_31cb607b898ebd280fc4ff71bb097e10d1249e40eb8df4cba988ba66d28e566f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_673626cef4374a72427bf44e205a91a6ec5d15e424ed8756a847bd909c91d825->leave($__internal_673626cef4374a72427bf44e205a91a6ec5d15e424ed8756a847bd909c91d825_prof);

        
        $__internal_31cb607b898ebd280fc4ff71bb097e10d1249e40eb8df4cba988ba66d28e566f->leave($__internal_31cb607b898ebd280fc4ff71bb097e10d1249e40eb8df4cba988ba66d28e566f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38a6eccf8be6cc667b9223aadca705995e0b74fd95ab7ef5badc01faaa7e6cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a6eccf8be6cc667b9223aadca705995e0b74fd95ab7ef5badc01faaa7e6cc8->enter($__internal_38a6eccf8be6cc667b9223aadca705995e0b74fd95ab7ef5badc01faaa7e6cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaeb1b6f54383319b1884e9638e88c0b05d8f761ef7fb3511645fe0ed09c960d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaeb1b6f54383319b1884e9638e88c0b05d8f761ef7fb3511645fe0ed09c960d->enter($__internal_aaeb1b6f54383319b1884e9638e88c0b05d8f761ef7fb3511645fe0ed09c960d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["enseignants"] ?? $this->getContext($context, "enseignants")));
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
        
        $__internal_aaeb1b6f54383319b1884e9638e88c0b05d8f761ef7fb3511645fe0ed09c960d->leave($__internal_aaeb1b6f54383319b1884e9638e88c0b05d8f761ef7fb3511645fe0ed09c960d_prof);

        
        $__internal_38a6eccf8be6cc667b9223aadca705995e0b74fd95ab7ef5badc01faaa7e6cc8->leave($__internal_38a6eccf8be6cc667b9223aadca705995e0b74fd95ab7ef5badc01faaa7e6cc8_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:listEnseignants.html.twig";
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
\t\t{% for enseignant in enseignants %}
\t\t\t<li>{{ enseignant.nom}} {{ enseignant.prenom}} <a href=\"{{ path('editEnseignant',{'id':enseignant.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeEnseignant',{'id':enseignant.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileEnseignant',{'id':enseignant.id})}}\">{{'profile'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":enseignantsViews:listEnseignants.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/enseignantsViews/listEnseignants.html.twig");
    }
}
