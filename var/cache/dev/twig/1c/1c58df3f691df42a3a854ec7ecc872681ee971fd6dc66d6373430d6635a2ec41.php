<?php

/* :enseignantsViews:myProfileEnseignant.html.twig */
class __TwigTemplate_c510961378ecd6c2c95b47f08d018f807adba1e39d14774e0d2ad3cb04319a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enseignantsViews:myProfileEnseignant.html.twig", 1);
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
        $__internal_f73e8c9ef461c0502c3ccd028e7e1970be466a9291fa990fb531451f5252657f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73e8c9ef461c0502c3ccd028e7e1970be466a9291fa990fb531451f5252657f->enter($__internal_f73e8c9ef461c0502c3ccd028e7e1970be466a9291fa990fb531451f5252657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:myProfileEnseignant.html.twig"));

        $__internal_62f19e58fa8ba09b15291386dc515c7534db547d0a5881ec4d78bc0737be72fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f19e58fa8ba09b15291386dc515c7534db547d0a5881ec4d78bc0737be72fb->enter($__internal_62f19e58fa8ba09b15291386dc515c7534db547d0a5881ec4d78bc0737be72fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:myProfileEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73e8c9ef461c0502c3ccd028e7e1970be466a9291fa990fb531451f5252657f->leave($__internal_f73e8c9ef461c0502c3ccd028e7e1970be466a9291fa990fb531451f5252657f_prof);

        
        $__internal_62f19e58fa8ba09b15291386dc515c7534db547d0a5881ec4d78bc0737be72fb->leave($__internal_62f19e58fa8ba09b15291386dc515c7534db547d0a5881ec4d78bc0737be72fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69146bc56599e629d1d75d1698ddccc44867efc11a6e9254d538d9da18a50768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69146bc56599e629d1d75d1698ddccc44867efc11a6e9254d538d9da18a50768->enter($__internal_69146bc56599e629d1d75d1698ddccc44867efc11a6e9254d538d9da18a50768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_010e089cd82bd397e637d239b7ad40d49987327c04e0f7b0459b28b9b5b5db74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010e089cd82bd397e637d239b7ad40d49987327c04e0f7b0459b28b9b5b5db74->enter($__internal_010e089cd82bd397e637d239b7ad40d49987327c04e0f7b0459b28b9b5b5db74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Mon Profile ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t</ul>
\t
\t
";
        
        $__internal_010e089cd82bd397e637d239b7ad40d49987327c04e0f7b0459b28b9b5b5db74->leave($__internal_010e089cd82bd397e637d239b7ad40d49987327c04e0f7b0459b28b9b5b5db74_prof);

        
        $__internal_69146bc56599e629d1d75d1698ddccc44867efc11a6e9254d538d9da18a50768->leave($__internal_69146bc56599e629d1d75d1698ddccc44867efc11a6e9254d538d9da18a50768_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:myProfileEnseignant.html.twig";
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
<h1>Mon Profile {{app.user.nom}} {{app.user.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if app.user.photo %}{{ asset('uploads/photos/' ~ app.user.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{app.user.nom}}</li>
\t\t<li><b>prenom :</b>{{app.user.prenom}}</li>
\t\t<li><b>genre :</b>{{app.user.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{app.user.dateDeNaissance|date('Y-m-d')}} à {{app.user.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{app.user.adresse}}</li>
\t\t<li><b>code postal :</b>{{app.user.codePostal}}</li>
\t\t<li><b>telephone :</b>{{app.user.telephone}}</li>
\t\t<li><b>username :</b>{{app.user.username}}</li>
\t\t<li><b>email :</b>{{app.user.email}}</li>
\t\t<li><b>type :</b>{{app.user.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{app.user.lastLogin|date('Y-m-d')}}</li>
\t</ul>
\t
\t
{% endblock %}", ":enseignantsViews:myProfileEnseignant.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/enseignantsViews/myProfileEnseignant.html.twig");
    }
}
