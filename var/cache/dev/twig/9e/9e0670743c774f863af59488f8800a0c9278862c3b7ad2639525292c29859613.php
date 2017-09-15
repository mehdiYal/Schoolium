<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_03aa938eff914b1994a708e7be68a2bea04bb846366d3fd1ea4e8aacc9edf4f8 extends Twig_Template
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
        $__internal_112298f0d9dee223e908e6fdc6dbb6aa8d8cdac60d4f839dbb05ec61bf26addf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112298f0d9dee223e908e6fdc6dbb6aa8d8cdac60d4f839dbb05ec61bf26addf->enter($__internal_112298f0d9dee223e908e6fdc6dbb6aa8d8cdac60d4f839dbb05ec61bf26addf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_eaeaa58cfe7bf0fc6bf0580849011c1a7f9d3d62fec9917358a452663c147a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaeaa58cfe7bf0fc6bf0580849011c1a7f9d3d62fec9917358a452663c147a3e->enter($__internal_eaeaa58cfe7bf0fc6bf0580849011c1a7f9d3d62fec9917358a452663c147a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_112298f0d9dee223e908e6fdc6dbb6aa8d8cdac60d4f839dbb05ec61bf26addf->leave($__internal_112298f0d9dee223e908e6fdc6dbb6aa8d8cdac60d4f839dbb05ec61bf26addf_prof);

        
        $__internal_eaeaa58cfe7bf0fc6bf0580849011c1a7f9d3d62fec9917358a452663c147a3e->leave($__internal_eaeaa58cfe7bf0fc6bf0580849011c1a7f9d3d62fec9917358a452663c147a3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
