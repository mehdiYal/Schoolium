<?php

/* enseignantsViews/listEnseignants.html.twig */
class __TwigTemplate_2b6137a5b7e92643caccea46f798f4c7bfac9fef99b538a8a12277d93bf61765 extends Twig_Template
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
        $__internal_e7d8d84fb6d1de4d3751a740c44025b671c92581a8a472c82d3123e615cf4330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d8d84fb6d1de4d3751a740c44025b671c92581a8a472c82d3123e615cf4330->enter($__internal_e7d8d84fb6d1de4d3751a740c44025b671c92581a8a472c82d3123e615cf4330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $__internal_773557cd335537c9fcc620e9d085520f30ab0b4ecd04af76b050b068d57d9482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773557cd335537c9fcc620e9d085520f30ab0b4ecd04af76b050b068d57d9482->enter($__internal_773557cd335537c9fcc620e9d085520f30ab0b4ecd04af76b050b068d57d9482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d8d84fb6d1de4d3751a740c44025b671c92581a8a472c82d3123e615cf4330->leave($__internal_e7d8d84fb6d1de4d3751a740c44025b671c92581a8a472c82d3123e615cf4330_prof);

        
        $__internal_773557cd335537c9fcc620e9d085520f30ab0b4ecd04af76b050b068d57d9482->leave($__internal_773557cd335537c9fcc620e9d085520f30ab0b4ecd04af76b050b068d57d9482_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43246fc949e053ffb71b514fd955e757611cc3d4157b8915785211016bd6c497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43246fc949e053ffb71b514fd955e757611cc3d4157b8915785211016bd6c497->enter($__internal_43246fc949e053ffb71b514fd955e757611cc3d4157b8915785211016bd6c497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39e92ba34b65d1ed65d6e5d0f9a8b430cc5b73db3d57d0ee11e1938d6fa74e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e92ba34b65d1ed65d6e5d0f9a8b430cc5b73db3d57d0ee11e1938d6fa74e1a->enter($__internal_39e92ba34b65d1ed65d6e5d0f9a8b430cc5b73db3d57d0ee11e1938d6fa74e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39e92ba34b65d1ed65d6e5d0f9a8b430cc5b73db3d57d0ee11e1938d6fa74e1a->leave($__internal_39e92ba34b65d1ed65d6e5d0f9a8b430cc5b73db3d57d0ee11e1938d6fa74e1a_prof);

        
        $__internal_43246fc949e053ffb71b514fd955e757611cc3d4157b8915785211016bd6c497->leave($__internal_43246fc949e053ffb71b514fd955e757611cc3d4157b8915785211016bd6c497_prof);

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
{% endblock %}", "enseignantsViews/listEnseignants.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\enseignantsViews\\listEnseignants.html.twig");
    }
}
