<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_93e5928dff63d918948dcf6e995fbb5b36f8e0599a4fe7138c72d5494110bad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca6aea7c15593a92f2f22cee0e6b208750fe35f355f3b7369debc40f176e022c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6aea7c15593a92f2f22cee0e6b208750fe35f355f3b7369debc40f176e022c->enter($__internal_ca6aea7c15593a92f2f22cee0e6b208750fe35f355f3b7369debc40f176e022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6f66fc437aba1eb8caf8791ed4fa79e8b0284582a19867994d2c86870cc93bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f66fc437aba1eb8caf8791ed4fa79e8b0284582a19867994d2c86870cc93bf5->enter($__internal_6f66fc437aba1eb8caf8791ed4fa79e8b0284582a19867994d2c86870cc93bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca6aea7c15593a92f2f22cee0e6b208750fe35f355f3b7369debc40f176e022c->leave($__internal_ca6aea7c15593a92f2f22cee0e6b208750fe35f355f3b7369debc40f176e022c_prof);

        
        $__internal_6f66fc437aba1eb8caf8791ed4fa79e8b0284582a19867994d2c86870cc93bf5->leave($__internal_6f66fc437aba1eb8caf8791ed4fa79e8b0284582a19867994d2c86870cc93bf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a159a2d8d92395b6b1797384ab1ab0422844fd13262cb4f1d6c60b6c19aa633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a159a2d8d92395b6b1797384ab1ab0422844fd13262cb4f1d6c60b6c19aa633->enter($__internal_3a159a2d8d92395b6b1797384ab1ab0422844fd13262cb4f1d6c60b6c19aa633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_503829c419a683207e5ed6c21bae35db322a8658cd07b046f038cccd0ddf55be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503829c419a683207e5ed6c21bae35db322a8658cd07b046f038cccd0ddf55be->enter($__internal_503829c419a683207e5ed6c21bae35db322a8658cd07b046f038cccd0ddf55be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_503829c419a683207e5ed6c21bae35db322a8658cd07b046f038cccd0ddf55be->leave($__internal_503829c419a683207e5ed6c21bae35db322a8658cd07b046f038cccd0ddf55be_prof);

        
        $__internal_3a159a2d8d92395b6b1797384ab1ab0422844fd13262cb4f1d6c60b6c19aa633->leave($__internal_3a159a2d8d92395b6b1797384ab1ab0422844fd13262cb4f1d6c60b6c19aa633_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/ludo/W@C/CookAngels/Form/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
