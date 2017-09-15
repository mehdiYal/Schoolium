<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3d5e943cc8f8fed9d099f1bc78b4627410a2d022699f6b6f147ae1065ccb6f2f extends Twig_Template
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
        $__internal_ae6608aee15323360f61146369ea4969c235fa5b440642aedcfeb5c539d1c355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6608aee15323360f61146369ea4969c235fa5b440642aedcfeb5c539d1c355->enter($__internal_ae6608aee15323360f61146369ea4969c235fa5b440642aedcfeb5c539d1c355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b25846b117a5070f484d06fc62796f41eea73275c5d9329922ac804b37c9665b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25846b117a5070f484d06fc62796f41eea73275c5d9329922ac804b37c9665b->enter($__internal_b25846b117a5070f484d06fc62796f41eea73275c5d9329922ac804b37c9665b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ae6608aee15323360f61146369ea4969c235fa5b440642aedcfeb5c539d1c355->leave($__internal_ae6608aee15323360f61146369ea4969c235fa5b440642aedcfeb5c539d1c355_prof);

        
        $__internal_b25846b117a5070f484d06fc62796f41eea73275c5d9329922ac804b37c9665b->leave($__internal_b25846b117a5070f484d06fc62796f41eea73275c5d9329922ac804b37c9665b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
