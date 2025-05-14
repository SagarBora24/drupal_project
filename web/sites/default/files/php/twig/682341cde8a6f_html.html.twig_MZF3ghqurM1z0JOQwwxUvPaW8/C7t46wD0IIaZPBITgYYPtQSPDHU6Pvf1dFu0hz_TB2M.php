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

/* themes/custom_theme/templates/layout/html.html.twig */
class __TwigTemplate_1968be78b0fdcabaa729765b2088b0c9 extends Template
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
        // line 28
        $context["body_classes"] = [((        // line 29
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 30
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), ((        // line 31
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((        // line 32
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 35
        yield "<!DOCTYPE html>
<html";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <title>";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <js-placeholder token=\"";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
  </head>
  <body";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 43), "html", null, true);
        yield ">
    ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "html_attributes", "placeholder_token", "head_title", "attributes", "page_top", "page", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom_theme/templates/layout/html.html.twig";
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
        return array (  91 => 47,  87 => 46,  83 => 45,  79 => 44,  75 => 43,  70 => 41,  66 => 40,  62 => 39,  58 => 38,  53 => 36,  50 => 35,  48 => 32,  47 => 31,  46 => 30,  45 => 29,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - path_info.args: Array of URL arguments un aliassed.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'node--type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
  ]
%}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
  </head>
  <body{{ attributes.addClass(body_classes) }}>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
  </body>
</html>
", "themes/custom_theme/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\drupal_site\\web\\themes\\custom_theme\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28];
        static $filters = ["clean_class" => 30, "escape" => 36, "raw" => 38, "safe_join" => 39];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'raw', 'safe_join'],
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
