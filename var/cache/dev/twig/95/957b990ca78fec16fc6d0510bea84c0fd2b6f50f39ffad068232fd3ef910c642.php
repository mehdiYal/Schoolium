<?php

/* @FOSUser/Group/edit_content.html.twig */
class __TwigTemplate_6e56817e791decbad70a698618612f4fb835c83cf3c32ba8e241eb1ec5334daf extends Twig_Template
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
        $__internal_b4a5e2fcdaf4810651efe3ddf68155963d1fa462ff444402e53cb1d4fe045df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a5e2fcdaf4810651efe3ddf68155963d1fa462ff444402e53cb1d4fe045df5->enter($__internal_b4a5e2fcdaf4810651efe3ddf68155963d1fa462ff444402e53cb1d4fe045df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        $__internal_80ae43bcd3e4f876532b64914eee138ed4f7043709a57e5e384b729da3f686a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ae43bcd3e4f876532b64914eee138ed4f7043709a57e5e384b729da3f686a3->enter($__internal_80ae43bcd3e4f876532b64914eee138ed4f7043709a57e5e384b729da3f686a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => ($context["group_name"] ?? $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b4a5e2fcdaf4810651efe3ddf68155963d1fa462ff444402e53cb1d4fe045df5->leave($__internal_b4a5e2fcdaf4810651efe3ddf68155963d1fa462ff444402e53cb1d4fe045df5_prof);

        
        $__internal_80ae43bcd3e4f876532b64914eee138ed4f7043709a57e5e384b729da3f686a3->leave($__internal_80ae43bcd3e4f876532b64914eee138ed4f7043709a57e5e384b729da3f686a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/edit_content.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\edit_content.html.twig");
    }
}
