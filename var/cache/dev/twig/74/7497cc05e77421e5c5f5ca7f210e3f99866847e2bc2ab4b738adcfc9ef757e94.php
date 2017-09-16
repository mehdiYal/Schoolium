<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_b2c980b809a6b329df0b4dafaf8b8e38d404b763563a567035a535fe0449600f extends Twig_Template
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
        $__internal_73e52374cb445275620784680c61aef0f471cbd22ed840dca4f9f12cfc965ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e52374cb445275620784680c61aef0f471cbd22ed840dca4f9f12cfc965ce4->enter($__internal_73e52374cb445275620784680c61aef0f471cbd22ed840dca4f9f12cfc965ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_6d5a2f403e6973cf782e63133ddad3cc9edcb81e58d6e3dff5a2e39c06a6487d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5a2f403e6973cf782e63133ddad3cc9edcb81e58d6e3dff5a2e39c06a6487d->enter($__internal_6d5a2f403e6973cf782e63133ddad3cc9edcb81e58d6e3dff5a2e39c06a6487d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_73e52374cb445275620784680c61aef0f471cbd22ed840dca4f9f12cfc965ce4->leave($__internal_73e52374cb445275620784680c61aef0f471cbd22ed840dca4f9f12cfc965ce4_prof);

        
        $__internal_6d5a2f403e6973cf782e63133ddad3cc9edcb81e58d6e3dff5a2e39c06a6487d->leave($__internal_6d5a2f403e6973cf782e63133ddad3cc9edcb81e58d6e3dff5a2e39c06a6487d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
