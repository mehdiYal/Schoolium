<?php

/* enseignantsViews/profileEnseignant.html.twig */
class __TwigTemplate_3340155c4dad2f102612a1f51f48ac3a57bc096cc32df8f63b3ad89d20f245dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enseignantsViews/profileEnseignant.html.twig", 1);
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
        $__internal_68207cd11d8592dfa4cecbd28385da75e791dc9610735ad3c6c47da14bdf05a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68207cd11d8592dfa4cecbd28385da75e791dc9610735ad3c6c47da14bdf05a4->enter($__internal_68207cd11d8592dfa4cecbd28385da75e791dc9610735ad3c6c47da14bdf05a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/profileEnseignant.html.twig"));

        $__internal_184067716aa3c86b020ace1bb0e03febb916367f804b656d42e2d32cca571c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184067716aa3c86b020ace1bb0e03febb916367f804b656d42e2d32cca571c57->enter($__internal_184067716aa3c86b020ace1bb0e03febb916367f804b656d42e2d32cca571c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/profileEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68207cd11d8592dfa4cecbd28385da75e791dc9610735ad3c6c47da14bdf05a4->leave($__internal_68207cd11d8592dfa4cecbd28385da75e791dc9610735ad3c6c47da14bdf05a4_prof);

        
        $__internal_184067716aa3c86b020ace1bb0e03febb916367f804b656d42e2d32cca571c57->leave($__internal_184067716aa3c86b020ace1bb0e03febb916367f804b656d42e2d32cca571c57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44943720a65477a7551ebb2309cf4c538154d3ba56516d8e07751251804ae88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44943720a65477a7551ebb2309cf4c538154d3ba56516d8e07751251804ae88f->enter($__internal_44943720a65477a7551ebb2309cf4c538154d3ba56516d8e07751251804ae88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7366b14c750c48c2695fb49f448a882ef4f5946dc225404958969e4d2ee85dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7366b14c750c48c2695fb49f448a882ef4f5946dc225404958969e4d2ee85dd8->enter($__internal_7366b14c750c48c2695fb49f448a882ef4f5946dc225404958969e4d2ee85dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 6
        if ($this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li><b>Ecole :</b>";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "ecole", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["enseignant"] ?? $this->getContext($context, "enseignant")), "ecole", array()), "ville", array())), "html", null, true);
        echo "</li>
\t</ul>

\t
";
        
        $__internal_7366b14c750c48c2695fb49f448a882ef4f5946dc225404958969e4d2ee85dd8->leave($__internal_7366b14c750c48c2695fb49f448a882ef4f5946dc225404958969e4d2ee85dd8_prof);

        
        $__internal_44943720a65477a7551ebb2309cf4c538154d3ba56516d8e07751251804ae88f->leave($__internal_44943720a65477a7551ebb2309cf4c538154d3ba56516d8e07751251804ae88f_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/profileEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Profile De {{enseignant.nom}} {{enseignant.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if enseignant.photo %}{{ asset('uploads/photos/' ~ enseignant.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{enseignant.nom}}</li>
\t\t<li><b>prenom :</b>{{enseignant.prenom}}</li>
\t\t<li><b>genre :</b>{{enseignant.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{enseignant.dateDeNaissance|date('Y-m-d')}} à {{enseignant.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{enseignant.adresse}}</li>
\t\t<li><b>code postal :</b>{{enseignant.codePostal}}</li>
\t\t<li><b>telephone :</b>{{enseignant.telephone}}</li>
\t\t<li><b>username :</b>{{enseignant.username}}</li>
\t\t<li><b>email :</b>{{enseignant.email}}</li>
\t\t<li><b>type :</b>{{enseignant.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{enseignant.lastLogin|date('Y-m-d')}}</li>
\t\t<li><b>Ecole :</b>{{enseignant.ecole.nom|upper}} {{enseignant.ecole.ville|upper}}</li>
\t</ul>

\t
{% endblock %}", "enseignantsViews/profileEnseignant.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\enseignantsViews\\profileEnseignant.html.twig");
    }
}
