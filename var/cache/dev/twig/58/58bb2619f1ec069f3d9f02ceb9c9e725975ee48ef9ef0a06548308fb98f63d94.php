<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_dc07abe9fd8a700564163bf6b544aa621a1cadfb29de2f7b85bbe5da47b87401 extends Twig_Template
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
        $__internal_f40db7e898c4590efb09f26b0a04a7ac5b415caf13b16f0a34593827414e84db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40db7e898c4590efb09f26b0a04a7ac5b415caf13b16f0a34593827414e84db->enter($__internal_f40db7e898c4590efb09f26b0a04a7ac5b415caf13b16f0a34593827414e84db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_157637a1a8cbc807b1455131fd89a5b06a77495457df7f48e7b4fb92d7bdaa5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157637a1a8cbc807b1455131fd89a5b06a77495457df7f48e7b4fb92d7bdaa5a->enter($__internal_157637a1a8cbc807b1455131fd89a5b06a77495457df7f48e7b4fb92d7bdaa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f40db7e898c4590efb09f26b0a04a7ac5b415caf13b16f0a34593827414e84db->leave($__internal_f40db7e898c4590efb09f26b0a04a7ac5b415caf13b16f0a34593827414e84db_prof);

        
        $__internal_157637a1a8cbc807b1455131fd89a5b06a77495457df7f48e7b4fb92d7bdaa5a->leave($__internal_157637a1a8cbc807b1455131fd89a5b06a77495457df7f48e7b4fb92d7bdaa5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
