<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7edfc9dd30a7711658c0675a5b56bef71b3fb6910f211432c3df0c945ac9ac31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6945b8dc498c2d502dd82abc9555fb58f22a2e0367c90a4901a6add359b0221b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6945b8dc498c2d502dd82abc9555fb58f22a2e0367c90a4901a6add359b0221b->enter($__internal_6945b8dc498c2d502dd82abc9555fb58f22a2e0367c90a4901a6add359b0221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_279518f2e9456e853268e32b95e97b24e1af8c11ff7163c7638643d8c3661934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279518f2e9456e853268e32b95e97b24e1af8c11ff7163c7638643d8c3661934->enter($__internal_279518f2e9456e853268e32b95e97b24e1af8c11ff7163c7638643d8c3661934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6945b8dc498c2d502dd82abc9555fb58f22a2e0367c90a4901a6add359b0221b->leave($__internal_6945b8dc498c2d502dd82abc9555fb58f22a2e0367c90a4901a6add359b0221b_prof);

        
        $__internal_279518f2e9456e853268e32b95e97b24e1af8c11ff7163c7638643d8c3661934->leave($__internal_279518f2e9456e853268e32b95e97b24e1af8c11ff7163c7638643d8c3661934_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31c80dd0aa2240f42bfcb76e6aa44c002d0c49c76af332027e6084094c813994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c80dd0aa2240f42bfcb76e6aa44c002d0c49c76af332027e6084094c813994->enter($__internal_31c80dd0aa2240f42bfcb76e6aa44c002d0c49c76af332027e6084094c813994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a2e8b9ec9b8e0aa58c2e8eb72722461fdb7b4adf2e22a0d51e0362d4b2f0250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2e8b9ec9b8e0aa58c2e8eb72722461fdb7b4adf2e22a0d51e0362d4b2f0250->enter($__internal_7a2e8b9ec9b8e0aa58c2e8eb72722461fdb7b4adf2e22a0d51e0362d4b2f0250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7a2e8b9ec9b8e0aa58c2e8eb72722461fdb7b4adf2e22a0d51e0362d4b2f0250->leave($__internal_7a2e8b9ec9b8e0aa58c2e8eb72722461fdb7b4adf2e22a0d51e0362d4b2f0250_prof);

        
        $__internal_31c80dd0aa2240f42bfcb76e6aa44c002d0c49c76af332027e6084094c813994->leave($__internal_31c80dd0aa2240f42bfcb76e6aa44c002d0c49c76af332027e6084094c813994_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_77f1d427dafebe688e0785f942265ce74a5b7468cc36a5381b35fc0cda0551f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f1d427dafebe688e0785f942265ce74a5b7468cc36a5381b35fc0cda0551f2->enter($__internal_77f1d427dafebe688e0785f942265ce74a5b7468cc36a5381b35fc0cda0551f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e1a234402f3c2a7e891f0584470eeaf45d5a1acf28bf645391f788f6eff4bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1a234402f3c2a7e891f0584470eeaf45d5a1acf28bf645391f788f6eff4bd4->enter($__internal_1e1a234402f3c2a7e891f0584470eeaf45d5a1acf28bf645391f788f6eff4bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_1e1a234402f3c2a7e891f0584470eeaf45d5a1acf28bf645391f788f6eff4bd4->leave($__internal_1e1a234402f3c2a7e891f0584470eeaf45d5a1acf28bf645391f788f6eff4bd4_prof);

        
        $__internal_77f1d427dafebe688e0785f942265ce74a5b7468cc36a5381b35fc0cda0551f2->leave($__internal_77f1d427dafebe688e0785f942265ce74a5b7468cc36a5381b35fc0cda0551f2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bf641d6c9385eebee6af829480381cb016500e5e79eb4fd94036b3087bdebff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf641d6c9385eebee6af829480381cb016500e5e79eb4fd94036b3087bdebff->enter($__internal_1bf641d6c9385eebee6af829480381cb016500e5e79eb4fd94036b3087bdebff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9949ffef0980babc12cd9f166427760cb46fd55b304871fe3d489deae6b7407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9949ffef0980babc12cd9f166427760cb46fd55b304871fe3d489deae6b7407->enter($__internal_f9949ffef0980babc12cd9f166427760cb46fd55b304871fe3d489deae6b7407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f9949ffef0980babc12cd9f166427760cb46fd55b304871fe3d489deae6b7407->leave($__internal_f9949ffef0980babc12cd9f166427760cb46fd55b304871fe3d489deae6b7407_prof);

        
        $__internal_1bf641d6c9385eebee6af829480381cb016500e5e79eb4fd94036b3087bdebff->leave($__internal_1bf641d6c9385eebee6af829480381cb016500e5e79eb4fd94036b3087bdebff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ludo/W@C/CookAngels/Form/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
