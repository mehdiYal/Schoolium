<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_6db40767930bf2573fa9a57ecc1725e60b5b68a03414260f99af32b3e684833e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c97c039bcf5bdd13e45a088657f1b91d042b07df62a6924e51288ff33fe12f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97c039bcf5bdd13e45a088657f1b91d042b07df62a6924e51288ff33fe12f53->enter($__internal_c97c039bcf5bdd13e45a088657f1b91d042b07df62a6924e51288ff33fe12f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_b94651870b912c55f51a5bc5d5b9b36538a7ab2caccab0a23f58c6b623e67745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94651870b912c55f51a5bc5d5b9b36538a7ab2caccab0a23f58c6b623e67745->enter($__internal_b94651870b912c55f51a5bc5d5b9b36538a7ab2caccab0a23f58c6b623e67745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div class=\"container\">
<h1>Connexion</h1>
<div class=\"container\">
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 10
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 11
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 13
        echo "
    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
</div>
</div>
";
        
        $__internal_c97c039bcf5bdd13e45a088657f1b91d042b07df62a6924e51288ff33fe12f53->leave($__internal_c97c039bcf5bdd13e45a088657f1b91d042b07df62a6924e51288ff33fe12f53_prof);

        
        $__internal_b94651870b912c55f51a5bc5d5b9b36538a7ab2caccab0a23f58c6b623e67745->leave($__internal_b94651870b912c55f51a5bc5d5b9b36538a7ab2caccab0a23f58c6b623e67745_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  72 => 21,  65 => 17,  60 => 15,  56 => 14,  53 => 13,  47 => 11,  45 => 10,  41 => 9,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"container\">
<h1>Connexion</h1>
<div class=\"container\">
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>
</div>
</div>
", "@FOSUser/Security/login_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
