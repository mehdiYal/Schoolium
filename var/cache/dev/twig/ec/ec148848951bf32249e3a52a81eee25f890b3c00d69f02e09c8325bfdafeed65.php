<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4ed3b32a2c8f1e1cb568fdee9d3edf3099294f4695be017a3bbb6b97b328ba4e extends Twig_Template
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
        $__internal_dacc18f5775ed2254ef5c68e018c65b1aa5412a762050b5e4ecf0e73a8be723d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacc18f5775ed2254ef5c68e018c65b1aa5412a762050b5e4ecf0e73a8be723d->enter($__internal_dacc18f5775ed2254ef5c68e018c65b1aa5412a762050b5e4ecf0e73a8be723d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_18c704dc22785244b1f27e42a41007ea2767b7841f49910407fffb05598efd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c704dc22785244b1f27e42a41007ea2767b7841f49910407fffb05598efd2c->enter($__internal_18c704dc22785244b1f27e42a41007ea2767b7841f49910407fffb05598efd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_dacc18f5775ed2254ef5c68e018c65b1aa5412a762050b5e4ecf0e73a8be723d->leave($__internal_dacc18f5775ed2254ef5c68e018c65b1aa5412a762050b5e4ecf0e73a8be723d_prof);

        
        $__internal_18c704dc22785244b1f27e42a41007ea2767b7841f49910407fffb05598efd2c->leave($__internal_18c704dc22785244b1f27e42a41007ea2767b7841f49910407fffb05598efd2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
