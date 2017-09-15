<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7b1d2c5b49c16962cad41052fea34be7b55498728da807bb8af97ae522d4da5d extends Twig_Template
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
        $__internal_c37c629d5bfdd86a13ba0baaee5075798197ff6704f73c698331f6d7d50df529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37c629d5bfdd86a13ba0baaee5075798197ff6704f73c698331f6d7d50df529->enter($__internal_c37c629d5bfdd86a13ba0baaee5075798197ff6704f73c698331f6d7d50df529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_168b0f41ca97f2574e6b56dd9b50971fc03f7fb2a39d7f24c3e6d84f19a6c540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168b0f41ca97f2574e6b56dd9b50971fc03f7fb2a39d7f24c3e6d84f19a6c540->enter($__internal_168b0f41ca97f2574e6b56dd9b50971fc03f7fb2a39d7f24c3e6d84f19a6c540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c37c629d5bfdd86a13ba0baaee5075798197ff6704f73c698331f6d7d50df529->leave($__internal_c37c629d5bfdd86a13ba0baaee5075798197ff6704f73c698331f6d7d50df529_prof);

        
        $__internal_168b0f41ca97f2574e6b56dd9b50971fc03f7fb2a39d7f24c3e6d84f19a6c540->leave($__internal_168b0f41ca97f2574e6b56dd9b50971fc03f7fb2a39d7f24c3e6d84f19a6c540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
