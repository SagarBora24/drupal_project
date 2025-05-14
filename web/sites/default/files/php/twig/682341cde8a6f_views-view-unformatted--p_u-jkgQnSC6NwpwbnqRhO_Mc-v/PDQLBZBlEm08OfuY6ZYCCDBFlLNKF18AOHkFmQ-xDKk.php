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

/* themes/custom_theme/templates/views/views-view-unformatted--products-card.html.twig */
class __TwigTemplate_c90ca4ff17d71d924d47b11beec2d0e7 extends Template
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
        // line 18
        yield "<div class=\"product-column-list\">
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            yield "    ";
            $context["product"] = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), "#row", [], "array", false, false, true, 20)), "_entity", [], "any", false, false, true, 20);
            // line 21
            yield "    <div class=\"product-card\">
      <div class=\"card\">
        <img src=\"";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "field_product_image", [], "any", false, false, true, 23), "entity", [], "any", false, false, true, 23), "fileuri", [], "any", false, false, true, 23)), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "label", [], "any", false, false, true, 23), "html", null, true);
            yield "\" class=\"card-img-top\" />
        <div class=\"card-body\">
          <h5 class=\"card-title\">";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "label", [], "any", false, false, true, 25), "html", null, true);
            yield "</h5>
          <p class=\"card-description\">";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "field_product_descriptions", [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26), "html", null, true);
            yield "</p>
          <p class=\"card-price\">Price: ";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "field_product_price", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), "html", null, true);
            yield "</p>
          <a href=\"";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, true, 28)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">View Product</a>
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom_theme/templates/views/views-view-unformatted--products-card.html.twig";
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
        return array (  88 => 33,  77 => 28,  73 => 27,  69 => 26,  65 => 25,  58 => 23,  54 => 21,  51 => 20,  47 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}
<div class=\"product-column-list\">
  {% for row in rows %}
    {% set product = row.content['#row']._entity %}
    <div class=\"product-card\">
      <div class=\"card\">
        <img src=\"{{ file_url(product.field_product_image.entity.fileuri) }}\" alt=\"{{ product.label }}\" class=\"card-img-top\" />
        <div class=\"card-body\">
          <h5 class=\"card-title\">{{ product.label }}</h5>
          <p class=\"card-description\">{{ product.field_product_descriptions.value }}</p>
          <p class=\"card-price\">Price: {{ product.field_product_price.value }}</p>
          <a href=\"{{ path('entity.node.canonical', {'node': product.id}) }}\" class=\"btn btn-primary\">View Product</a>
        </div>
      </div>
    </div>
  {% endfor %}
</div>", "themes/custom_theme/templates/views/views-view-unformatted--products-card.html.twig", "C:\\xampp\\htdocs\\drupal_site\\web\\themes\\custom_theme\\templates\\views\\views-view-unformatted--products-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 19, "set" => 20];
        static $filters = ["escape" => 23];
        static $functions = ["file_url" => 23, "path" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape'],
                ['file_url', 'path'],
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
