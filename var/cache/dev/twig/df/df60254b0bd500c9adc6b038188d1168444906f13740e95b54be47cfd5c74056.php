<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6a33d2204497760203374f3e3ceb2f4bb7e7014be1f46a22cd4a364cc1bfd96d extends Twig_Template
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
        $__internal_0f14d2b134cb475da8fd62e6d08f2b12fe3f9775abd9f0f1fb4bc717559f17e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f14d2b134cb475da8fd62e6d08f2b12fe3f9775abd9f0f1fb4bc717559f17e8->enter($__internal_0f14d2b134cb475da8fd62e6d08f2b12fe3f9775abd9f0f1fb4bc717559f17e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_444b5f6f72a5e2994781d368d688497304c485818c52f2694cbe23a5a2783061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444b5f6f72a5e2994781d368d688497304c485818c52f2694cbe23a5a2783061->enter($__internal_444b5f6f72a5e2994781d368d688497304c485818c52f2694cbe23a5a2783061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0f14d2b134cb475da8fd62e6d08f2b12fe3f9775abd9f0f1fb4bc717559f17e8->leave($__internal_0f14d2b134cb475da8fd62e6d08f2b12fe3f9775abd9f0f1fb4bc717559f17e8_prof);

        
        $__internal_444b5f6f72a5e2994781d368d688497304c485818c52f2694cbe23a5a2783061->leave($__internal_444b5f6f72a5e2994781d368d688497304c485818c52f2694cbe23a5a2783061_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
