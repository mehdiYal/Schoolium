<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9d9fbb93fdaa9652d38b93d53a010b743c354ca893d517f7804369f1ac288f5c extends Twig_Template
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
        $__internal_8a12bd72bdc304b511d1906033dcb34150883157ac364ebefeffef82fe17ae6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a12bd72bdc304b511d1906033dcb34150883157ac364ebefeffef82fe17ae6b->enter($__internal_8a12bd72bdc304b511d1906033dcb34150883157ac364ebefeffef82fe17ae6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e6ae845802854813c41a5b04ecb3de568eddb1a71ea9be073030018dfb8af703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ae845802854813c41a5b04ecb3de568eddb1a71ea9be073030018dfb8af703->enter($__internal_e6ae845802854813c41a5b04ecb3de568eddb1a71ea9be073030018dfb8af703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8a12bd72bdc304b511d1906033dcb34150883157ac364ebefeffef82fe17ae6b->leave($__internal_8a12bd72bdc304b511d1906033dcb34150883157ac364ebefeffef82fe17ae6b_prof);

        
        $__internal_e6ae845802854813c41a5b04ecb3de568eddb1a71ea9be073030018dfb8af703->leave($__internal_e6ae845802854813c41a5b04ecb3de568eddb1a71ea9be073030018dfb8af703_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
