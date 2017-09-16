<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e65f65b54c246ad16a44d5feea6a09d139f6b1a4a3bd9dacd0ee0a0bb048efb3 extends Twig_Template
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
        $__internal_c85de38a792e1d37429de1b184dab6cc4ce39c4259d3b1e5e6718d442778ca88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85de38a792e1d37429de1b184dab6cc4ce39c4259d3b1e5e6718d442778ca88->enter($__internal_c85de38a792e1d37429de1b184dab6cc4ce39c4259d3b1e5e6718d442778ca88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_79108ad50d669682ea01dc83a6f55352f2fc5b1ad029acf6d2fae8858d23817a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79108ad50d669682ea01dc83a6f55352f2fc5b1ad029acf6d2fae8858d23817a->enter($__internal_79108ad50d669682ea01dc83a6f55352f2fc5b1ad029acf6d2fae8858d23817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c85de38a792e1d37429de1b184dab6cc4ce39c4259d3b1e5e6718d442778ca88->leave($__internal_c85de38a792e1d37429de1b184dab6cc4ce39c4259d3b1e5e6718d442778ca88_prof);

        
        $__internal_79108ad50d669682ea01dc83a6f55352f2fc5b1ad029acf6d2fae8858d23817a->leave($__internal_79108ad50d669682ea01dc83a6f55352f2fc5b1ad029acf6d2fae8858d23817a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
