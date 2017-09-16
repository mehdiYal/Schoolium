<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_bf45f72da4d6ed0d615296c5ca2f9d807ac8bf6041ff3d6e9a17b416c5d60617 extends Twig_Template
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
        $__internal_cfb8acbe844ad9b552bedacb11c17bee86d8ab28bdb89d332369bde3548d8c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb8acbe844ad9b552bedacb11c17bee86d8ab28bdb89d332369bde3548d8c64->enter($__internal_cfb8acbe844ad9b552bedacb11c17bee86d8ab28bdb89d332369bde3548d8c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_31dafa53462ab256e58bf953ec0e29493fd71afb44a52b0c0b2abd0d65c8eff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dafa53462ab256e58bf953ec0e29493fd71afb44a52b0c0b2abd0d65c8eff5->enter($__internal_31dafa53462ab256e58bf953ec0e29493fd71afb44a52b0c0b2abd0d65c8eff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_cfb8acbe844ad9b552bedacb11c17bee86d8ab28bdb89d332369bde3548d8c64->leave($__internal_cfb8acbe844ad9b552bedacb11c17bee86d8ab28bdb89d332369bde3548d8c64_prof);

        
        $__internal_31dafa53462ab256e58bf953ec0e29493fd71afb44a52b0c0b2abd0d65c8eff5->leave($__internal_31dafa53462ab256e58bf953ec0e29493fd71afb44a52b0c0b2abd0d65c8eff5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
