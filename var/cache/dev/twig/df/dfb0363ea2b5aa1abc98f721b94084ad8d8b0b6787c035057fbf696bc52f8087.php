<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_713984917fdd4d9a349163b903ec4ce0a2f56963f87d974c830135b6be70d571 extends Twig_Template
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
        $__internal_19eae1786940505fe46f054bc30774044eaf7c0abf67ebcf75990adf562b0170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19eae1786940505fe46f054bc30774044eaf7c0abf67ebcf75990adf562b0170->enter($__internal_19eae1786940505fe46f054bc30774044eaf7c0abf67ebcf75990adf562b0170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_eeeaa156e3ad6fa2522cff86310b79c801ecf1d1e5133610d6f5d36ac5e9a20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeeaa156e3ad6fa2522cff86310b79c801ecf1d1e5133610d6f5d36ac5e9a20d->enter($__internal_eeeaa156e3ad6fa2522cff86310b79c801ecf1d1e5133610d6f5d36ac5e9a20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_19eae1786940505fe46f054bc30774044eaf7c0abf67ebcf75990adf562b0170->leave($__internal_19eae1786940505fe46f054bc30774044eaf7c0abf67ebcf75990adf562b0170_prof);

        
        $__internal_eeeaa156e3ad6fa2522cff86310b79c801ecf1d1e5133610d6f5d36ac5e9a20d->leave($__internal_eeeaa156e3ad6fa2522cff86310b79c801ecf1d1e5133610d6f5d36ac5e9a20d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
