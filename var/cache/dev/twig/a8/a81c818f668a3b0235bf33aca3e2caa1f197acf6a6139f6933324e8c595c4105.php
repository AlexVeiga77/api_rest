<?php

/* @ApiPlatform/Graphiql/index.html.twig */
class __TwigTemplate_052700bc5e97fb2cb1d9db1062da010c9d2db40306603eae0aac1a50432e1d98 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ApiPlatform/Graphiql/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        if ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->source); })())) {
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
            echo " - ";
        }
        echo "API Platform</title>

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/graphiql/graphiql.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/graphiql-style.css"), "html", null, true);
        echo "\">
</head>

<body>
<div id=\"graphiql\">Loading...</div>

<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/react/react.production.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/react/react-dom.production.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/graphiql/graphiql.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/init-graphiql.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ApiPlatform/Graphiql/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  61 => 16,  57 => 15,  53 => 14,  44 => 8,  40 => 7,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% if title %}{{ title }} - {% endif %}API Platform</title>

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/apiplatform/graphiql/graphiql.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/apiplatform/graphiql-style.css') }}\">
</head>

<body>
<div id=\"graphiql\">Loading...</div>

<script src=\"{{ asset('bundles/apiplatform/react/react.production.min.js') }}\"></script>
<script src=\"{{ asset('bundles/apiplatform/react/react-dom.production.min.js') }}\"></script>
<script src=\"{{ asset('bundles/apiplatform/graphiql/graphiql.min.js') }}\"></script>
<script src=\"{{ asset('bundles/apiplatform/init-graphiql.js') }}\"></script>

</body>
</html>
", "@ApiPlatform/Graphiql/index.html.twig", "/var/www/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views/Graphiql/index.html.twig");
    }
}
