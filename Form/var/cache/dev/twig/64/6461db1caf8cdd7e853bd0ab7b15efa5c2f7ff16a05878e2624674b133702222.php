<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_345f573fa00597f191a1f1329365b86f5a11f4a19b2cbb0c78c9fdca5c69f46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_4cc755ced63080e165010a735924d7b23ce7c8d09731fb9e3f730c63780a5aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc755ced63080e165010a735924d7b23ce7c8d09731fb9e3f730c63780a5aad->enter($__internal_4cc755ced63080e165010a735924d7b23ce7c8d09731fb9e3f730c63780a5aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b4545d0b245c38c76a6ff9524ce1c63a1f90b8920d8e74ac44ff8e8537e7beb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4545d0b245c38c76a6ff9524ce1c63a1f90b8920d8e74ac44ff8e8537e7beb6->enter($__internal_b4545d0b245c38c76a6ff9524ce1c63a1f90b8920d8e74ac44ff8e8537e7beb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc755ced63080e165010a735924d7b23ce7c8d09731fb9e3f730c63780a5aad->leave($__internal_4cc755ced63080e165010a735924d7b23ce7c8d09731fb9e3f730c63780a5aad_prof);

        
        $__internal_b4545d0b245c38c76a6ff9524ce1c63a1f90b8920d8e74ac44ff8e8537e7beb6->leave($__internal_b4545d0b245c38c76a6ff9524ce1c63a1f90b8920d8e74ac44ff8e8537e7beb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6bac123d7dad4a854e0ed5360037d6fa2dcd83451760cc7f55a9c10c57e49ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bac123d7dad4a854e0ed5360037d6fa2dcd83451760cc7f55a9c10c57e49ca3->enter($__internal_6bac123d7dad4a854e0ed5360037d6fa2dcd83451760cc7f55a9c10c57e49ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_797b95638b2957fef8e047858bc82d3ba06842aaf44bfa3ca156c6117a72ba34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797b95638b2957fef8e047858bc82d3ba06842aaf44bfa3ca156c6117a72ba34->enter($__internal_797b95638b2957fef8e047858bc82d3ba06842aaf44bfa3ca156c6117a72ba34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_797b95638b2957fef8e047858bc82d3ba06842aaf44bfa3ca156c6117a72ba34->leave($__internal_797b95638b2957fef8e047858bc82d3ba06842aaf44bfa3ca156c6117a72ba34_prof);

        
        $__internal_6bac123d7dad4a854e0ed5360037d6fa2dcd83451760cc7f55a9c10c57e49ca3->leave($__internal_6bac123d7dad4a854e0ed5360037d6fa2dcd83451760cc7f55a9c10c57e49ca3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f46e97925021b2adb7ce5f364cd196d92992d32c0927fb8f91cfff13a96ecb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f46e97925021b2adb7ce5f364cd196d92992d32c0927fb8f91cfff13a96ecb2->enter($__internal_6f46e97925021b2adb7ce5f364cd196d92992d32c0927fb8f91cfff13a96ecb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f39ea7f4fc9a086656905924df27027ae0d9184bb256f7b81a04298a4ffdb967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39ea7f4fc9a086656905924df27027ae0d9184bb256f7b81a04298a4ffdb967->enter($__internal_f39ea7f4fc9a086656905924df27027ae0d9184bb256f7b81a04298a4ffdb967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f39ea7f4fc9a086656905924df27027ae0d9184bb256f7b81a04298a4ffdb967->leave($__internal_f39ea7f4fc9a086656905924df27027ae0d9184bb256f7b81a04298a4ffdb967_prof);

        
        $__internal_6f46e97925021b2adb7ce5f364cd196d92992d32c0927fb8f91cfff13a96ecb2->leave($__internal_6f46e97925021b2adb7ce5f364cd196d92992d32c0927fb8f91cfff13a96ecb2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aac6c74944dac3df5c14cc0ef5923d6ced0a64e40e77335527b13f0cd611a60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac6c74944dac3df5c14cc0ef5923d6ced0a64e40e77335527b13f0cd611a60e->enter($__internal_aac6c74944dac3df5c14cc0ef5923d6ced0a64e40e77335527b13f0cd611a60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89407530c6f639138deea0d2af36206789914afe790b09735dec27fbf4462da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89407530c6f639138deea0d2af36206789914afe790b09735dec27fbf4462da1->enter($__internal_89407530c6f639138deea0d2af36206789914afe790b09735dec27fbf4462da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_89407530c6f639138deea0d2af36206789914afe790b09735dec27fbf4462da1->leave($__internal_89407530c6f639138deea0d2af36206789914afe790b09735dec27fbf4462da1_prof);

        
        $__internal_aac6c74944dac3df5c14cc0ef5923d6ced0a64e40e77335527b13f0cd611a60e->leave($__internal_aac6c74944dac3df5c14cc0ef5923d6ced0a64e40e77335527b13f0cd611a60e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ludo/W@C/CookAngels/Form/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
