<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6886cbef29787afff90251e9e84872c41856f254feaec4ade7c9a87ef4e92692 extends Twig_Template
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
        $__internal_8082001c80f6326d06d5e6776c8e77fc68867db8eb8d00a2b1b92f994bcf0f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8082001c80f6326d06d5e6776c8e77fc68867db8eb8d00a2b1b92f994bcf0f7c->enter($__internal_8082001c80f6326d06d5e6776c8e77fc68867db8eb8d00a2b1b92f994bcf0f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f3fd6ba5fb6ac47dbbc234c4ab5098c56dbc0baaf46d1a8485202bccbde4f06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fd6ba5fb6ac47dbbc234c4ab5098c56dbc0baaf46d1a8485202bccbde4f06d->enter($__internal_f3fd6ba5fb6ac47dbbc234c4ab5098c56dbc0baaf46d1a8485202bccbde4f06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8082001c80f6326d06d5e6776c8e77fc68867db8eb8d00a2b1b92f994bcf0f7c->leave($__internal_8082001c80f6326d06d5e6776c8e77fc68867db8eb8d00a2b1b92f994bcf0f7c_prof);

        
        $__internal_f3fd6ba5fb6ac47dbbc234c4ab5098c56dbc0baaf46d1a8485202bccbde4f06d->leave($__internal_f3fd6ba5fb6ac47dbbc234c4ab5098c56dbc0baaf46d1a8485202bccbde4f06d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
