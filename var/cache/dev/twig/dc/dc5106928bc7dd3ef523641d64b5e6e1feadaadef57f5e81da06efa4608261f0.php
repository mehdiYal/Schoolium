<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_744f2313507b962d752049ae4bd059d5a381e69ed189d9931b9c563e3f212da9 extends Twig_Template
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
        $__internal_6da77fcbcc80870eee2f6f537fad761a1245313534131783ce45e28adc6ee2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da77fcbcc80870eee2f6f537fad761a1245313534131783ce45e28adc6ee2b3->enter($__internal_6da77fcbcc80870eee2f6f537fad761a1245313534131783ce45e28adc6ee2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c0f72c201ffc7c28d709fbd2ae78245e1df4afc717c3a16f29d3dba625e35101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f72c201ffc7c28d709fbd2ae78245e1df4afc717c3a16f29d3dba625e35101->enter($__internal_c0f72c201ffc7c28d709fbd2ae78245e1df4afc717c3a16f29d3dba625e35101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6da77fcbcc80870eee2f6f537fad761a1245313534131783ce45e28adc6ee2b3->leave($__internal_6da77fcbcc80870eee2f6f537fad761a1245313534131783ce45e28adc6ee2b3_prof);

        
        $__internal_c0f72c201ffc7c28d709fbd2ae78245e1df4afc717c3a16f29d3dba625e35101->leave($__internal_c0f72c201ffc7c28d709fbd2ae78245e1df4afc717c3a16f29d3dba625e35101_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
