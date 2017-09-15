<?php

/* matieresViews/listMatieres.html.twig */
class __TwigTemplate_bf70733c7d6e4908c1df14864d0bde050a2c7dc002610fbf0ec4b9a1b43f25c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matieresViews/listMatieres.html.twig", 1);
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
        $__internal_7493a9233c96e733ce337ec96c834a94e918c9707a6828153550fb4d7733f4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7493a9233c96e733ce337ec96c834a94e918c9707a6828153550fb4d7733f4fd->enter($__internal_7493a9233c96e733ce337ec96c834a94e918c9707a6828153550fb4d7733f4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $__internal_1c8f7ccc6632856da8c3f4f7807a010f918dec37cd14e54ed21ff188f0015ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8f7ccc6632856da8c3f4f7807a010f918dec37cd14e54ed21ff188f0015ff1->enter($__internal_1c8f7ccc6632856da8c3f4f7807a010f918dec37cd14e54ed21ff188f0015ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7493a9233c96e733ce337ec96c834a94e918c9707a6828153550fb4d7733f4fd->leave($__internal_7493a9233c96e733ce337ec96c834a94e918c9707a6828153550fb4d7733f4fd_prof);

        
        $__internal_1c8f7ccc6632856da8c3f4f7807a010f918dec37cd14e54ed21ff188f0015ff1->leave($__internal_1c8f7ccc6632856da8c3f4f7807a010f918dec37cd14e54ed21ff188f0015ff1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58ed40e2f7f3b220cf3be225d316ee31f921e1fceade5b5a315e6967f4fb37e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ed40e2f7f3b220cf3be225d316ee31f921e1fceade5b5a315e6967f4fb37e2->enter($__internal_58ed40e2f7f3b220cf3be225d316ee31f921e1fceade5b5a315e6967f4fb37e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb6a6599a2fac7a422f5f14040583fb17b8b89f1f2105f6e45b7c89156744ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6a6599a2fac7a422f5f14040583fb17b8b89f1f2105f6e45b7c89156744ce5->enter($__internal_cb6a6599a2fac7a422f5f14040583fb17b8b89f1f2105f6e45b7c89156744ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["matieres"] ?? $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "description", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_cb6a6599a2fac7a422f5f14040583fb17b8b89f1f2105f6e45b7c89156744ce5->leave($__internal_cb6a6599a2fac7a422f5f14040583fb17b8b89f1f2105f6e45b7c89156744ce5_prof);

        
        $__internal_58ed40e2f7f3b220cf3be225d316ee31f921e1fceade5b5a315e6967f4fb37e2->leave($__internal_58ed40e2f7f3b220cf3be225d316ee31f921e1fceade5b5a315e6967f4fb37e2_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/listMatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'matiere'|trans}}</h1>
\t<ol>
\t\t{% for matiere in matieres %}
\t\t\t<li>{{ matiere.nom}} {{ matiere.description}} <a href=\"{{ path('editMatiere',{'id':matiere.id})}}\">Modifier</a> <a href=\"{{ path('removeMatiere',{'id':matiere.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "matieresViews/listMatieres.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\matieresViews\\listMatieres.html.twig");
    }
}
