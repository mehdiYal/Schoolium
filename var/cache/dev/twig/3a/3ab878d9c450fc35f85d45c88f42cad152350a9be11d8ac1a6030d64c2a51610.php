<?php

/* base.html.twig */
class __TwigTemplate_e3896824a4e50256d5691fe384d28f95c406a11740c322338a283a5eba4389a9 extends Twig_Template
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
        $__internal_1ffb5896e696bc10ba4f1f76b8943aca0fbb09c1fd366549622b05b10215d491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffb5896e696bc10ba4f1f76b8943aca0fbb09c1fd366549622b05b10215d491->enter($__internal_1ffb5896e696bc10ba4f1f76b8943aca0fbb09c1fd366549622b05b10215d491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ca68ebd610d746f1e081127e45357caa38171eb3119c0657dad8f03377b2fe94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca68ebd610d746f1e081127e45357caa38171eb3119c0657dad8f03377b2fe94->enter($__internal_ca68ebd610d746f1e081127e45357caa38171eb3119c0657dad8f03377b2fe94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        
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
              <a class=\"navbar-brand\" href=\"";
        // line 25
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
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 32
            echo "                    ";
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 33
                echo "                      ";
                $this->loadTemplate("adminsViews/admin.html.twig", "base.html.twig", 33)->display($context);
                // line 34
                echo "                    ";
            } elseif (twig_in_filter("ROLE_ENSEIGNANT", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 35
                echo "                      ";
                $this->loadTemplate("enseignantsViews/enseignant.html.twig", "base.html.twig", 35)->display($context);
                // line 36
                echo "                    ";
            } elseif (twig_in_filter("ROLE_ELEVE", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 37
                echo "                      ";
                $this->loadTemplate("elevesViews/eleve.html.twig", "base.html.twig", 37)->display($context);
                // line 38
                echo "                    ";
            } elseif (twig_in_filter("ROLE_PARENT", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 39
                echo "                      ";
                $this->loadTemplate("parentsViews/parent.html.twig", "base.html.twig", 39)->display($context);
                // line 40
                echo "                    ";
            } elseif (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 41
                echo "                      ";
                $this->loadTemplate("adminsViews/superAdmin.html.twig", "base.html.twig", 41)->display($context);
                // line 42
                echo "                    ";
            }
            // line 43
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
        // line 45
        echo "              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 47
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 48
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link12"), "html", null, true);
            echo "</a></li>
              ";
        } else {
            // line 50
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link13"), "html", null, true);
            echo "</a></li>
              ";
        }
        // line 52
        echo "              <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-globe\"></span> <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/francais.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                      <li><a href=\"";
        // line 56
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
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        <script src=\"http://code.jquery.com/jquery-3.2.1.js\" integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
    </body>
</html>
";
        
        $__internal_1ffb5896e696bc10ba4f1f76b8943aca0fbb09c1fd366549622b05b10215d491->leave($__internal_1ffb5896e696bc10ba4f1f76b8943aca0fbb09c1fd366549622b05b10215d491_prof);

        
        $__internal_ca68ebd610d746f1e081127e45357caa38171eb3119c0657dad8f03377b2fe94->leave($__internal_ca68ebd610d746f1e081127e45357caa38171eb3119c0657dad8f03377b2fe94_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44d3d28355541846846dc881018d93cefc4e1f8602b75e3bb16d9a7fd763ba71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d3d28355541846846dc881018d93cefc4e1f8602b75e3bb16d9a7fd763ba71->enter($__internal_44d3d28355541846846dc881018d93cefc4e1f8602b75e3bb16d9a7fd763ba71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b856bc14219fef84db2a8be03f608aa2ad9dcfc20fd481987aabf87aac49a026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b856bc14219fef84db2a8be03f608aa2ad9dcfc20fd481987aabf87aac49a026->enter($__internal_b856bc14219fef84db2a8be03f608aa2ad9dcfc20fd481987aabf87aac49a026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b856bc14219fef84db2a8be03f608aa2ad9dcfc20fd481987aabf87aac49a026->leave($__internal_b856bc14219fef84db2a8be03f608aa2ad9dcfc20fd481987aabf87aac49a026_prof);

        
        $__internal_44d3d28355541846846dc881018d93cefc4e1f8602b75e3bb16d9a7fd763ba71->leave($__internal_44d3d28355541846846dc881018d93cefc4e1f8602b75e3bb16d9a7fd763ba71_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ffcad06e420d0f6fded027364e1bec127891ee4c3e8e1c4e6c7132f4a34010c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcad06e420d0f6fded027364e1bec127891ee4c3e8e1c4e6c7132f4a34010c8->enter($__internal_ffcad06e420d0f6fded027364e1bec127891ee4c3e8e1c4e6c7132f4a34010c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3f4aaaf8f2dcddb6e50fec99ecca4b4dcad051f406ae32d3ee018696236d77e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4aaaf8f2dcddb6e50fec99ecca4b4dcad051f406ae32d3ee018696236d77e9->enter($__internal_3f4aaaf8f2dcddb6e50fec99ecca4b4dcad051f406ae32d3ee018696236d77e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3f4aaaf8f2dcddb6e50fec99ecca4b4dcad051f406ae32d3ee018696236d77e9->leave($__internal_3f4aaaf8f2dcddb6e50fec99ecca4b4dcad051f406ae32d3ee018696236d77e9_prof);

        
        $__internal_ffcad06e420d0f6fded027364e1bec127891ee4c3e8e1c4e6c7132f4a34010c8->leave($__internal_ffcad06e420d0f6fded027364e1bec127891ee4c3e8e1c4e6c7132f4a34010c8_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e7369399bde4f7bf1f249521f802ed516774db8848843a8664a008927675372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7369399bde4f7bf1f249521f802ed516774db8848843a8664a008927675372->enter($__internal_5e7369399bde4f7bf1f249521f802ed516774db8848843a8664a008927675372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c19f087daaf2320a77927f7fab13f6b6a40462ccab3f28b5a36584c970cc9dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19f087daaf2320a77927f7fab13f6b6a40462ccab3f28b5a36584c970cc9dad->enter($__internal_c19f087daaf2320a77927f7fab13f6b6a40462ccab3f28b5a36584c970cc9dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c19f087daaf2320a77927f7fab13f6b6a40462ccab3f28b5a36584c970cc9dad->leave($__internal_c19f087daaf2320a77927f7fab13f6b6a40462ccab3f28b5a36584c970cc9dad_prof);

        
        $__internal_5e7369399bde4f7bf1f249521f802ed516774db8848843a8664a008927675372->leave($__internal_5e7369399bde4f7bf1f249521f802ed516774db8848843a8664a008927675372_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a9b234c6dcb6253ca5f04ec1180715ca421b3ac8e18dd2e028abbf08685d706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9b234c6dcb6253ca5f04ec1180715ca421b3ac8e18dd2e028abbf08685d706->enter($__internal_7a9b234c6dcb6253ca5f04ec1180715ca421b3ac8e18dd2e028abbf08685d706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d6feda380cb5e5656431acc326124c4e127e744e3e80c8dc91c0130b5ddf12fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6feda380cb5e5656431acc326124c4e127e744e3e80c8dc91c0130b5ddf12fa->enter($__internal_d6feda380cb5e5656431acc326124c4e127e744e3e80c8dc91c0130b5ddf12fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "        ";
        
        $__internal_d6feda380cb5e5656431acc326124c4e127e744e3e80c8dc91c0130b5ddf12fa->leave($__internal_d6feda380cb5e5656431acc326124c4e127e744e3e80c8dc91c0130b5ddf12fa_prof);

        
        $__internal_7a9b234c6dcb6253ca5f04ec1180715ca421b3ac8e18dd2e028abbf08685d706->leave($__internal_7a9b234c6dcb6253ca5f04ec1180715ca421b3ac8e18dd2e028abbf08685d706_prof);

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
        return array (  260 => 67,  251 => 66,  234 => 63,  217 => 6,  199 => 5,  186 => 68,  184 => 66,  180 => 64,  178 => 63,  166 => 56,  160 => 55,  155 => 52,  147 => 50,  139 => 48,  137 => 47,  133 => 45,  117 => 43,  114 => 42,  111 => 41,  108 => 40,  105 => 39,  102 => 38,  99 => 37,  96 => 36,  93 => 35,  90 => 34,  87 => 33,  84 => 32,  82 => 31,  68 => 25,  53 => 12,  49 => 10,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
", "base.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\base.html.twig");
    }
}
