<?php

/* parentsViews/listParents.html.twig */
class __TwigTemplate_673036d139d7f1335cb0c3ebd48a199195805b665539888888a5b7e0653df5bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "parentsViews/listParents.html.twig", 1);
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
        $__internal_86e0bc7f7f825104ede5cc912d2fe8db6390443cb412a62c7998898995c5c043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e0bc7f7f825104ede5cc912d2fe8db6390443cb412a62c7998898995c5c043->enter($__internal_86e0bc7f7f825104ede5cc912d2fe8db6390443cb412a62c7998898995c5c043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $__internal_55fe2fb797d88e6b8aad6d81cbabf7de2dee0bc7842f97375ae8cc7670e87ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fe2fb797d88e6b8aad6d81cbabf7de2dee0bc7842f97375ae8cc7670e87ad2->enter($__internal_55fe2fb797d88e6b8aad6d81cbabf7de2dee0bc7842f97375ae8cc7670e87ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86e0bc7f7f825104ede5cc912d2fe8db6390443cb412a62c7998898995c5c043->leave($__internal_86e0bc7f7f825104ede5cc912d2fe8db6390443cb412a62c7998898995c5c043_prof);

        
        $__internal_55fe2fb797d88e6b8aad6d81cbabf7de2dee0bc7842f97375ae8cc7670e87ad2->leave($__internal_55fe2fb797d88e6b8aad6d81cbabf7de2dee0bc7842f97375ae8cc7670e87ad2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b6f43b065cba49cb2f75fc399692819529a8af3216d5f971f1569db12fd5ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6f43b065cba49cb2f75fc399692819529a8af3216d5f971f1569db12fd5ee3->enter($__internal_6b6f43b065cba49cb2f75fc399692819529a8af3216d5f971f1569db12fd5ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52e9bf6fd5c91601cee7489c37f8ede1bd2f738f8dfacd140a68eda0f9f27282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e9bf6fd5c91601cee7489c37f8ede1bd2f738f8dfacd140a68eda0f9f27282->enter($__internal_52e9bf6fd5c91601cee7489c37f8ede1bd2f738f8dfacd140a68eda0f9f27282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parentals"] ?? $this->getContext($context, "parentals")));
        foreach ($context['_seq'] as $context["_key"] => $context["parant"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "prenom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editParental", array("id" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeParental", array("id" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_52e9bf6fd5c91601cee7489c37f8ede1bd2f738f8dfacd140a68eda0f9f27282->leave($__internal_52e9bf6fd5c91601cee7489c37f8ede1bd2f738f8dfacd140a68eda0f9f27282_prof);

        
        $__internal_6b6f43b065cba49cb2f75fc399692819529a8af3216d5f971f1569db12fd5ee3->leave($__internal_6b6f43b065cba49cb2f75fc399692819529a8af3216d5f971f1569db12fd5ee3_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/listParents.html.twig";
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
<h1>{{'list'|trans}} {{'parents'|trans}}</h1>
\t<ol>
\t\t{% for parant in parentals %}
\t\t\t<li>{{ parant.nom}} {{ parant.prenom}} <a href=\"{{ path('editParental',{'id':parant.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeParental',{'id':parant.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileParental',{'id':parant.id})}}\">{{'profile'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "parentsViews/listParents.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\parentsViews\\listParents.html.twig");
    }
}
