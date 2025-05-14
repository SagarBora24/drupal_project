<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom_theme/templates/layout/page--front.html.twig */
class __TwigTemplate_8c5710c021e41158e4ed8a24104e9b09 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/css/style.css\">
    <title>";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
        yield "</title>

    ";
        // line 14
        yield "    
<body>
    <header role=\"banner\">
      ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 17)) {
            // line 18
            yield "        <nav class=\"main-navigation\" role=\"navigation\">
          ";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 19), "html", null, true);
            yield "
          ";
            // line 25
            yield "
        </nav>
      ";
        }
        // line 28
        yield "    </header>

     ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 30)) {
            // line 31
            yield "        
          ";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 32), "html", null, true);
            yield "

      ";
        }
        // line 35
        yield "   
       ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 36)) {
            // line 37
            yield "        
          ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 38), "html", null, true);
            yield "

      ";
        }
        // line 41
        yield "  
</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["base_path", "directory", "site_name", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom_theme/templates/layout/page--front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  108 => 41,  102 => 38,  99 => 37,  97 => 36,  94 => 35,  88 => 32,  85 => 31,  83 => 30,  79 => 28,  74 => 25,  70 => 19,  67 => 18,  65 => 17,  60 => 14,  55 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ base_path ~ directory }}/css/style.css\">
    <title>{{ site_name }}</title>

    {# {% if not logged_in %}
      <script>
        window.location.href = \"{{ path('custom_login.form') }}\";
      </script>
    {% endif %} #}
    
<body>
    <header role=\"banner\">
      {% if page.primary_menu %}
        <nav class=\"main-navigation\" role=\"navigation\">
          {{ page.primary_menu }}
          {# {% if logged_in %}
            <a href=\"{{ path('custom_module.logout') }}\" class=\"nav-link\">Logout</a>
          {% else %}
            <a href=\"{{ path('custom_login.form') }}\" class=\"nav-link\">Login</a>
          {% endif %} #}

        </nav>
      {% endif %}
    </header>

     {% if page.secondary_menu %}
        
          {{ page.secondary_menu }}

      {% endif %}
   
       {% if page.content %}
        
          {{ page.content }}

      {% endif %}
  
</body>
</html>
", "themes/custom_theme/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\drupal_site\\web\\themes\\custom_theme\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 17];
        static $filters = ["escape" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
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
