<?php

/* Emails/confirmation.html.twig */
class __TwigTemplate_2257e800997f6ca58af191ddb0b79a5f9e74e663b043f9147b8672d466a0da2c extends Twig_Template
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
        $__internal_8c328dbf2cb4d6dfa9ff7fa37fb281332f4e72d328e2d5a7c95bc5cb17917863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c328dbf2cb4d6dfa9ff7fa37fb281332f4e72d328e2d5a7c95bc5cb17917863->enter($__internal_8c328dbf2cb4d6dfa9ff7fa37fb281332f4e72d328e2d5a7c95bc5cb17917863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/confirmation.html.twig"));

        $__internal_48c94597497ca6fff91a33100820d7609d08af2a94f88a16e644f9e174e41009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c94597497ca6fff91a33100820d7609d08af2a94f88a16e644f9e174e41009->enter($__internal_48c94597497ca6fff91a33100820d7609d08af2a94f88a16e644f9e174e41009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/confirmation.html.twig"));

        // line 1
        echo "
<h1>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["prénom"]) || array_key_exists("prénom", $context) ? $context["prénom"] : (function () { throw new Twig_Error_Runtime('Variable "prénom" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo ", merci de votre participation</h1>";
        
        $__internal_8c328dbf2cb4d6dfa9ff7fa37fb281332f4e72d328e2d5a7c95bc5cb17917863->leave($__internal_8c328dbf2cb4d6dfa9ff7fa37fb281332f4e72d328e2d5a7c95bc5cb17917863_prof);

        
        $__internal_48c94597497ca6fff91a33100820d7609d08af2a94f88a16e644f9e174e41009->leave($__internal_48c94597497ca6fff91a33100820d7609d08af2a94f88a16e644f9e174e41009_prof);

    }

    public function getTemplateName()
    {
        return "Emails/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<h1>{{ prénom }}, merci de votre participation</h1>", "Emails/confirmation.html.twig", "/home/ludo/W@C/CookAngels/Form/app/Resources/views/Emails/confirmation.html.twig");
    }
}
