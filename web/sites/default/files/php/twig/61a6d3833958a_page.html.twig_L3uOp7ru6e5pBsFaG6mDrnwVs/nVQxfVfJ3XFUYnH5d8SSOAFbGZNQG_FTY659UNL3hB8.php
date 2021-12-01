<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/ponal_theme/templates/page.html.twig */
class __TwigTemplate_f44f9fded9eb9d795f645c5a6cc6083c5a6907d96622db610c2ae3c03e9ee9ed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<header>
  ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 74
        echo "</header>

<nav class=\"navbar navbar-expand-lg navbar-dark py-lg-4\" id=\"mainNav\">
  ";
        // line 77
        if (($context["container_navbar"] ?? null)) {
            // line 78
            echo "  <div class=\"container\">
  ";
        }
        // line 80
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 80)) {
            // line 81
            echo "      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 86
        echo "  ";
        if (($context["container_navbar"] ?? null)) {
            // line 87
            echo "  </div>
  ";
        }
        // line 89
        echo "</nav>

<section class=\"page-section clearfix\">
    <div class=\"container\">
      ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_main", [], "any", false, false, true, 93)) {
            // line 94
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_main", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 96
        echo "    </div>
</section>

<section class=\"page-section cta\">
    <div class=\"container\">
      ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_second", [], "any", false, false, true, 101)) {
            // line 102
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_second", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 104
        echo "    </div>
</section>

<footer class=\"footer text-faded text-center py-5\">
  ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 108)) {
            // line 109
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 111
        echo "</footer>";
    }

    public function getTemplateName()
    {
        return "themes/custom/ponal_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 111,  118 => 109,  116 => 108,  110 => 104,  104 => 102,  102 => 101,  95 => 96,  89 => 94,  87 => 93,  81 => 89,  77 => 87,  74 => 86,  68 => 83,  64 => 81,  61 => 80,  57 => 78,  55 => 77,  50 => 74,  44 => 72,  42 => 71,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ponal_theme/templates/page.html.twig", "C:\\xampp\\htdocs\\piloto_drupal\\web\\themes\\custom\\ponal_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71);
        static $filters = array("escape" => 72);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
