<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_51546d6e615c10d79403b4ad2b027f6c4aad6c53332e991c62f936b3055b6be1 extends Twig_Template
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
        $__internal_71bd5b3e834aa3f013536aa90c1306ee8a522a4c58d52887d69e079808ce8281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71bd5b3e834aa3f013536aa90c1306ee8a522a4c58d52887d69e079808ce8281->enter($__internal_71bd5b3e834aa3f013536aa90c1306ee8a522a4c58d52887d69e079808ce8281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a4f59ad3e49cf2135bfd922835ebfaf87722f4cccd53067a455b7d242afecb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f59ad3e49cf2135bfd922835ebfaf87722f4cccd53067a455b7d242afecb03->enter($__internal_a4f59ad3e49cf2135bfd922835ebfaf87722f4cccd53067a455b7d242afecb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_71bd5b3e834aa3f013536aa90c1306ee8a522a4c58d52887d69e079808ce8281->leave($__internal_71bd5b3e834aa3f013536aa90c1306ee8a522a4c58d52887d69e079808ce8281_prof);

        
        $__internal_a4f59ad3e49cf2135bfd922835ebfaf87722f4cccd53067a455b7d242afecb03->leave($__internal_a4f59ad3e49cf2135bfd922835ebfaf87722f4cccd53067a455b7d242afecb03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
