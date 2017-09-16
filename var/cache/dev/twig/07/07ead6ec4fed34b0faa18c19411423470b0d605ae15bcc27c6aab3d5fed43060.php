<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6ffc495d9c4130ee704e042ed24a621a3d0265ad6f26953645620129cfb6b85e extends Twig_Template
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
        $__internal_7a09d59eaa1543791877329cc1940b2758d74f3f9f112bb7cf6c00a5dba39b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a09d59eaa1543791877329cc1940b2758d74f3f9f112bb7cf6c00a5dba39b29->enter($__internal_7a09d59eaa1543791877329cc1940b2758d74f3f9f112bb7cf6c00a5dba39b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7e52e2705eba0da7b4af94aa3546266a699fe1949595791de00db0ec5567d492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e52e2705eba0da7b4af94aa3546266a699fe1949595791de00db0ec5567d492->enter($__internal_7e52e2705eba0da7b4af94aa3546266a699fe1949595791de00db0ec5567d492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7a09d59eaa1543791877329cc1940b2758d74f3f9f112bb7cf6c00a5dba39b29->leave($__internal_7a09d59eaa1543791877329cc1940b2758d74f3f9f112bb7cf6c00a5dba39b29_prof);

        
        $__internal_7e52e2705eba0da7b4af94aa3546266a699fe1949595791de00db0ec5567d492->leave($__internal_7e52e2705eba0da7b4af94aa3546266a699fe1949595791de00db0ec5567d492_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
