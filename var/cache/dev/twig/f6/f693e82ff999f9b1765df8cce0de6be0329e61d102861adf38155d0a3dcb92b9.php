<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_86b3c3e5f84ec3de242ddf571da0e436409615138873e0ffc3077f9dd18f0ed5 extends Twig_Template
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
        $__internal_51d04cd5f7b56bbe570401f90bf3a0d120802bdaa4772e1163a19fc6c2e03a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d04cd5f7b56bbe570401f90bf3a0d120802bdaa4772e1163a19fc6c2e03a54->enter($__internal_51d04cd5f7b56bbe570401f90bf3a0d120802bdaa4772e1163a19fc6c2e03a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7a36608813f4329ed7b87dabdc40f596aca8905fa9c648bfd26fe39f8f1390c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a36608813f4329ed7b87dabdc40f596aca8905fa9c648bfd26fe39f8f1390c4->enter($__internal_7a36608813f4329ed7b87dabdc40f596aca8905fa9c648bfd26fe39f8f1390c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_51d04cd5f7b56bbe570401f90bf3a0d120802bdaa4772e1163a19fc6c2e03a54->leave($__internal_51d04cd5f7b56bbe570401f90bf3a0d120802bdaa4772e1163a19fc6c2e03a54_prof);

        
        $__internal_7a36608813f4329ed7b87dabdc40f596aca8905fa9c648bfd26fe39f8f1390c4->leave($__internal_7a36608813f4329ed7b87dabdc40f596aca8905fa9c648bfd26fe39f8f1390c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
