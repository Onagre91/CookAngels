<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a9752ffc723e9a95d07a5c788c26d4c589d83463e40b2bc92ce63b6bd0f6716c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d1a3cd5aae9198343f69d1d534b0afe1c41a9e5602a45b1b8f334e8100db14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1a3cd5aae9198343f69d1d534b0afe1c41a9e5602a45b1b8f334e8100db14f->enter($__internal_3d1a3cd5aae9198343f69d1d534b0afe1c41a9e5602a45b1b8f334e8100db14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cd7bd9560283c1a25aa0f4aa3f1e5ba12e259207216bc0ce6fda0f5a3595e847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7bd9560283c1a25aa0f4aa3f1e5ba12e259207216bc0ce6fda0f5a3595e847->enter($__internal_cd7bd9560283c1a25aa0f4aa3f1e5ba12e259207216bc0ce6fda0f5a3595e847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3d1a3cd5aae9198343f69d1d534b0afe1c41a9e5602a45b1b8f334e8100db14f->leave($__internal_3d1a3cd5aae9198343f69d1d534b0afe1c41a9e5602a45b1b8f334e8100db14f_prof);

        
        $__internal_cd7bd9560283c1a25aa0f4aa3f1e5ba12e259207216bc0ce6fda0f5a3595e847->leave($__internal_cd7bd9560283c1a25aa0f4aa3f1e5ba12e259207216bc0ce6fda0f5a3595e847_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8628d663236d73c25899d80f6199a8d651871605513e44c619eb251d440f8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8628d663236d73c25899d80f6199a8d651871605513e44c619eb251d440f8b4->enter($__internal_d8628d663236d73c25899d80f6199a8d651871605513e44c619eb251d440f8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78746ca582803bff2f526677161d8b260b4e020a2f06fbdc61e25e27c38ad710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78746ca582803bff2f526677161d8b260b4e020a2f06fbdc61e25e27c38ad710->enter($__internal_78746ca582803bff2f526677161d8b260b4e020a2f06fbdc61e25e27c38ad710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_78746ca582803bff2f526677161d8b260b4e020a2f06fbdc61e25e27c38ad710->leave($__internal_78746ca582803bff2f526677161d8b260b4e020a2f06fbdc61e25e27c38ad710_prof);

        
        $__internal_d8628d663236d73c25899d80f6199a8d651871605513e44c619eb251d440f8b4->leave($__internal_d8628d663236d73c25899d80f6199a8d651871605513e44c619eb251d440f8b4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3dbd2564f4d8873b667c03a6d678088a259ac01a22e493a6ab494b83b6103a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbd2564f4d8873b667c03a6d678088a259ac01a22e493a6ab494b83b6103a27->enter($__internal_3dbd2564f4d8873b667c03a6d678088a259ac01a22e493a6ab494b83b6103a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8767b93f2cb85498cf5bd651ae691115f3c41a638065a78d748c41eec1e3ad2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8767b93f2cb85498cf5bd651ae691115f3c41a638065a78d748c41eec1e3ad2f->enter($__internal_8767b93f2cb85498cf5bd651ae691115f3c41a638065a78d748c41eec1e3ad2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8767b93f2cb85498cf5bd651ae691115f3c41a638065a78d748c41eec1e3ad2f->leave($__internal_8767b93f2cb85498cf5bd651ae691115f3c41a638065a78d748c41eec1e3ad2f_prof);

        
        $__internal_3dbd2564f4d8873b667c03a6d678088a259ac01a22e493a6ab494b83b6103a27->leave($__internal_3dbd2564f4d8873b667c03a6d678088a259ac01a22e493a6ab494b83b6103a27_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a407514cd8e243b4db93d101621ee97e1815b0e0eb16cc47ee00eccbf67525e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a407514cd8e243b4db93d101621ee97e1815b0e0eb16cc47ee00eccbf67525e7->enter($__internal_a407514cd8e243b4db93d101621ee97e1815b0e0eb16cc47ee00eccbf67525e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1fb00a27415b9bcdafc49bdfe2026873c25dabd879438597b1a201eb4f891ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1fb00a27415b9bcdafc49bdfe2026873c25dabd879438597b1a201eb4f891ed->enter($__internal_c1fb00a27415b9bcdafc49bdfe2026873c25dabd879438597b1a201eb4f891ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1fb00a27415b9bcdafc49bdfe2026873c25dabd879438597b1a201eb4f891ed->leave($__internal_c1fb00a27415b9bcdafc49bdfe2026873c25dabd879438597b1a201eb4f891ed_prof);

        
        $__internal_a407514cd8e243b4db93d101621ee97e1815b0e0eb16cc47ee00eccbf67525e7->leave($__internal_a407514cd8e243b4db93d101621ee97e1815b0e0eb16cc47ee00eccbf67525e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ludo/W@C/CookAngels/Form/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
