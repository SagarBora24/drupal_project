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

/* themes/contrib/bootstrap/templates/form/form-element.html.twig */
class __TwigTemplate_05c5527c8d7d0c007ca5a83c5a670806 extends Template
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
        // line 47
        yield "
";
        // line 49
        $context["label_attributes"] = ((($context["label_attributes"] ?? null)) ? (($context["label_attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 51
        yield "
";
        // line 52
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 53
            yield "  ";
            $context["wrapperclass"] = (((($context["checkbox_style"] ?? null) != "form-button")) ? ("form-check") : (""));
            // line 54
            yield "  ";
            $context["labelclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn btn-outline-primary") : ("form-check-label"));
            // line 55
            yield "  ";
            $context["inputclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn-check") : ("form-check-input"));
        }
        // line 57
        yield "
";
        // line 58
        if ((($context["type"] ?? null) == "radio")) {
            // line 59
            yield "  ";
            $context["wrapperclass"] = (((($context["checkbox_style"] ?? null) != "form-button")) ? ("form-check") : (""));
            // line 60
            yield "  ";
            $context["labelclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn btn-outline-primary") : ("form-check-label"));
            // line 61
            yield "  ";
            $context["inputclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn-check") : ("form-check-input"));
        }
        // line 63
        yield "
";
        // line 65
        $context["classes"] = ["js-form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 67
($context["type"] ?? null))), ((CoreExtension::inFilter(        // line 68
($context["type"] ?? null), ["checkbox", "radio"])) ? (\Drupal\Component\Utility\Html::getClass(($context["type"] ?? null))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass(($context["type"] ?? null))))), ((CoreExtension::inFilter(        // line 69
($context["type"] ?? null), ["checkbox", "radio"])) ? (($context["wrapperclass"] ?? null)) : ("")), (((        // line 70
($context["checkbox_style"] ?? null) == "form-switch")) ? ("form-switch") : ("")), ((CoreExtension::inFilter(        // line 71
($context["type"] ?? null), ["checkbox"])) ? ("mb-3") : ("")), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 72
($context["name"] ?? null))), ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 73
($context["name"] ?? null))), ((!CoreExtension::inFilter(        // line 74
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 75
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), ((        // line 76
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 79
        yield "
";
        // line 80
        if ((($context["title_display"] ?? null) == "invisible")) {
            // line 81
            yield "  ";
            if (array_key_exists("labelclass", $context)) {
                // line 82
                yield "    ";
                $context["labelclass"] = (($context["labelclass"] ?? null) . " visually-hidden");
                // line 83
                yield "  ";
            } else {
                // line 84
                yield "    ";
                $context["labelclass"] = "visually-hidden";
                // line 85
                yield "  ";
            }
        }
        // line 87
        yield "
";
        // line 89
        $context["description_classes"] = ["description", "text-muted", (((        // line 92
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 95
        if (CoreExtension::inFilter(($context["type"] ?? null), ["checkbox", "radio"])) {
            // line 96
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 96), "html", null, true);
            yield ">
    ";
            // line 97
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 98
                yield "      <span class=\"field-prefix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 100
            yield "    ";
            if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 100))) {
                // line 101
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 101), "html", null, true);
                yield ">
        ";
                // line 102
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 102), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 105
            yield "    ";
            if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 106
                yield "      <label ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [($context["labelclass"] ?? null)], "method", false, false, true, 106), "setAttribute", ["for", CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 106)], "method", false, false, true, 106), "html", null, true);
                yield ">
        ";
                // line 107
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["input_title"] ?? null));
                yield "
      </label>
    ";
            }
            // line 110
            yield "    ";
            if ((($context["checkbox_style"] ?? null) == "form-button")) {
                // line 111
                yield "      <input";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [($context["inputclass"] ?? null)], "method", false, false, true, 111), "setAttribute", ["autocomplete", "off"], "method", false, false, true, 111), "html", null, true);
                yield ">
    ";
            } else {
                // line 113
                yield "      <input";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [($context["inputclass"] ?? null)], "method", false, false, true, 113), "html", null, true);
                yield ">
    ";
            }
            // line 115
            yield "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 116
                yield "      <label ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [($context["labelclass"] ?? null)], "method", false, false, true, 116), "setAttribute", ["for", CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 116)], "method", false, false, true, 116), "html", null, true);
                yield ">
        ";
                // line 117
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["input_title"] ?? null));
                yield "
      </label>
    ";
            }
            // line 120
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 121
                yield "      <span class=\"field-suffix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 123
            yield "    ";
            if (($context["errors"] ?? null)) {
                // line 124
                yield "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 125
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 128
            yield "    ";
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 128))) {
                // line 129
                yield "      <small";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 129), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 129), "html", null, true);
                yield ">
        ";
                // line 130
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 130), "html", null, true);
                yield "
      </small>
    ";
            }
            // line 133
            yield "  </div>
";
        } else {
            // line 135
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), ((!CoreExtension::inFilter(($context["type"] ?? null), ["date", "time"])) ? ("mb-3") : ("")), ((($context["float_label"] ?? null)) ? ("form-floating") : (""))], "method", false, false, true, 135), "html", null, true);
            yield ">
    ";
            // line 136
            if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 137
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 139
            yield "    ";
            if (((!Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) || (!Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))))) {
                // line 140
                yield "      <div class=\"input-group";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["errors"] ?? null)) ? (" is-invalid") : ("")));
                yield "\">
    ";
            }
            // line 142
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 143
                yield "      <span class=\"input-group-text\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 145
            yield "    ";
            if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 145))) {
                // line 146
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 146), "html", null, true);
                yield ">
        ";
                // line 147
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 147), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 150
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
            yield "
    ";
            // line 151
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 152
                yield "      <span class=\"input-group-text\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 154
            yield "    ";
            if (((!Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) || (!Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))))) {
                // line 155
                yield "      </div>
    ";
            }
            // line 157
            yield "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 158
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 160
            yield "    ";
            if (($context["errors"] ?? null)) {
                // line 161
                yield "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 162
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 165
            yield "    ";
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 165))) {
                // line 166
                yield "      <small";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 166), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 166), "html", null, true);
                yield ">
        ";
                // line 167
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 167), "html", null, true);
                yield "
      </small>
    ";
            }
            // line 170
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "checkbox_style", "name", "title_display", "disabled", "errors", "description_display", "attributes", "prefix", "description", "label_display", "input_attributes", "input_title", "suffix", "float_label", "label", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap/templates/form/form-element.html.twig";
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
        return array (  332 => 170,  326 => 167,  321 => 166,  318 => 165,  312 => 162,  309 => 161,  306 => 160,  300 => 158,  297 => 157,  293 => 155,  290 => 154,  284 => 152,  282 => 151,  277 => 150,  271 => 147,  266 => 146,  263 => 145,  257 => 143,  254 => 142,  248 => 140,  245 => 139,  239 => 137,  237 => 136,  232 => 135,  228 => 133,  222 => 130,  217 => 129,  214 => 128,  208 => 125,  205 => 124,  202 => 123,  196 => 121,  193 => 120,  187 => 117,  182 => 116,  179 => 115,  173 => 113,  167 => 111,  164 => 110,  158 => 107,  153 => 106,  150 => 105,  144 => 102,  139 => 101,  136 => 100,  130 => 98,  128 => 97,  123 => 96,  121 => 95,  119 => 92,  118 => 89,  115 => 87,  111 => 85,  108 => 84,  105 => 83,  102 => 82,  99 => 81,  97 => 80,  94 => 79,  92 => 76,  91 => 75,  90 => 74,  89 => 73,  88 => 72,  87 => 71,  86 => 70,  85 => 69,  84 => 68,  83 => 67,  82 => 65,  79 => 63,  75 => 61,  72 => 60,  69 => 59,  67 => 58,  64 => 57,  60 => 55,  57 => 54,  54 => 53,  52 => 52,  49 => 51,  47 => 49,  44 => 47,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any errors for this form element, may not be set.
 * - prefix: (optional) The form element prefix, may not be set.
 * - suffix: (optional) The form element suffix, may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @see template_preprocess_form_element()
 */
#}

{%
  set label_attributes = label_attributes ? label_attributes : create_attribute()
%}

{% if type == 'checkbox' %}
  {% set wrapperclass = checkbox_style != 'form-button' ? \"form-check\" %}
  {% set labelclass = checkbox_style == 'form-button' ? 'btn btn-outline-primary' : \"form-check-label\"  %}
  {% set inputclass = checkbox_style == 'form-button' ? 'btn-check' : \"form-check-input\" %}
{% endif %}

{% if type == 'radio' %}
  {% set wrapperclass = checkbox_style != 'form-button' ? \"form-check\" %}
  {% set labelclass = checkbox_style == 'form-button' ? 'btn btn-outline-primary' : \"form-check-label\"  %}
  {% set inputclass = checkbox_style == 'form-button' ? 'btn-check' : \"form-check-input\" %}
{% endif %}

{%
  set classes = [
    'js-form-item',
    'js-form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? type|clean_class : 'form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? wrapperclass,
    checkbox_style == 'form-switch' ? 'form-switch' : '',
    type in ['checkbox'] ? 'mb-3',
    'js-form-item-' ~ name|clean_class,
    'form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'disabled',
    errors ? 'has-error',
  ]
%}

{% if title_display == 'invisible' %}
  {% if labelclass is defined %}
    {% set labelclass = labelclass ~ ' visually-hidden' %}
  {% else %}
    {% set labelclass = 'visually-hidden' %}
  {% endif %}
{% endif %}

{%
  set description_classes = [
    'description',
\t  'text-muted',
    description_display == 'invisible' ? 'visually-hidden',
  ]
%}
{% if type in ['checkbox', 'radio'] %}
  <div{{ attributes.addClass(classes) }}>
    {% if prefix is not empty %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {% if label_display in ['before', 'invisible'] %}
      <label {{ label_attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    {% if checkbox_style == 'form-button' %}
      <input{{ input_attributes.addClass(inputclass).setAttribute('autocomplete', 'off') }}>
    {% else %}
      <input{{ input_attributes.addClass(inputclass) }}>
    {% endif %}
    {% if label_display == 'after' %}
      <label {{ label_attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    {% if suffix is not empty %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback form-item--error-message\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </div>
{% else %}
  <div{{ attributes.addClass(classes, type not in ['date', 'time'] ? 'mb-3', float_label ? 'form-floating') }}>
    {% if label_display in ['before', 'invisible'] %}
      {{ label }}
    {% endif %}
    {% if (prefix is not empty) or (suffix is not empty) %}
      <div class=\"input-group{{ errors ? ' is-invalid' : '' }}\">
    {% endif %}
    {% if prefix is not empty %}
      <span class=\"input-group-text\">{{ prefix }}</span>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {{ children }}
    {% if suffix is not empty %}
      <span class=\"input-group-text\">{{ suffix }}</span>
    {% endif %}
    {% if (prefix is not empty) or (suffix is not empty) %}
      </div>
    {% endif %}
    {% if label_display == 'after' %}
      {{ label }}
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback form-item--error-message\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </div>
{% endif %}
", "themes/contrib/bootstrap/templates/form/form-element.html.twig", "C:\\xampp\\htdocs\\drupal_site\\web\\themes\\contrib\\bootstrap\\templates\\form\\form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 49, "if" => 52];
        static $filters = ["clean_class" => 67, "escape" => 96, "raw" => 107];
        static $functions = ["create_attribute" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
                ['create_attribute'],
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
