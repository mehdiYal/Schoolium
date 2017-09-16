<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_a857982497e136c62c915e05c5d572e857529933f775bb7140deb71c1c6cd3df extends Twig_Template
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
        $__internal_f4db6c35f74e33de4eab1b4a5ae18c206cb3460ab16a3f228016db9f79cf43e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4db6c35f74e33de4eab1b4a5ae18c206cb3460ab16a3f228016db9f79cf43e0->enter($__internal_f4db6c35f74e33de4eab1b4a5ae18c206cb3460ab16a3f228016db9f79cf43e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_70fec5fad9b80f2afb4126c72e9e4180e0b9d2e05e81685a86b689520f597ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fec5fad9b80f2afb4126c72e9e4180e0b9d2e05e81685a86b689520f597ac1->enter($__internal_70fec5fad9b80f2afb4126c72e9e4180e0b9d2e05e81685a86b689520f597ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f4db6c35f74e33de4eab1b4a5ae18c206cb3460ab16a3f228016db9f79cf43e0->leave($__internal_f4db6c35f74e33de4eab1b4a5ae18c206cb3460ab16a3f228016db9f79cf43e0_prof);

        
        $__internal_70fec5fad9b80f2afb4126c72e9e4180e0b9d2e05e81685a86b689520f597ac1->leave($__internal_70fec5fad9b80f2afb4126c72e9e4180e0b9d2e05e81685a86b689520f597ac1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
