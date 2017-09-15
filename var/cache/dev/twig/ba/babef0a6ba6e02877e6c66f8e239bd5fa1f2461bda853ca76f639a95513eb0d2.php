<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_918c318b42fde38fa27073d87367b06668bd55a23e015b73b6b96071622f6069 extends Twig_Template
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
        $__internal_5ab875150db35de90ebe70c121d3063bf9c793dcf2a2b4cefdee3b3017ec4fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab875150db35de90ebe70c121d3063bf9c793dcf2a2b4cefdee3b3017ec4fe6->enter($__internal_5ab875150db35de90ebe70c121d3063bf9c793dcf2a2b4cefdee3b3017ec4fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_97db55ca4b4e6e3fba7f74535b66d98cb08bf01721de00f684df25418467e7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97db55ca4b4e6e3fba7f74535b66d98cb08bf01721de00f684df25418467e7c2->enter($__internal_97db55ca4b4e6e3fba7f74535b66d98cb08bf01721de00f684df25418467e7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5ab875150db35de90ebe70c121d3063bf9c793dcf2a2b4cefdee3b3017ec4fe6->leave($__internal_5ab875150db35de90ebe70c121d3063bf9c793dcf2a2b4cefdee3b3017ec4fe6_prof);

        
        $__internal_97db55ca4b4e6e3fba7f74535b66d98cb08bf01721de00f684df25418467e7c2->leave($__internal_97db55ca4b4e6e3fba7f74535b66d98cb08bf01721de00f684df25418467e7c2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b95ce19ff2a514c73a5edd7902bb676405039f6682c8326d7e1259e16c100987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95ce19ff2a514c73a5edd7902bb676405039f6682c8326d7e1259e16c100987->enter($__internal_b95ce19ff2a514c73a5edd7902bb676405039f6682c8326d7e1259e16c100987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_05a91f89522cdd351ae9ef99bdf65f072733b716bb5bc61c35a0f9f7a511917e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a91f89522cdd351ae9ef99bdf65f072733b716bb5bc61c35a0f9f7a511917e->enter($__internal_05a91f89522cdd351ae9ef99bdf65f072733b716bb5bc61c35a0f9f7a511917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_05a91f89522cdd351ae9ef99bdf65f072733b716bb5bc61c35a0f9f7a511917e->leave($__internal_05a91f89522cdd351ae9ef99bdf65f072733b716bb5bc61c35a0f9f7a511917e_prof);

        
        $__internal_b95ce19ff2a514c73a5edd7902bb676405039f6682c8326d7e1259e16c100987->leave($__internal_b95ce19ff2a514c73a5edd7902bb676405039f6682c8326d7e1259e16c100987_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c1902a5790acf30b6fc82983d5362c69f985cff53a0950ba4354a5b57f29864b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1902a5790acf30b6fc82983d5362c69f985cff53a0950ba4354a5b57f29864b->enter($__internal_c1902a5790acf30b6fc82983d5362c69f985cff53a0950ba4354a5b57f29864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7e46917c0f8df63e6038c80c65d3abfbe8fe60f7f7458b20aa6a3f1f1ff55396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e46917c0f8df63e6038c80c65d3abfbe8fe60f7f7458b20aa6a3f1f1ff55396->enter($__internal_7e46917c0f8df63e6038c80c65d3abfbe8fe60f7f7458b20aa6a3f1f1ff55396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7e46917c0f8df63e6038c80c65d3abfbe8fe60f7f7458b20aa6a3f1f1ff55396->leave($__internal_7e46917c0f8df63e6038c80c65d3abfbe8fe60f7f7458b20aa6a3f1f1ff55396_prof);

        
        $__internal_c1902a5790acf30b6fc82983d5362c69f985cff53a0950ba4354a5b57f29864b->leave($__internal_c1902a5790acf30b6fc82983d5362c69f985cff53a0950ba4354a5b57f29864b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cdb5910d3d5d3ff39c97d3a80a70956ad9aec67a32ee71aed9e5e737326e76a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb5910d3d5d3ff39c97d3a80a70956ad9aec67a32ee71aed9e5e737326e76a1->enter($__internal_cdb5910d3d5d3ff39c97d3a80a70956ad9aec67a32ee71aed9e5e737326e76a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_54bf9878131c3f18180ca8049ef384c7f60e8bbff84892f37c422d10f94e4e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bf9878131c3f18180ca8049ef384c7f60e8bbff84892f37c422d10f94e4e4e->enter($__internal_54bf9878131c3f18180ca8049ef384c7f60e8bbff84892f37c422d10f94e4e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_54bf9878131c3f18180ca8049ef384c7f60e8bbff84892f37c422d10f94e4e4e->leave($__internal_54bf9878131c3f18180ca8049ef384c7f60e8bbff84892f37c422d10f94e4e4e_prof);

        
        $__internal_cdb5910d3d5d3ff39c97d3a80a70956ad9aec67a32ee71aed9e5e737326e76a1->leave($__internal_cdb5910d3d5d3ff39c97d3a80a70956ad9aec67a32ee71aed9e5e737326e76a1_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
