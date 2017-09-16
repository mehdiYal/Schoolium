<?php

/* adminsViews/profileAdmin.html.twig */
class __TwigTemplate_d1fabcbd4d7bd8a8edc63fa7fac07d0284c3c167bbfc6000f51bace7e7bd2cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adminsViews/profileAdmin.html.twig", 1);
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
        $__internal_f6fe8529c163da1d69703c84004e212583ab4aa8b029a76a7f1adcaefb0eef31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6fe8529c163da1d69703c84004e212583ab4aa8b029a76a7f1adcaefb0eef31->enter($__internal_f6fe8529c163da1d69703c84004e212583ab4aa8b029a76a7f1adcaefb0eef31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/profileAdmin.html.twig"));

        $__internal_22e3cfa055a0bc8424b40661bff68a6818a2bfd23ee44d584f880b90ab1834fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e3cfa055a0bc8424b40661bff68a6818a2bfd23ee44d584f880b90ab1834fb->enter($__internal_22e3cfa055a0bc8424b40661bff68a6818a2bfd23ee44d584f880b90ab1834fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/profileAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6fe8529c163da1d69703c84004e212583ab4aa8b029a76a7f1adcaefb0eef31->leave($__internal_f6fe8529c163da1d69703c84004e212583ab4aa8b029a76a7f1adcaefb0eef31_prof);

        
        $__internal_22e3cfa055a0bc8424b40661bff68a6818a2bfd23ee44d584f880b90ab1834fb->leave($__internal_22e3cfa055a0bc8424b40661bff68a6818a2bfd23ee44d584f880b90ab1834fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfbb25ebc7a9203aafd61116826a7c8dc102fac776023184de233d58a9963a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbb25ebc7a9203aafd61116826a7c8dc102fac776023184de233d58a9963a30->enter($__internal_dfbb25ebc7a9203aafd61116826a7c8dc102fac776023184de233d58a9963a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d06bbd839a8f3ea5b2ad6678a09d3f55f13d34112b060cd1a93a32805332c79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06bbd839a8f3ea5b2ad6678a09d3f55f13d34112b060cd1a93a32805332c79b->enter($__internal_d06bbd839a8f3ea5b2ad6678a09d3f55f13d34112b060cd1a93a32805332c79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 6
        if ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t</ul>

\t
";
        
        $__internal_d06bbd839a8f3ea5b2ad6678a09d3f55f13d34112b060cd1a93a32805332c79b->leave($__internal_d06bbd839a8f3ea5b2ad6678a09d3f55f13d34112b060cd1a93a32805332c79b_prof);

        
        $__internal_dfbb25ebc7a9203aafd61116826a7c8dc102fac776023184de233d58a9963a30->leave($__internal_dfbb25ebc7a9203aafd61116826a7c8dc102fac776023184de233d58a9963a30_prof);

    }

    public function getTemplateName()
    {
        return "adminsViews/profileAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Profile De {{admin.nom}} {{admin.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if admin.photo %}{{ asset('uploads/photos/' ~ admin.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{admin.nom}}</li>
\t\t<li><b>prenom :</b>{{admin.prenom}}</li>
\t\t<li><b>genre :</b>{{admin.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{admin.dateDeNaissance|date('Y-m-d')}} à {{admin.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{admin.adresse}}</li>
\t\t<li><b>code postal :</b>{{admin.codePostal}}</li>
\t\t<li><b>telephone :</b>{{admin.telephone}}</li>
\t\t<li><b>username :</b>{{admin.username}}</li>
\t\t<li><b>email :</b>{{admin.email}}</li>
\t\t<li><b>type :</b>{{admin.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{admin.lastLogin|date('Y-m-d')}}</li>
\t</ul>

\t
{% endblock %}", "adminsViews/profileAdmin.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/adminsViews/profileAdmin.html.twig");
    }
}
