<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7fe13cb93fd8f777c42d054b74a677a34834856be41e681d3bc7cfee122abe69 extends Twig_Template
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
        $__internal_3ad7b45ca3f156b33f32effa1a1473ee2b5970be1cad939355e337e51f0a27c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad7b45ca3f156b33f32effa1a1473ee2b5970be1cad939355e337e51f0a27c0->enter($__internal_3ad7b45ca3f156b33f32effa1a1473ee2b5970be1cad939355e337e51f0a27c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e64f1f266696dfcab6e8d073e3a0ff523970e26250f393086743c521bb44aa71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64f1f266696dfcab6e8d073e3a0ff523970e26250f393086743c521bb44aa71->enter($__internal_e64f1f266696dfcab6e8d073e3a0ff523970e26250f393086743c521bb44aa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3ad7b45ca3f156b33f32effa1a1473ee2b5970be1cad939355e337e51f0a27c0->leave($__internal_3ad7b45ca3f156b33f32effa1a1473ee2b5970be1cad939355e337e51f0a27c0_prof);

        
        $__internal_e64f1f266696dfcab6e8d073e3a0ff523970e26250f393086743c521bb44aa71->leave($__internal_e64f1f266696dfcab6e8d073e3a0ff523970e26250f393086743c521bb44aa71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
