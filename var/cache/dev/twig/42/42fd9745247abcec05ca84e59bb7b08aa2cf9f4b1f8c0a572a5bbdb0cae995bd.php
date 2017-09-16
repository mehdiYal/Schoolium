<?php

/* parentsViews/listParents.html.twig */
class __TwigTemplate_73e4f9a801c22447f5c16b0c87877bd21df717bc3dc4f2b718998ba6221213c0 extends Twig_Template
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
        $__internal_5f3f41ea4f8379a1086950ada85a5a1086ddfadeb3b24a44cf5525a8545d4e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3f41ea4f8379a1086950ada85a5a1086ddfadeb3b24a44cf5525a8545d4e4c->enter($__internal_5f3f41ea4f8379a1086950ada85a5a1086ddfadeb3b24a44cf5525a8545d4e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $__internal_a18a5d23cd777ae7e1bd71deb536a79d826818495eb98fdd5f34ed6ae99e6dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18a5d23cd777ae7e1bd71deb536a79d826818495eb98fdd5f34ed6ae99e6dba->enter($__internal_a18a5d23cd777ae7e1bd71deb536a79d826818495eb98fdd5f34ed6ae99e6dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f3f41ea4f8379a1086950ada85a5a1086ddfadeb3b24a44cf5525a8545d4e4c->leave($__internal_5f3f41ea4f8379a1086950ada85a5a1086ddfadeb3b24a44cf5525a8545d4e4c_prof);

        
        $__internal_a18a5d23cd777ae7e1bd71deb536a79d826818495eb98fdd5f34ed6ae99e6dba->leave($__internal_a18a5d23cd777ae7e1bd71deb536a79d826818495eb98fdd5f34ed6ae99e6dba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4992d60d2d496369cb13fefbafad89b393f973d2a646aac3de45627b002b8f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4992d60d2d496369cb13fefbafad89b393f973d2a646aac3de45627b002b8f6e->enter($__internal_4992d60d2d496369cb13fefbafad89b393f973d2a646aac3de45627b002b8f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83eb9a2c793fe173389c6e5c1be798c0461b4255cb42b019236655a583d904c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83eb9a2c793fe173389c6e5c1be798c0461b4255cb42b019236655a583d904c0->enter($__internal_83eb9a2c793fe173389c6e5c1be798c0461b4255cb42b019236655a583d904c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
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
        
        $__internal_83eb9a2c793fe173389c6e5c1be798c0461b4255cb42b019236655a583d904c0->leave($__internal_83eb9a2c793fe173389c6e5c1be798c0461b4255cb42b019236655a583d904c0_prof);

        
        $__internal_4992d60d2d496369cb13fefbafad89b393f973d2a646aac3de45627b002b8f6e->leave($__internal_4992d60d2d496369cb13fefbafad89b393f973d2a646aac3de45627b002b8f6e_prof);

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
\t\t{% for parant in app.user.ecole.parents %}
\t\t\t<li>{{ parant.nom}} {{ parant.prenom}} <a href=\"{{ path('editParental',{'id':parant.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeParental',{'id':parant.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileParental',{'id':parant.id})}}\">{{'profile'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "parentsViews/listParents.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/parentsViews/listParents.html.twig");
    }
}
