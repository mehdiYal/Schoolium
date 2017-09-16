<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_802bf546f4268de2b3080d28dca985e16fc262dbe7cf433e3e3639472b8abd12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22cd3c42e1db0b0319969a89525c2a31e0ec88ee77d8cb994eaa051ea46a4baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22cd3c42e1db0b0319969a89525c2a31e0ec88ee77d8cb994eaa051ea46a4baf->enter($__internal_22cd3c42e1db0b0319969a89525c2a31e0ec88ee77d8cb994eaa051ea46a4baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_9e3a134abcc294ac6b8d396a8226207408cc93cde5fca98fdd388b582612751a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3a134abcc294ac6b8d396a8226207408cc93cde5fca98fdd388b582612751a->enter($__internal_9e3a134abcc294ac6b8d396a8226207408cc93cde5fca98fdd388b582612751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_22cd3c42e1db0b0319969a89525c2a31e0ec88ee77d8cb994eaa051ea46a4baf->leave($__internal_22cd3c42e1db0b0319969a89525c2a31e0ec88ee77d8cb994eaa051ea46a4baf_prof);

        
        $__internal_9e3a134abcc294ac6b8d396a8226207408cc93cde5fca98fdd388b582612751a->leave($__internal_9e3a134abcc294ac6b8d396a8226207408cc93cde5fca98fdd388b582612751a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3e35b4bacb69640be02e57a976ae6f913baadf6aee578ab2afb2ba349ef5d193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e35b4bacb69640be02e57a976ae6f913baadf6aee578ab2afb2ba349ef5d193->enter($__internal_3e35b4bacb69640be02e57a976ae6f913baadf6aee578ab2afb2ba349ef5d193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9480f6dbd4427a7303456d11611c2677bac56817ae0c9c34f6c113a1cc2b3436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9480f6dbd4427a7303456d11611c2677bac56817ae0c9c34f6c113a1cc2b3436->enter($__internal_9480f6dbd4427a7303456d11611c2677bac56817ae0c9c34f6c113a1cc2b3436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_9480f6dbd4427a7303456d11611c2677bac56817ae0c9c34f6c113a1cc2b3436->leave($__internal_9480f6dbd4427a7303456d11611c2677bac56817ae0c9c34f6c113a1cc2b3436_prof);

        
        $__internal_3e35b4bacb69640be02e57a976ae6f913baadf6aee578ab2afb2ba349ef5d193->leave($__internal_3e35b4bacb69640be02e57a976ae6f913baadf6aee578ab2afb2ba349ef5d193_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f74811edf2cdda699bc94641a4c9542a5bb2b164c80aeb2d065a018783f3027a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74811edf2cdda699bc94641a4c9542a5bb2b164c80aeb2d065a018783f3027a->enter($__internal_f74811edf2cdda699bc94641a4c9542a5bb2b164c80aeb2d065a018783f3027a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ed4e3622292b1e3cf77a4738253e54e2ecb9453a8f0a35b3fb996ee813740533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4e3622292b1e3cf77a4738253e54e2ecb9453a8f0a35b3fb996ee813740533->enter($__internal_ed4e3622292b1e3cf77a4738253e54e2ecb9453a8f0a35b3fb996ee813740533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ed4e3622292b1e3cf77a4738253e54e2ecb9453a8f0a35b3fb996ee813740533->leave($__internal_ed4e3622292b1e3cf77a4738253e54e2ecb9453a8f0a35b3fb996ee813740533_prof);

        
        $__internal_f74811edf2cdda699bc94641a4c9542a5bb2b164c80aeb2d065a018783f3027a->leave($__internal_f74811edf2cdda699bc94641a4c9542a5bb2b164c80aeb2d065a018783f3027a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7287df92657605d0139d03528bd62d3859cad744eb8b51af2eb68bd3b828d24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7287df92657605d0139d03528bd62d3859cad744eb8b51af2eb68bd3b828d24a->enter($__internal_7287df92657605d0139d03528bd62d3859cad744eb8b51af2eb68bd3b828d24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cf832752239c5580b371e29d638b7e382817babf0e89c15139eae099a1e02652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf832752239c5580b371e29d638b7e382817babf0e89c15139eae099a1e02652->enter($__internal_cf832752239c5580b371e29d638b7e382817babf0e89c15139eae099a1e02652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cf832752239c5580b371e29d638b7e382817babf0e89c15139eae099a1e02652->leave($__internal_cf832752239c5580b371e29d638b7e382817babf0e89c15139eae099a1e02652_prof);

        
        $__internal_7287df92657605d0139d03528bd62d3859cad744eb8b51af2eb68bd3b828d24a->leave($__internal_7287df92657605d0139d03528bd62d3859cad744eb8b51af2eb68bd3b828d24a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
