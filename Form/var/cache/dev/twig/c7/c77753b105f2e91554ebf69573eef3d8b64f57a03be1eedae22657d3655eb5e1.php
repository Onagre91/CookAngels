<?php

/* base.html.twig */
class __TwigTemplate_d1757c40be2af8a61a7137918d99aab3fc6764412a679719dfb5fda299b0417f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d115a80b496c1ebc5cd6addcd5460e2eea30085a68efba5eda9c5489a87d2aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d115a80b496c1ebc5cd6addcd5460e2eea30085a68efba5eda9c5489a87d2aa8->enter($__internal_d115a80b496c1ebc5cd6addcd5460e2eea30085a68efba5eda9c5489a87d2aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_11ea12b6ec301b8d745c537f66b69e92a4f6ce13f91b4ff9771d03a3beeba328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ea12b6ec301b8d745c537f66b69e92a4f6ce13f91b4ff9771d03a3beeba328->enter($__internal_11ea12b6ec301b8d745c537f66b69e92a4f6ce13f91b4ff9771d03a3beeba328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "</body>
</html>
";
        
        $__internal_d115a80b496c1ebc5cd6addcd5460e2eea30085a68efba5eda9c5489a87d2aa8->leave($__internal_d115a80b496c1ebc5cd6addcd5460e2eea30085a68efba5eda9c5489a87d2aa8_prof);

        
        $__internal_11ea12b6ec301b8d745c537f66b69e92a4f6ce13f91b4ff9771d03a3beeba328->leave($__internal_11ea12b6ec301b8d745c537f66b69e92a4f6ce13f91b4ff9771d03a3beeba328_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c896ba8d29319bd591fbd05d5cb3c438cf02abd4fa795e494fbd682409e18f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c896ba8d29319bd591fbd05d5cb3c438cf02abd4fa795e494fbd682409e18f2->enter($__internal_4c896ba8d29319bd591fbd05d5cb3c438cf02abd4fa795e494fbd682409e18f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4410687d193f1f42d0d23056e7eb0625a8b907a5fc99e069ccc5d04934adbeea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4410687d193f1f42d0d23056e7eb0625a8b907a5fc99e069ccc5d04934adbeea->enter($__internal_4410687d193f1f42d0d23056e7eb0625a8b907a5fc99e069ccc5d04934adbeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cook Angels";
        
        $__internal_4410687d193f1f42d0d23056e7eb0625a8b907a5fc99e069ccc5d04934adbeea->leave($__internal_4410687d193f1f42d0d23056e7eb0625a8b907a5fc99e069ccc5d04934adbeea_prof);

        
        $__internal_4c896ba8d29319bd591fbd05d5cb3c438cf02abd4fa795e494fbd682409e18f2->leave($__internal_4c896ba8d29319bd591fbd05d5cb3c438cf02abd4fa795e494fbd682409e18f2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_125fa0d985e8661230a5245275561a57a5793e5fdca471d43f18ebdc7ce0ef28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125fa0d985e8661230a5245275561a57a5793e5fdca471d43f18ebdc7ce0ef28->enter($__internal_125fa0d985e8661230a5245275561a57a5793e5fdca471d43f18ebdc7ce0ef28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a483501e027eb8dd895cbdb3d9908df481cda1b9efa394dfceb4691d9ac4032a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a483501e027eb8dd895cbdb3d9908df481cda1b9efa394dfceb4691d9ac4032a->enter($__internal_a483501e027eb8dd895cbdb3d9908df481cda1b9efa394dfceb4691d9ac4032a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    ";
        
        $__internal_a483501e027eb8dd895cbdb3d9908df481cda1b9efa394dfceb4691d9ac4032a->leave($__internal_a483501e027eb8dd895cbdb3d9908df481cda1b9efa394dfceb4691d9ac4032a_prof);

        
        $__internal_125fa0d985e8661230a5245275561a57a5793e5fdca471d43f18ebdc7ce0ef28->leave($__internal_125fa0d985e8661230a5245275561a57a5793e5fdca471d43f18ebdc7ce0ef28_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef547bcd162dcc6e53db1b338f38ada6ab25bf2b48b5947d1f17b8d04e84dc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef547bcd162dcc6e53db1b338f38ada6ab25bf2b48b5947d1f17b8d04e84dc63->enter($__internal_ef547bcd162dcc6e53db1b338f38ada6ab25bf2b48b5947d1f17b8d04e84dc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04337ab280e7eeb9e64797a02f718040cb35c3a72abc12a3028642a2199686fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04337ab280e7eeb9e64797a02f718040cb35c3a72abc12a3028642a2199686fb->enter($__internal_04337ab280e7eeb9e64797a02f718040cb35c3a72abc12a3028642a2199686fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04337ab280e7eeb9e64797a02f718040cb35c3a72abc12a3028642a2199686fb->leave($__internal_04337ab280e7eeb9e64797a02f718040cb35c3a72abc12a3028642a2199686fb_prof);

        
        $__internal_ef547bcd162dcc6e53db1b338f38ada6ab25bf2b48b5947d1f17b8d04e84dc63->leave($__internal_ef547bcd162dcc6e53db1b338f38ada6ab25bf2b48b5947d1f17b8d04e84dc63_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64a5d03acd3a13f67174cc6d43ee799faae4a82c1e0d8c5368898c338b40ab7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a5d03acd3a13f67174cc6d43ee799faae4a82c1e0d8c5368898c338b40ab7c->enter($__internal_64a5d03acd3a13f67174cc6d43ee799faae4a82c1e0d8c5368898c338b40ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8023f85ba88bfd4ee02515f72aa8a5800e4a148b30a6905071dddc69a89d1139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8023f85ba88bfd4ee02515f72aa8a5800e4a148b30a6905071dddc69a89d1139->enter($__internal_8023f85ba88bfd4ee02515f72aa8a5800e4a148b30a6905071dddc69a89d1139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_8023f85ba88bfd4ee02515f72aa8a5800e4a148b30a6905071dddc69a89d1139->leave($__internal_8023f85ba88bfd4ee02515f72aa8a5800e4a148b30a6905071dddc69a89d1139_prof);

        
        $__internal_64a5d03acd3a13f67174cc6d43ee799faae4a82c1e0d8c5368898c338b40ab7c->leave($__internal_64a5d03acd3a13f67174cc6d43ee799faae4a82c1e0d8c5368898c338b40ab7c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 17,  138 => 16,  135 => 15,  126 => 14,  109 => 13,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 19,  50 => 14,  48 => 13,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Cook Angels{% endblock %}</title>
    {% block stylesheets %}
    <link href=\"{{ asset('css/materialize.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/materialize.css') }}\" rel=\"stylesheet\"/>
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    {% block body %}{% endblock %}
    {% block javascripts %}
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/materialize.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/materialize.js') }}\"></script>
    {% endblock %}
</body>
</html>
", "base.html.twig", "/home/ludo/W@C/CookAngels/Form/app/Resources/views/base.html.twig");
    }
}
