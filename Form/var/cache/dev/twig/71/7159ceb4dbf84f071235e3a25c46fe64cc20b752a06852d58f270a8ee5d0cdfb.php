<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_15b928ff7213396d9f640fa06b12c14a335ec6a67e3d6f1fc234707520f8f0ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77de12fed10be5cf314a7c6b3fe3bf8bc6b6b104324c7279f957092ba9320b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77de12fed10be5cf314a7c6b3fe3bf8bc6b6b104324c7279f957092ba9320b8c->enter($__internal_77de12fed10be5cf314a7c6b3fe3bf8bc6b6b104324c7279f957092ba9320b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5f0685f7ab2d9255afccb91af8d4a92873031cdf3de838da7222e460d6b7b02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0685f7ab2d9255afccb91af8d4a92873031cdf3de838da7222e460d6b7b02d->enter($__internal_5f0685f7ab2d9255afccb91af8d4a92873031cdf3de838da7222e460d6b7b02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77de12fed10be5cf314a7c6b3fe3bf8bc6b6b104324c7279f957092ba9320b8c->leave($__internal_77de12fed10be5cf314a7c6b3fe3bf8bc6b6b104324c7279f957092ba9320b8c_prof);

        
        $__internal_5f0685f7ab2d9255afccb91af8d4a92873031cdf3de838da7222e460d6b7b02d->leave($__internal_5f0685f7ab2d9255afccb91af8d4a92873031cdf3de838da7222e460d6b7b02d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_116a418d6a4b4650d04c0d77b856222f1390222f0bb75ede6b5c6ebf39c9daca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116a418d6a4b4650d04c0d77b856222f1390222f0bb75ede6b5c6ebf39c9daca->enter($__internal_116a418d6a4b4650d04c0d77b856222f1390222f0bb75ede6b5c6ebf39c9daca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a1a4e2e906a8769b63fa560fb731618b1f2fc5800ccaa9ed347d8e962be4d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1a4e2e906a8769b63fa560fb731618b1f2fc5800ccaa9ed347d8e962be4d9d->enter($__internal_5a1a4e2e906a8769b63fa560fb731618b1f2fc5800ccaa9ed347d8e962be4d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5a1a4e2e906a8769b63fa560fb731618b1f2fc5800ccaa9ed347d8e962be4d9d->leave($__internal_5a1a4e2e906a8769b63fa560fb731618b1f2fc5800ccaa9ed347d8e962be4d9d_prof);

        
        $__internal_116a418d6a4b4650d04c0d77b856222f1390222f0bb75ede6b5c6ebf39c9daca->leave($__internal_116a418d6a4b4650d04c0d77b856222f1390222f0bb75ede6b5c6ebf39c9daca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d549c4b0817834e3a7bfc29f5bb6ac9d373aa8064245418517a54dd7d9a20b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d549c4b0817834e3a7bfc29f5bb6ac9d373aa8064245418517a54dd7d9a20b0->enter($__internal_0d549c4b0817834e3a7bfc29f5bb6ac9d373aa8064245418517a54dd7d9a20b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_995323d306d3efe3dbb5f10fcd24df182eff5a713d22d8899fda27a9641e7e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995323d306d3efe3dbb5f10fcd24df182eff5a713d22d8899fda27a9641e7e60->enter($__internal_995323d306d3efe3dbb5f10fcd24df182eff5a713d22d8899fda27a9641e7e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_995323d306d3efe3dbb5f10fcd24df182eff5a713d22d8899fda27a9641e7e60->leave($__internal_995323d306d3efe3dbb5f10fcd24df182eff5a713d22d8899fda27a9641e7e60_prof);

        
        $__internal_0d549c4b0817834e3a7bfc29f5bb6ac9d373aa8064245418517a54dd7d9a20b0->leave($__internal_0d549c4b0817834e3a7bfc29f5bb6ac9d373aa8064245418517a54dd7d9a20b0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71c6b550d10cfd3172bcadb2fba1fd953ec10c97197d047857bfb83be8b4fe2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c6b550d10cfd3172bcadb2fba1fd953ec10c97197d047857bfb83be8b4fe2f->enter($__internal_71c6b550d10cfd3172bcadb2fba1fd953ec10c97197d047857bfb83be8b4fe2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56a460ce109c8a765607a6520f576bd622b6bdf7dd7b4fc59c006e13582fca39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a460ce109c8a765607a6520f576bd622b6bdf7dd7b4fc59c006e13582fca39->enter($__internal_56a460ce109c8a765607a6520f576bd622b6bdf7dd7b4fc59c006e13582fca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_56a460ce109c8a765607a6520f576bd622b6bdf7dd7b4fc59c006e13582fca39->leave($__internal_56a460ce109c8a765607a6520f576bd622b6bdf7dd7b4fc59c006e13582fca39_prof);

        
        $__internal_71c6b550d10cfd3172bcadb2fba1fd953ec10c97197d047857bfb83be8b4fe2f->leave($__internal_71c6b550d10cfd3172bcadb2fba1fd953ec10c97197d047857bfb83be8b4fe2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ludo/W@C/CookAngels/Form/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
