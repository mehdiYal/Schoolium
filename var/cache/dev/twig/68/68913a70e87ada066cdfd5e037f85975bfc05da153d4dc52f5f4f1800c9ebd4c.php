<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1ce16a6011d90660623ea833659dff81c3be7998ff0e02d4828cdf3b1d85117c extends Twig_Template
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
        $__internal_6c534392a66f97f5614b8fc192cf7ec222a8fdde050822e6e85ff3180e9cfada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c534392a66f97f5614b8fc192cf7ec222a8fdde050822e6e85ff3180e9cfada->enter($__internal_6c534392a66f97f5614b8fc192cf7ec222a8fdde050822e6e85ff3180e9cfada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_874cff6a3bd7747c1691bc490cdac4b5f238d30c0d5db8c8e362fa8ce52bb929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874cff6a3bd7747c1691bc490cdac4b5f238d30c0d5db8c8e362fa8ce52bb929->enter($__internal_874cff6a3bd7747c1691bc490cdac4b5f238d30c0d5db8c8e362fa8ce52bb929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6c534392a66f97f5614b8fc192cf7ec222a8fdde050822e6e85ff3180e9cfada->leave($__internal_6c534392a66f97f5614b8fc192cf7ec222a8fdde050822e6e85ff3180e9cfada_prof);

        
        $__internal_874cff6a3bd7747c1691bc490cdac4b5f238d30c0d5db8c8e362fa8ce52bb929->leave($__internal_874cff6a3bd7747c1691bc490cdac4b5f238d30c0d5db8c8e362fa8ce52bb929_prof);

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
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
