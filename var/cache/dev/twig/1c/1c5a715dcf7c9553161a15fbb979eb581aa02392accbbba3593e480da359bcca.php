<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_5ab903d2ed46b8e66e0508e580195b650add5419b40af9a721f11e26e6ff19d3 extends Twig_Template
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
        $__internal_22388c62b0de5278a286b4a197eeaadfcf4d70cefd4e3ff398a241b046899e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22388c62b0de5278a286b4a197eeaadfcf4d70cefd4e3ff398a241b046899e5b->enter($__internal_22388c62b0de5278a286b4a197eeaadfcf4d70cefd4e3ff398a241b046899e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_748b15dc8a0e5fa0f0c9b550100e3485e35898598037c2cc9a5552cf2f1eaa80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748b15dc8a0e5fa0f0c9b550100e3485e35898598037c2cc9a5552cf2f1eaa80->enter($__internal_748b15dc8a0e5fa0f0c9b550100e3485e35898598037c2cc9a5552cf2f1eaa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_22388c62b0de5278a286b4a197eeaadfcf4d70cefd4e3ff398a241b046899e5b->leave($__internal_22388c62b0de5278a286b4a197eeaadfcf4d70cefd4e3ff398a241b046899e5b_prof);

        
        $__internal_748b15dc8a0e5fa0f0c9b550100e3485e35898598037c2cc9a5552cf2f1eaa80->leave($__internal_748b15dc8a0e5fa0f0c9b550100e3485e35898598037c2cc9a5552cf2f1eaa80_prof);

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
", "@Framework/Form/widget_attributes.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
