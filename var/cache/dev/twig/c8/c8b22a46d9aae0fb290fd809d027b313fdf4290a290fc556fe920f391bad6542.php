<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2896fb6340893bf90e74ad4eadf6fc12d77a22bae9535200bb2badda00f4e824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2896fb6340893bf90e74ad4eadf6fc12d77a22bae9535200bb2badda00f4e824->enter($__internal_2896fb6340893bf90e74ad4eadf6fc12d77a22bae9535200bb2badda00f4e824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_df0eeb29c002f142a9dfbc38b2075bc87ab4bcb88228467d2c292822be3b08cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0eeb29c002f142a9dfbc38b2075bc87ab4bcb88228467d2c292822be3b08cd->enter($__internal_df0eeb29c002f142a9dfbc38b2075bc87ab4bcb88228467d2c292822be3b08cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()) == "ar")) {
            // line 10
            echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-flipped.css\">
        ";
        }
        // line 12
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Schoolium";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            echo "|";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array())), "html", null, true);
        }
        echo "</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">

                ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                    ";
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 32
                echo "                      ";
                $this->loadTemplate("adminsViews/admin.html.twig", "base.html.twig", 32)->display($context);
                // line 33
                echo "                    ";
            } elseif (twig_in_filter("ROLE_ENSEIGNANT", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 34
                echo "                      ";
                $this->loadTemplate("enseignantsViews/enseignant.html.twig", "base.html.twig", 34)->display($context);
                // line 35
                echo "                    ";
            } elseif (twig_in_filter("ROLE_ELEVE", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 36
                echo "                      ";
                $this->loadTemplate("elevesViews/eleve.html.twig", "base.html.twig", 36)->display($context);
                // line 37
                echo "                    ";
            } elseif (twig_in_filter("ROLE_PARENT", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 38
                echo "                      ";
                $this->loadTemplate("parentsViews/parent.html.twig", "base.html.twig", 38)->display($context);
                // line 39
                echo "                    ";
            } elseif (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 40
                echo "                      ";
                $this->loadTemplate("adminsViews/superAdmin.html.twig", "base.html.twig", 40)->display($context);
                // line 41
                echo "                    ";
            }
            // line 42
            echo "                    <li class=\"\"><a href=\"";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()) == "Admin")) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfileAdmin");
            } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()) == "Enseignant")) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfileEnseignant");
            } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()) == "Eleve")) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfileEleve");
            } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()) == "Parent")) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfileParental");
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link11"), "html", null, true);
            echo "<span class=\"sr-only\"></span></a></li>
                ";
        }
        // line 44
        echo "              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 46
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 47
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link12"), "html", null, true);
            echo "</a></li>
              ";
        } else {
            // line 49
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link13"), "html", null, true);
            echo "</a></li>
              ";
        }
        // line 51
        echo "              <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-globe\"></span> <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/francais.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                      <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "ar"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arab.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                  </ul>
                  </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        <script src=\"http://code.jquery.com/jquery-3.2.1.js\" integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "
    </body>
</html>
";
        
        $__internal_2896fb6340893bf90e74ad4eadf6fc12d77a22bae9535200bb2badda00f4e824->leave($__internal_2896fb6340893bf90e74ad4eadf6fc12d77a22bae9535200bb2badda00f4e824_prof);

        
        $__internal_df0eeb29c002f142a9dfbc38b2075bc87ab4bcb88228467d2c292822be3b08cd->leave($__internal_df0eeb29c002f142a9dfbc38b2075bc87ab4bcb88228467d2c292822be3b08cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_983a56841b47b787ebab69a2598c610cd4419c5fb82b8ad8ed1871699769a6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983a56841b47b787ebab69a2598c610cd4419c5fb82b8ad8ed1871699769a6c4->enter($__internal_983a56841b47b787ebab69a2598c610cd4419c5fb82b8ad8ed1871699769a6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53ff9f671838ec3afc64320ffc92879927e83271317ca6f58e0134d1ee602aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ff9f671838ec3afc64320ffc92879927e83271317ca6f58e0134d1ee602aeb->enter($__internal_53ff9f671838ec3afc64320ffc92879927e83271317ca6f58e0134d1ee602aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_53ff9f671838ec3afc64320ffc92879927e83271317ca6f58e0134d1ee602aeb->leave($__internal_53ff9f671838ec3afc64320ffc92879927e83271317ca6f58e0134d1ee602aeb_prof);

        
        $__internal_983a56841b47b787ebab69a2598c610cd4419c5fb82b8ad8ed1871699769a6c4->leave($__internal_983a56841b47b787ebab69a2598c610cd4419c5fb82b8ad8ed1871699769a6c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e3ed8a1a9cc3529b6ef25d3bf4985f67280db30385c6a53f561d4bf301dad19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3ed8a1a9cc3529b6ef25d3bf4985f67280db30385c6a53f561d4bf301dad19->enter($__internal_4e3ed8a1a9cc3529b6ef25d3bf4985f67280db30385c6a53f561d4bf301dad19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_851edea14e1c8843fae48e577d8df9a99fd712328963476b0d0d8a317440878a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851edea14e1c8843fae48e577d8df9a99fd712328963476b0d0d8a317440878a->enter($__internal_851edea14e1c8843fae48e577d8df9a99fd712328963476b0d0d8a317440878a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_851edea14e1c8843fae48e577d8df9a99fd712328963476b0d0d8a317440878a->leave($__internal_851edea14e1c8843fae48e577d8df9a99fd712328963476b0d0d8a317440878a_prof);

        
        $__internal_4e3ed8a1a9cc3529b6ef25d3bf4985f67280db30385c6a53f561d4bf301dad19->leave($__internal_4e3ed8a1a9cc3529b6ef25d3bf4985f67280db30385c6a53f561d4bf301dad19_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_f47184fa27658d62e36aaaf45dc50b46f4519b381517f05e3f16b06a2d417307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47184fa27658d62e36aaaf45dc50b46f4519b381517f05e3f16b06a2d417307->enter($__internal_f47184fa27658d62e36aaaf45dc50b46f4519b381517f05e3f16b06a2d417307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37147cf8109a0d62605de4584d889b437a4e241ae7d7c12331df74ae2cf54f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37147cf8109a0d62605de4584d889b437a4e241ae7d7c12331df74ae2cf54f40->enter($__internal_37147cf8109a0d62605de4584d889b437a4e241ae7d7c12331df74ae2cf54f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37147cf8109a0d62605de4584d889b437a4e241ae7d7c12331df74ae2cf54f40->leave($__internal_37147cf8109a0d62605de4584d889b437a4e241ae7d7c12331df74ae2cf54f40_prof);

        
        $__internal_f47184fa27658d62e36aaaf45dc50b46f4519b381517f05e3f16b06a2d417307->leave($__internal_f47184fa27658d62e36aaaf45dc50b46f4519b381517f05e3f16b06a2d417307_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85489272884b80d6856f3c520a8eea52f54e134d8eda26dabfb3aa85749ac547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85489272884b80d6856f3c520a8eea52f54e134d8eda26dabfb3aa85749ac547->enter($__internal_85489272884b80d6856f3c520a8eea52f54e134d8eda26dabfb3aa85749ac547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38e50895f0d033bf8b7775cc9ea6e809cf5fc82b4496ebc4e49db77d6a53ffda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e50895f0d033bf8b7775cc9ea6e809cf5fc82b4496ebc4e49db77d6a53ffda->enter($__internal_38e50895f0d033bf8b7775cc9ea6e809cf5fc82b4496ebc4e49db77d6a53ffda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "        ";
        
        $__internal_38e50895f0d033bf8b7775cc9ea6e809cf5fc82b4496ebc4e49db77d6a53ffda->leave($__internal_38e50895f0d033bf8b7775cc9ea6e809cf5fc82b4496ebc4e49db77d6a53ffda_prof);

        
        $__internal_85489272884b80d6856f3c520a8eea52f54e134d8eda26dabfb3aa85749ac547->leave($__internal_85489272884b80d6856f3c520a8eea52f54e134d8eda26dabfb3aa85749ac547_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 66,  250 => 65,  233 => 62,  216 => 6,  198 => 5,  185 => 67,  183 => 65,  179 => 63,  177 => 62,  165 => 55,  159 => 54,  154 => 51,  146 => 49,  138 => 47,  136 => 46,  132 => 44,  116 => 42,  113 => 41,  110 => 40,  107 => 39,  104 => 38,  101 => 37,  98 => 36,  95 => 35,  92 => 34,  89 => 33,  86 => 32,  83 => 31,  81 => 30,  67 => 24,  53 => 12,  49 => 10,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        {% if (app.request.locale == 'ar') %}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-flipped.css\">
        {% endif %}
    </head>
    <body>
        <nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Schoolium{% if app.user %}|{{app.user.typeUser|upper}}{% endif %}</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">

                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    {% if 'ROLE_ADMIN' in app.user.roles %}
                      {% include('adminsViews/admin.html.twig') %}
                    {% elseif 'ROLE_ENSEIGNANT' in app.user.roles %}
                      {% include('enseignantsViews/enseignant.html.twig') %}
                    {% elseif 'ROLE_ELEVE' in app.user.roles %}
                      {% include('elevesViews/eleve.html.twig') %}
                    {% elseif 'ROLE_PARENT' in app.user.roles %}
                      {% include('parentsViews/parent.html.twig') %}
                    {% elseif 'ROLE_SUPER_ADMIN' in app.user.roles %}
                      {% include('adminsViews/superAdmin.html.twig') %}
                    {% endif %}
                    <li class=\"\"><a href=\"{% if app.user.typeUser == 'Admin' %}{{ path('myProfileAdmin') }}{% elseif app.user.typeUser == 'Enseignant' %}{{ path('myProfileEnseignant') }}{% elseif app.user.typeUser == 'Eleve' %}{{ path('myProfileEleve') }}{% elseif app.user.typeUser == 'Parent' %}{{ path('myProfileParental') }}{% endif %}\">{{'navbar.link.link11'|trans}}<span class=\"sr-only\"></span></a></li>
                {% endif %}
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
              {% if app.user %}
                <li><a href=\"{{ path('fos_user_security_logout') }}\">{{'navbar.link.link12'|trans}}</a></li>
              {% else %}
                <li><a href=\"{{ path('fos_user_security_login') }}\">{{'navbar.link.link13'|trans}}</a></li>
              {% endif %}
              <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-globe\"></span> <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\"><img src=\"{{asset('img/francais.png')}}\" alt=\"\"></a></li>
                      <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'ar'})) }}\"><img src=\"{{asset('img/arab.png')}}\" alt=\"\"></a></li>
                  </ul>
                  </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        {% block body %}{% endblock %}
        <script src=\"http://code.jquery.com/jquery-3.2.1.js\" integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/base.html.twig");
    }
}
