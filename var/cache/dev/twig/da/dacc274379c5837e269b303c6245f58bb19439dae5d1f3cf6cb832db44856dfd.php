<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_31dd844eb093b73da61e315b6c11444d5183b33ab668bfa6357f586b78904800 extends Twig_Template
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
        $__internal_cb5849173ec7228178e15dd62c96503980f36fdab1f01afe31f9a03248ff20f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5849173ec7228178e15dd62c96503980f36fdab1f01afe31f9a03248ff20f5->enter($__internal_cb5849173ec7228178e15dd62c96503980f36fdab1f01afe31f9a03248ff20f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_33276b4739a397d359a3e6c79f137a9ed479411ea0933b5ee13fad61d66d12d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33276b4739a397d359a3e6c79f137a9ed479411ea0933b5ee13fad61d66d12d0->enter($__internal_33276b4739a397d359a3e6c79f137a9ed479411ea0933b5ee13fad61d66d12d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cb5849173ec7228178e15dd62c96503980f36fdab1f01afe31f9a03248ff20f5->leave($__internal_cb5849173ec7228178e15dd62c96503980f36fdab1f01afe31f9a03248ff20f5_prof);

        
        $__internal_33276b4739a397d359a3e6c79f137a9ed479411ea0933b5ee13fad61d66d12d0->leave($__internal_33276b4739a397d359a3e6c79f137a9ed479411ea0933b5ee13fad61d66d12d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
