<?php

/* :adminsViews:schoolAdmin.html.twig */
class __TwigTemplate_f3a00a52957b9669ed2b3588ff5b6ead6e4d83a0a97a1ba1ba7072865aaf9e87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adminsViews:schoolAdmin.html.twig", 1);
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
        $__internal_0ea46205792ecfcc36669983f6fc79fea226aaa80254ac33610a0ed82f4633c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea46205792ecfcc36669983f6fc79fea226aaa80254ac33610a0ed82f4633c3->enter($__internal_0ea46205792ecfcc36669983f6fc79fea226aaa80254ac33610a0ed82f4633c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $__internal_7cfe976a4da38eb4c03c10d038f317bd62c5bb5701df1edf6c07b17fa49eee0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfe976a4da38eb4c03c10d038f317bd62c5bb5701df1edf6c07b17fa49eee0d->enter($__internal_7cfe976a4da38eb4c03c10d038f317bd62c5bb5701df1edf6c07b17fa49eee0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ea46205792ecfcc36669983f6fc79fea226aaa80254ac33610a0ed82f4633c3->leave($__internal_0ea46205792ecfcc36669983f6fc79fea226aaa80254ac33610a0ed82f4633c3_prof);

        
        $__internal_7cfe976a4da38eb4c03c10d038f317bd62c5bb5701df1edf6c07b17fa49eee0d->leave($__internal_7cfe976a4da38eb4c03c10d038f317bd62c5bb5701df1edf6c07b17fa49eee0d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2473e74bbf7b9ddc25f10618d8b3caa5a87d380949f9e33e76ba95e2d55db5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2473e74bbf7b9ddc25f10618d8b3caa5a87d380949f9e33e76ba95e2d55db5d8->enter($__internal_2473e74bbf7b9ddc25f10618d8b3caa5a87d380949f9e33e76ba95e2d55db5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bbcbf793c75aea66856f17b1b14dbfb32420019ae3a4bbaca2da2e629598289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbcbf793c75aea66856f17b1b14dbfb32420019ae3a4bbaca2da2e629598289->enter($__internal_4bbcbf793c75aea66856f17b1b14dbfb32420019ae3a4bbaca2da2e629598289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pas d'ecole associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo " </h1>
<h2>Selectioner une Ecole</h2>\t
\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecoles"] ?? $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 8
            echo "\t\t\t";
            if (($this->getAttribute($context["ecole"], "admin", array()) == null)) {
                // line 9
                echo "\t\t\t<li>
\t\t\t\t";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoSchool", array("id" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array()), "idp" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
                echo "\">Associer</a>
\t\t\t</li>
\t\t\t";
            }
            // line 13
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</ol>
";
        
        $__internal_4bbcbf793c75aea66856f17b1b14dbfb32420019ae3a4bbaca2da2e629598289->leave($__internal_4bbcbf793c75aea66856f17b1b14dbfb32420019ae3a4bbaca2da2e629598289_prof);

        
        $__internal_2473e74bbf7b9ddc25f10618d8b3caa5a87d380949f9e33e76ba95e2d55db5d8->leave($__internal_2473e74bbf7b9ddc25f10618d8b3caa5a87d380949f9e33e76ba95e2d55db5d8_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:schoolAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  78 => 13,  68 => 10,  65 => 9,  62 => 8,  58 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Pas d'ecole associé à {{admin.nom}} {{admin.prenom}} </h1>
<h2>Selectioner une Ecole</h2>\t
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t{% if ecole.admin ==null %}
\t\t\t<li>
\t\t\t\t{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('assoSchool',{'id':admin.id,'idp':ecole.id})}}\">Associer</a>
\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</ol>
{% endblock %}", ":adminsViews:schoolAdmin.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/adminsViews/schoolAdmin.html.twig");
    }
}
