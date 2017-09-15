<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
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
        $__internal_89ab0cb200e45fa8049c995aaad92c4f5ee3e3d401bda6405a792c13f6b5fcc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ab0cb200e45fa8049c995aaad92c4f5ee3e3d401bda6405a792c13f6b5fcc1->enter($__internal_89ab0cb200e45fa8049c995aaad92c4f5ee3e3d401bda6405a792c13f6b5fcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9ab0817bbf2cda96b322d1caae2d49416679371806e339356931a5aa058f46b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab0817bbf2cda96b322d1caae2d49416679371806e339356931a5aa058f46b6->enter($__internal_9ab0817bbf2cda96b322d1caae2d49416679371806e339356931a5aa058f46b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 29
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 30
            echo "                    ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()) == "Admin")) {
                // line 31
                echo "                      ";
                $this->loadTemplate("adminsViews/admin.html.twig", "base.html.twig", 31)->display($context);
                // line 32
                echo "                    ";
            } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()) == "Enseignant")) {
                // line 33
                echo "                      ";
                $this->loadTemplate("enseignantsViews/enseignant.html.twig", "base.html.twig", 33)->display($context);
                // line 34
                echo "                    ";
            } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()) == "Eleve")) {
                // line 35
                echo "                      ";
                $this->loadTemplate("elevesViews/eleve.html.twig", "base.html.twig", 35)->display($context);
                // line 36
                echo "                    ";
            } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()) == "Parent")) {
                // line 37
                echo "                      ";
                $this->loadTemplate("parentsViews/parent.html.twig", "base.html.twig", 37)->display($context);
                // line 38
                echo "                    ";
            } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()) == "SuperAdmin")) {
                // line 39
                echo "                      ";
                $this->loadTemplate("adminsViews/superAdmin.html.twig", "base.html.twig", 39)->display($context);
                // line 40
                echo "                    ";
            }
            // line 41
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
        // line 43
        echo "              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 45
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 46
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link12"), "html", null, true);
            echo "</a></li>
              ";
        } else {
            // line 48
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link13"), "html", null, true);
            echo "</a></li>
              ";
        }
        // line 50
        echo "              <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-globe\"></span> <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/francais.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                      <li><a href=\"";
        // line 54
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
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "        <script src=\"http://code.jquery.com/jquery-3.2.1.js\" integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
    </body>
</html>
";
        
        $__internal_89ab0cb200e45fa8049c995aaad92c4f5ee3e3d401bda6405a792c13f6b5fcc1->leave($__internal_89ab0cb200e45fa8049c995aaad92c4f5ee3e3d401bda6405a792c13f6b5fcc1_prof);

        
        $__internal_9ab0817bbf2cda96b322d1caae2d49416679371806e339356931a5aa058f46b6->leave($__internal_9ab0817bbf2cda96b322d1caae2d49416679371806e339356931a5aa058f46b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f70182e8d527ead70ced6761311e7a55b79aeac5b7c4c049f75119168608e26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70182e8d527ead70ced6761311e7a55b79aeac5b7c4c049f75119168608e26d->enter($__internal_f70182e8d527ead70ced6761311e7a55b79aeac5b7c4c049f75119168608e26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_598b33cf6157b87a83acb29230fda8efeeb4c9198a473627980efe1da4ba6be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598b33cf6157b87a83acb29230fda8efeeb4c9198a473627980efe1da4ba6be5->enter($__internal_598b33cf6157b87a83acb29230fda8efeeb4c9198a473627980efe1da4ba6be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_598b33cf6157b87a83acb29230fda8efeeb4c9198a473627980efe1da4ba6be5->leave($__internal_598b33cf6157b87a83acb29230fda8efeeb4c9198a473627980efe1da4ba6be5_prof);

        
        $__internal_f70182e8d527ead70ced6761311e7a55b79aeac5b7c4c049f75119168608e26d->leave($__internal_f70182e8d527ead70ced6761311e7a55b79aeac5b7c4c049f75119168608e26d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05689166d89d4f0c540861dfcd2020c07096b091ef69c2939000e42532e10e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05689166d89d4f0c540861dfcd2020c07096b091ef69c2939000e42532e10e32->enter($__internal_05689166d89d4f0c540861dfcd2020c07096b091ef69c2939000e42532e10e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da7a50a7f770221e0b59cb5cd4774dfb960122fd435d842924cd578d2b711cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7a50a7f770221e0b59cb5cd4774dfb960122fd435d842924cd578d2b711cc1->enter($__internal_da7a50a7f770221e0b59cb5cd4774dfb960122fd435d842924cd578d2b711cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da7a50a7f770221e0b59cb5cd4774dfb960122fd435d842924cd578d2b711cc1->leave($__internal_da7a50a7f770221e0b59cb5cd4774dfb960122fd435d842924cd578d2b711cc1_prof);

        
        $__internal_05689166d89d4f0c540861dfcd2020c07096b091ef69c2939000e42532e10e32->leave($__internal_05689166d89d4f0c540861dfcd2020c07096b091ef69c2939000e42532e10e32_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c0a419e415d1cbd77d7e7af4a54d60eba537d93707fb56ae63946bade902fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0a419e415d1cbd77d7e7af4a54d60eba537d93707fb56ae63946bade902fa6->enter($__internal_5c0a419e415d1cbd77d7e7af4a54d60eba537d93707fb56ae63946bade902fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a46041cf9242ed4433f374cba24f1f562b7e35e3d7fb8e20db1a8f469daef3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46041cf9242ed4433f374cba24f1f562b7e35e3d7fb8e20db1a8f469daef3cf->enter($__internal_a46041cf9242ed4433f374cba24f1f562b7e35e3d7fb8e20db1a8f469daef3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a46041cf9242ed4433f374cba24f1f562b7e35e3d7fb8e20db1a8f469daef3cf->leave($__internal_a46041cf9242ed4433f374cba24f1f562b7e35e3d7fb8e20db1a8f469daef3cf_prof);

        
        $__internal_5c0a419e415d1cbd77d7e7af4a54d60eba537d93707fb56ae63946bade902fa6->leave($__internal_5c0a419e415d1cbd77d7e7af4a54d60eba537d93707fb56ae63946bade902fa6_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81f37779f1117685cf98373ab6bafb5bf6c961ccb192465c3defea1e815780c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f37779f1117685cf98373ab6bafb5bf6c961ccb192465c3defea1e815780c7->enter($__internal_81f37779f1117685cf98373ab6bafb5bf6c961ccb192465c3defea1e815780c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0afd50586134c34852ff0a487f21cbeb000fdde089f1492517527b97649dd3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afd50586134c34852ff0a487f21cbeb000fdde089f1492517527b97649dd3a6->enter($__internal_0afd50586134c34852ff0a487f21cbeb000fdde089f1492517527b97649dd3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "        ";
        
        $__internal_0afd50586134c34852ff0a487f21cbeb000fdde089f1492517527b97649dd3a6->leave($__internal_0afd50586134c34852ff0a487f21cbeb000fdde089f1492517527b97649dd3a6_prof);

        
        $__internal_81f37779f1117685cf98373ab6bafb5bf6c961ccb192465c3defea1e815780c7->leave($__internal_81f37779f1117685cf98373ab6bafb5bf6c961ccb192465c3defea1e815780c7_prof);

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
        return array (  258 => 65,  249 => 64,  232 => 61,  215 => 6,  197 => 5,  184 => 66,  182 => 64,  178 => 62,  176 => 61,  164 => 54,  158 => 53,  153 => 50,  145 => 48,  137 => 46,  135 => 45,  131 => 43,  115 => 41,  112 => 40,  109 => 39,  106 => 38,  103 => 37,  100 => 36,  97 => 35,  94 => 34,  91 => 33,  88 => 32,  85 => 31,  82 => 30,  80 => 29,  67 => 24,  53 => 12,  49 => 10,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                {% if app.user %}
                    {% if app.user.typeUser == 'Admin' %}
                      {% include('adminsViews/admin.html.twig') %}
                    {% elseif app.user.typeUser == 'Enseignant' %}
                      {% include('enseignantsViews/enseignant.html.twig') %}
                    {% elseif app.user.typeUser == 'Eleve' %}
                      {% include('elevesViews/eleve.html.twig') %}
                    {% elseif app.user.typeUser == 'Parent' %}
                      {% include('parentsViews/parent.html.twig') %}
                    {% elseif app.user.typeUser == 'SuperAdmin' %}
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
", "base.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
