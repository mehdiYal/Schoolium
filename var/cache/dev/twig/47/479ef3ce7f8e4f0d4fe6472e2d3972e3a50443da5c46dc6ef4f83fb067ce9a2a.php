<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6d94d2e562f7e937a6f19d696829c33c592349e7e43f9b6b95bc946f3e2cb83e extends Twig_Template
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
        $__internal_f6cb9227f4355d5ceaa99b7e87c98a7a61319fabaf5276295865b48fcdbebfdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cb9227f4355d5ceaa99b7e87c98a7a61319fabaf5276295865b48fcdbebfdd->enter($__internal_f6cb9227f4355d5ceaa99b7e87c98a7a61319fabaf5276295865b48fcdbebfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2d8c020f70e1f25395f9bcfc61ab3ec08d4cd0ef430bf6f160228f926540cfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8c020f70e1f25395f9bcfc61ab3ec08d4cd0ef430bf6f160228f926540cfa4->enter($__internal_2d8c020f70e1f25395f9bcfc61ab3ec08d4cd0ef430bf6f160228f926540cfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f6cb9227f4355d5ceaa99b7e87c98a7a61319fabaf5276295865b48fcdbebfdd->leave($__internal_f6cb9227f4355d5ceaa99b7e87c98a7a61319fabaf5276295865b48fcdbebfdd_prof);

        
        $__internal_2d8c020f70e1f25395f9bcfc61ab3ec08d4cd0ef430bf6f160228f926540cfa4->leave($__internal_2d8c020f70e1f25395f9bcfc61ab3ec08d4cd0ef430bf6f160228f926540cfa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
