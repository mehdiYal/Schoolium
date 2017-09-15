<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f794bac01edc92477b475ede6c7c781008181ff6bbc724cf8c87ab652aee584c extends Twig_Template
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
        $__internal_8225a215030b686724c6525b2444a62350e9378c80e171e756c70f7a3faeebe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8225a215030b686724c6525b2444a62350e9378c80e171e756c70f7a3faeebe2->enter($__internal_8225a215030b686724c6525b2444a62350e9378c80e171e756c70f7a3faeebe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_240f2e686f8c1542463bccadb12a3c3cd60ea0298bd5f47cdf31438877c16fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240f2e686f8c1542463bccadb12a3c3cd60ea0298bd5f47cdf31438877c16fc1->enter($__internal_240f2e686f8c1542463bccadb12a3c3cd60ea0298bd5f47cdf31438877c16fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8225a215030b686724c6525b2444a62350e9378c80e171e756c70f7a3faeebe2->leave($__internal_8225a215030b686724c6525b2444a62350e9378c80e171e756c70f7a3faeebe2_prof);

        
        $__internal_240f2e686f8c1542463bccadb12a3c3cd60ea0298bd5f47cdf31438877c16fc1->leave($__internal_240f2e686f8c1542463bccadb12a3c3cd60ea0298bd5f47cdf31438877c16fc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
