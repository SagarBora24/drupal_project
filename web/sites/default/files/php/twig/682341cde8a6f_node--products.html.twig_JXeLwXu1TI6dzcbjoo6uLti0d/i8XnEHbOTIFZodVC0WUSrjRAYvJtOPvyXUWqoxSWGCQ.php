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

/* themes/custom_theme/templates/nodes/node--products.html.twig */
class __TwigTemplate_c6172b4f4a9706fb8468c5a19a054124 extends Template
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
        // line 2
        yield "<article class=\"product-single\">
  <div class=\"product-container\" style = \"display: flex; margin-left:auto\">
    <div class=\"product-image\" style=\"
    margin-left: 200px;
\">
      ";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_image", [], "any", false, false, true, 7)) {
            // line 8
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_image", [], "any", false, false, true, 8), "html", null, true);
            yield "
      ";
        }
        // line 10
        yield "    </div>

    <div class=\"product-details\" style=\" margin-left: 100px; margin-top: 200px;\">
     <h1 class=\"product-title\" style=\"margin-bottom: 10px;\">";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_title", [], "any", false, false, true, 13), "html", null, true);
        yield "</h1>

            ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_descriptions", [], "any", false, false, true, 15)) {
            // line 16
            yield "            <div class=\"product-intro\" style=\"margin-bottom: 10px;\">
                ";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_descriptions", [], "any", false, false, true, 17), "html", null, true);
            yield "
            </div>
            ";
        }
        // line 20
        yield "
            ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_price", [], "any", false, false, true, 21)) {
            // line 22
            yield "            <div class=\"product-price\" style=\"margin-bottom: 10px; display:flex;\">
                <strong style=\"margin-right: 10px;\">Price:</strong> ";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_price", [], "any", false, false, true, 23), "html", null, true);
            yield "
            </div>
            ";
        }
        // line 26
        yield "

      <div class=\"product-actions\">
        <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
      </div>
    </div>
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom_theme/templates/nodes/node--products.html.twig";
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
        return array (  94 => 26,  88 => 23,  85 => 22,  83 => 21,  80 => 20,  74 => 17,  71 => 16,  69 => 15,  64 => 13,  59 => 10,  53 => 8,  51 => 7,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# <link rel=\"stylesheet\" href=\"{{ base_path ~ directory }}/css/style.css\"> #}
<article class=\"product-single\">
  <div class=\"product-container\" style = \"display: flex; margin-left:auto\">
    <div class=\"product-image\" style=\"
    margin-left: 200px;
\">
      {% if content.field_product_image %}
        {{ content.field_product_image }}
      {% endif %}
    </div>

    <div class=\"product-details\" style=\" margin-left: 100px; margin-top: 200px;\">
     <h1 class=\"product-title\" style=\"margin-bottom: 10px;\">{{ content.field_product_title }}</h1>

            {% if content.field_product_descriptions %}
            <div class=\"product-intro\" style=\"margin-bottom: 10px;\">
                {{ content.field_product_descriptions }}
            </div>
            {% endif %}

            {% if content.field_product_price %}
            <div class=\"product-price\" style=\"margin-bottom: 10px; display:flex;\">
                <strong style=\"margin-right: 10px;\">Price:</strong> {{ content.field_product_price }}
            </div>
            {% endif %}


      <div class=\"product-actions\">
        <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
      </div>
    </div>
  </div>
</article>
", "themes/custom_theme/templates/nodes/node--products.html.twig", "C:\\xampp\\htdocs\\drupal_site\\web\\themes\\custom_theme\\templates\\nodes\\node--products.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 7];
        static $filters = ["escape" => 8];
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
