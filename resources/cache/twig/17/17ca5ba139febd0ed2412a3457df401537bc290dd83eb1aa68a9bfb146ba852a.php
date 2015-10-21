<?php

/* common/form_div_layout.html.twig */
class __TwigTemplate_2a7def97fa3fce3a276eb83ef97c2da1ee10218a21cab67c6a938d97c88f48d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "common/form_div_layout.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'submit_row' => array($this, 'block_submit_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_form($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "btn btn-primary"));
        // line 17
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 18
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(            // line 25
$context["child"], 'label', array("in_choice_list" => true, "widget" =>             // line 29
$this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget'), "multiple" =>             // line 30
(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))));
            // line 32
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 37
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 38
        ob_start();
        // line 39
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 40
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 42
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "
            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "&nbsp;
            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 52
    public function block_date_widget($context, array $blocks = array())
    {
        // line 53
        ob_start();
        // line 54
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 55
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 57
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 58
                echo "        <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 60
            echo "            ";
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 61
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget', array("attr" => array("class" => "span1"))), "{{ month }}" =>             // line 62
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget', array("attr" => array("class" => "span1"))), "{{ day }}" =>             // line 63
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget', array("attr" => array("class" => "span1")))));
            // line 64
            echo "
        ";
            // line 65
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 66
                echo "        </div>
        ";
            }
            // line 68
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 72
    public function block_time_widget($context, array $blocks = array())
    {
        // line 73
        ob_start();
        // line 74
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 75
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 77
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 78
                echo "        <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 80
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', array("attr" => array("class" => "span1")));
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', array("attr" => array("class" => "span1")));
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', array("attr" => array("class" => "span1")));
            }
            // line 81
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 82
                echo "        </div>
        ";
            }
            // line 84
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_money_widget($context, array $blocks = array())
    {
        // line 90
        ob_start();
        // line 91
        echo "    ";
        $context["append"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 92
        echo "    <div class=\"";
        echo (((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) ? ("input-append") : ("input-prepend"));
        echo "\">
        ";
        // line 93
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 94
            echo "            <span class=\"add-on\">
                ";
            // line 95
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 98
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        ";
        // line 99
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 100
            echo "            <span class=\"add-on\">
                ";
            // line 101
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 104
        echo "    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 109
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 110
        ob_start();
        // line 111
        echo "    <div class=\"input-append\">
        ";
        // line 112
        $this->displayParentBlock("percent_widget", $context, $blocks);
        echo "
        <span class=\"add-on\">%</span>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 120
    public function block_form_label($context, array $blocks = array())
    {
        // line 121
        ob_start();
        // line 122
        echo "    ";
        if (((array_key_exists("in_choice_list", $context) && (isset($context["in_choice_list"]) ? $context["in_choice_list"] : $this->getContext($context, "in_choice_list"))) && array_key_exists("widget", $context))) {
            // line 123
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 124
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 125
                echo "        ";
            }
            // line 126
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 127
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 128
                echo "        ";
            }
            // line 129
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 130
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 131
                echo "        ";
            }
            // line 132
            echo "
        ";
            // line 133
            if ((array_key_exists("multiple", $context) && (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 134
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " checkbox"))));
                // line 135
                echo "        ";
            } elseif ((array_key_exists("multiple", $context) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 136
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " radio"))));
                // line 137
                echo "        ";
            }
            // line 138
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 139
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo "
            <span>
                ";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </span>
        </label>
    ";
        } else {
            // line 145
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
            // line 146
            echo "        ";
            $this->displayParentBlock("form_label", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 153
    public function block_form_row($context, array $blocks = array())
    {
        // line 154
        ob_start();
        // line 155
        echo "    <div class=\"control-group";
        if (( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) &&  !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array()))) {
            echo " error";
        }
        echo "\">
        ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"controls\">
            ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 165
    public function block_form_errors($context, array $blocks = array())
    {
        // line 166
        ob_start();
        // line 167
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 168
            echo "    ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-inline\">";
            } else {
                echo "<div class=\"alert alert-error error\" >";
            }
            // line 169
            echo "        ";
            $this->displayParentBlock("form_errors", $context, $blocks);
            echo "
    ";
            // line 170
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
            // line 171
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 175
    public function block_submit_row($context, array $blocks = array())
    {
        // line 176
        echo "    <div class=\"form-actions\">
        ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "common/form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 177,  453 => 176,  450 => 175,  444 => 171,  438 => 170,  433 => 169,  426 => 168,  423 => 167,  421 => 166,  418 => 165,  409 => 159,  405 => 158,  400 => 156,  393 => 155,  391 => 154,  388 => 153,  379 => 146,  376 => 145,  369 => 141,  364 => 139,  348 => 138,  345 => 137,  342 => 136,  339 => 135,  336 => 134,  334 => 133,  331 => 132,  328 => 131,  325 => 130,  322 => 129,  319 => 128,  316 => 127,  313 => 126,  310 => 125,  307 => 124,  304 => 123,  301 => 122,  299 => 121,  296 => 120,  287 => 112,  284 => 111,  282 => 110,  279 => 109,  272 => 104,  266 => 101,  263 => 100,  261 => 99,  256 => 98,  250 => 95,  247 => 94,  245 => 93,  240 => 92,  237 => 91,  235 => 90,  232 => 89,  225 => 84,  221 => 82,  218 => 81,  209 => 80,  203 => 78,  200 => 77,  194 => 75,  191 => 74,  189 => 73,  186 => 72,  180 => 68,  176 => 66,  174 => 65,  171 => 64,  169 => 63,  168 => 62,  167 => 61,  165 => 60,  159 => 58,  156 => 57,  150 => 55,  147 => 54,  145 => 53,  142 => 52,  133 => 46,  129 => 45,  125 => 44,  121 => 43,  116 => 42,  110 => 40,  107 => 39,  105 => 38,  102 => 37,  92 => 32,  90 => 30,  89 => 29,  88 => 25,  86 => 24,  81 => 23,  79 => 22,  76 => 21,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  53 => 9,  49 => 8,  44 => 7,  42 => 6,  39 => 5,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {# Form #}*/
/* */
/* {% block form %}*/
/* {% spaceless %}*/
/*     {{ form_start(form, {attr: {class: 'form-horizontal', novalidate: 'novalidate'}}) }}*/
/*         {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endspaceless %}*/
/* {% endblock form %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block submit_widget %}*/
/*     {% set attr = attr|merge({class: 'btn btn-primary'}) %}*/
/*     {% set type = type|default('submit') %}*/
/*     {{ block('button_widget') }}*/
/* {% endblock %}*/
/* */
/* {% block choice_widget_expanded %}*/
/* {% spaceless %}*/
/*     {% for child in form %}*/
/*         {{ form_label(*/
/*             child,*/
/*             null,*/
/*             {*/
/*                 in_choice_list: true,*/
/*                 widget        : form_widget(child),*/
/*                 multiple      : multiple,*/
/*             }*/
/*         ) }}*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block datetime_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_errors(form.date) }}*/
/*             {{ form_errors(form.time) }}*/
/*             {{ form_widget(form.date, { datetime: true } ) }}&nbsp;*/
/*             {{ form_widget(form.time, { datetime: true } ) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock datetime_widget %}*/
/* */
/* {% block date_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% if datetime is not defined or false == datetime %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*         {% endif %}*/
/*             {{ date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year, {attr: { class : 'span1'} }),*/
/*                 '{{ month }}': form_widget(form.month, {attr: { class : 'span1'} }),*/
/*                 '{{ day }}':   form_widget(form.day, {attr: { class : 'span1' } }),*/
/*             })|raw }}*/
/*         {% if datetime is not defined or false == datetime %}*/
/*         </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* {% block time_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% if datetime is not defined or false == datetime %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*         {% endif %}*/
/*             {{ form_widget(form.hour, { attr: { class : 'span1' } }) }}:{{ form_widget(form.minute, { attr: { class : 'span1' } }) }}{% if with_seconds %}:{{ form_widget(form.second, { attr: { class : 'span1' } }) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock time_widget %}*/
/* */
/* {% block money_widget %}*/
/* {% spaceless %}*/
/*     {% set append = '{{' == money_pattern[0:2] %}*/
/*     <div class="{{ append ? 'input-append' : 'input-prepend' }}">*/
/*         {% if not append %}*/
/*             <span class="add-on">*/
/*                 {{ money_pattern|replace({ '{{ widget }}':''}) }}*/
/*             </span>*/
/*         {% endif %}*/
/*         {{ block('form_widget_simple') }}*/
/*         {% if append %}*/
/*             <span class="add-on">*/
/*                 {{ money_pattern|replace({ '{{ widget }}':''}) }}*/
/*             </span>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endspaceless %}*/
/* {% endblock money_widget %}*/
/* */
/* {% block percent_widget %}*/
/* {% spaceless %}*/
/*     <div class="input-append">*/
/*         {{ parent() }}*/
/*         <span class="add-on">%</span>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock percent_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if in_choice_list is defined and in_choice_list and widget is defined %}*/
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({for: id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/* */
/*         {% if multiple is defined and multiple %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' checkbox')|trim}) %}*/
/*         {% elseif multiple is defined and not multiple %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' radio')|trim}) %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{ widget|raw }}*/
/*             <span>*/
/*                 {{ label|trans({}, translation_domain) }}*/
/*             </span>*/
/*         </label>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) %}*/
/*         {{ parent() }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <div class="control-group{% if not compound and not form.vars.valid %} error{% endif %}">*/
/*         {{ form_label(form, label|default(null)) }}*/
/*         <div class="controls">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*     {% if form.parent %}<span class="help-inline">{% else %}<div class="alert alert-error error" >{% endif %}*/
/*         {{ parent() }}*/
/*     {% if form.parent %}</span>{% else %}</div>{% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {% block submit_row %}*/
/*     <div class="form-actions">*/
/*         {{ form_widget(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
