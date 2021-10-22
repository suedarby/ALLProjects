/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 *
 * Based on Business Rules (MIT license)
 * Copyright 2013 Chris Powers
 */
(function($) {

    window._registeredConditionsDomEvents = false;

    $.fn.conditionsBuilder = function (options) {
        if (options === "data") {
            var builder = $(this).eq(0).data("conditionsBuilder");
            return builder.collectData();
        } else {
            return $(this).each(function () {
                var builder = new ConditionsBuilder(this, options);
                $(this).data("conditionsBuilder", builder);
            });
        }
    };

    function ConditionsBuilder (element, options) {
        this.element = $(element);
        this.options = options || {};
        this.selectFieldsCache = false;
        this.init();
    }

    ConditionsBuilder.prototype = {
        init: function () {
            this.fields = this.denormalizeOperators(this.options.variables, this.options.variable_type_operators);
            this.data = this.options.data || {"all": []};
            var rules = this.buildRules(this.data);
            if (!window._registeredConditionsDomEvents) {
                var $body = $("body");
                var that = this;

                $body.on("click", ".add-condition", function (e) {
                    e.preventDefault();
                    var f = that.fields[0];
                    var newField = {"all": [{name: f.value, operator: f.operators[0], value: null}]};
                    $(e.currentTarget).closest('.conditional').append(that.buildConditional(newField))
                });

                $body.on("click", ".remove-condition", function (e) {
                    e.preventDefault();
                    $(e.currentTarget).closest('.conditional').remove();
                    $(this).trigger("remove");
                });

                $body.on("click", ".add-rule", function (e) {
                    e.preventDefault();
                    var f = that.fields[0];
                    var newField = {name: f.value, operator: f.operators[0], value: null};
                    $(e.currentTarget).closest('.conditional').append(that.buildRule(newField))
                });

                $body.on("click", ".remove-rule", function (e) {
                    e.preventDefault();
                    $(e.currentTarget).closest('.rule').remove();
                    $(this).trigger("remove");
                });

                window._registeredConditionsDomEvents = true;
            }
            this.element.empty();
            this.element.html(rules);
        },

        denormalizeOperators: function (variablesData, operators) {
            return $.map(variablesData, function(variable) {
                variable.operators = operators[variable.fieldType];
                return variable;
            });
        },

        collectData: function () {
            return this.collectDataFromNode(this.element.find("> .conditional"));
        },

        collectDataFromNode: function (element) {
            var klass = null;
            var that = this;

            if (element.is(".conditional")) {
                klass = element.find("> .all-any-none-wrapper > .all-any-none").val();
            }

            if (klass) {
                var out = {};
                out[klass] = [];
                element.find("> .conditional, > .rule").each(function() {
                    out[klass].push(that.collectDataFromNode($(this)));
                });
                return out;
            }

            return {
                name: element.find(".field").val(),
                operator: element.find(".operator").val(),
                value: element.find(".value").val()
            };
        },

        buildRules: function (ruleData) {
            return this.buildConditional(ruleData) || this.buildRule(ruleData);
        },

        buildConditional: function (ruleData) {
            var kind;

            if (ruleData.all) {
                kind = "all";
            } else if(ruleData.any) {
                kind = "any";
            } else if (ruleData.none) {
                kind = "none";
            }

            if (!kind) {
                return;
            }

            var div = document.createElement("div");
            div.classList.add("conditional");
            div.classList.add(kind);

            var selectWrapper = document.createElement("div");
            selectWrapper.classList.add("all-any-none-wrapper");

            var select = document.createElement("select");
            select.classList.add("all-any-none");
            select.classList.add("form-control");

            var opt1 = document.createElement('option');
            opt1.value = "all";
            opt1.innerHTML = options.i18n.all;
            opt1.selected = kind === "all";
            select.appendChild(opt1);

            var opt2 = document.createElement('option');
            opt2.value = "any";
            opt2.innerHTML = options.i18n.any;
            opt2.selected = kind === "any";
            select.appendChild(opt2);

            var opt3 = document.createElement('option');
            opt3.value = "none";
            opt3.innerHTML = options.i18n.none;
            opt3.selected = kind === "none";

            select.appendChild(opt3);

            var span = document.createElement('span');
            span.textContent = options.i18n.followingConditions;

            selectWrapper.appendChild(select)
            selectWrapper.appendChild(span);
            div.append(selectWrapper);

            var addRuleIcon = document.createElement('span');
            addRuleIcon.classList.add("glyphicon");
            addRuleIcon.classList.add("glyphicon-plus");
            addRuleIcon.textContent = " ";

            var addRuleLink = document.createElement('a');
            addRuleLink.classList.add("add-rule");
            addRuleLink.classList.add("btn");
            addRuleLink.classList.add("btn-warning");
            addRuleLink.classList.add("btn-xs");
            addRuleLink.textContent = options.i18n.addCondition;
            addRuleLink.href = "#";

            addRuleLink.prepend(addRuleIcon);

            div.append(addRuleLink);

            var addConditionIcon = document.createElement('span');
            addConditionIcon.classList.add("glyphicon");
            addConditionIcon.classList.add("glyphicon-plus");
            addConditionIcon.textContent = " ";

            var addConditionLink = document.createElement('a');
            addConditionLink.classList.add("add-condition");
            addConditionLink.classList.add("btn");
            addConditionLink.classList.add("btn-warning");
            addConditionLink.classList.add("btn-xs");
            addConditionLink.textContent = options.i18n.addGroup;
            addConditionLink.href = "#";

            addConditionLink.prepend(addConditionIcon);

            div.append(addConditionLink);

            var removeIcon = document.createElement('span');
            removeIcon.classList.add("glyphicon");
            removeIcon.classList.add("glyphicon-remove");
            removeIcon.textContent = " ";

            var removeLink = document.createElement('a');
            removeLink.classList.add("remove-condition");
            removeLink.classList.add("btn");
            removeLink.classList.add("btn-danger");
            removeLink.classList.add("btn-xs");
            removeLink.textContent = options.i18n.deleteText;
            removeLink.href = "#";

            removeLink.prepend(removeIcon);

            div.append(removeLink);

            var rules = ruleData[kind];
            var len = rules.length;
            for (var i = 0; i < len; i++) {
                var child = this.buildRules(rules[i]);
                if (child) {
                    div.appendChild(child);
                }
            }

            return div;
        },

        buildRule: function (ruleData) {

            var that = this;

            var ruleDiv = document.createElement("div");
            ruleDiv.classList.add("rule");

            var select = document.createElement("select");
            select.classList.add("field");
            select.classList.add("form-control");

            var originalOption = document.createElement('option');
            var len = this.fields.length;
            for (var i = 0; i < len; i++) {
                var field = this.fields[i];
                var option = originalOption.cloneNode(true);
                option.value = field.name;
                option.innerHTML = field.label;
                option.selected = ruleData.name === field.name;
                option.dataset.idx = i;
                select.appendChild(option);
            }

            var operatorSelect = document.createElement("select");
            operatorSelect.classList.add("operator");
            operatorSelect.classList.add("form-control");
            operatorSelect.addEventListener('change', function (e) {
                var $this = $(this);
                var option = $this.find("> :selected");
                var container = $this.parents(".rule");
                var fieldSelect = container.find(".field");
                var currentValue = container.find(".value");

                switch(option.data("fieldType")) {
                    case "none":
                        $this.after($("<input>", {"type": "hidden", "class": "value form-control"}));
                        break;
                    case "text":
                        $this.after($("<input>", {"type": "text", "class": "value form-control"}));
                        break;
                    case "email":
                        $this.after($("<input>", {"type": "email", "class": "value form-control"}));
                        break;
                    case "number":
                        $this.after($("<input>", {"type": "number", "class": "value form-control"}));
                        break;
                    case "color":
                        $this.after($("<input>", {"type": "color", "class": "value form-control"}));
                        break;
                    case "range":
                        $this.after($("<input>", {"type": "range", "class": "value form-control"}));
                        break;
                    case "textarea":
                        $this.after($("<textarea>", {"class": "value form-control"}));
                        break;
                    case "select":
                        var select = $("<select>", {"class": "value form-control"});
                        var selectedOption = fieldSelect.find("> :selected");
                        var i = selectedOption.data("idx");
                        var options = that.fields[i].options;
                        var len = options.length;
                        for (var i = 0; i < len; i++) {
                            var opt = options[i];
                            select.append($("<option>", {"text": opt.label || opt.value, "value": opt.value}));
                        }
                        $this.after(select);
                        break;
                    case "select_multiple":
                        var selectedOption = fieldSelect.find("> :selected");
                        var i = selectedOption.data("idx");
                        var options = that.fields[i].options;
                        var selectLength = options.length > 10 ? 10 : options.length;
                        var select = $("<select class='value form-control' multiple size='" + selectLength + "''></select>");
                        var len = options.length;
                        for (var i = 0; i < len; i++) {
                            var opt = options[i];
                            select.append($("<option>", {"text": opt.label || opt.value, "value": opt.value}));
                        }
                        $this.after(select);
                        break;
                }
                currentValue.remove();
            });

            var removeIcon = document.createElement('span');
            removeIcon.classList.add("glyphicon");
            removeIcon.classList.add("glyphicon-remove");
            removeIcon.textContent = " ";

            var removeLink = document.createElement('a');
            removeLink.classList.add("remove-rule");
            removeLink.classList.add("btn");
            removeLink.classList.add("btn-danger");
            removeLink.classList.add("btn-xs");
            removeLink.textContent = options.i18n.deleteText;
            removeLink.href = "#";

            removeLink.prepend(removeIcon);

            ruleDiv.appendChild(select);
            ruleDiv.appendChild(operatorSelect);
            ruleDiv.appendChild(removeLink);

            select.addEventListener('change', function (e) {
                var operators = that.operatorsFor($(e.target).val());
                operatorSelect.innerHTML = '';
                var len = operators.length;
                for (var i = 0; i < len; i++) {
                    var operator = operators[i];
                    var option = originalOption.cloneNode(true);
                    option.value = operator.name;
                    option.innerHTML = operator.label || operator.name;
                    option.selected = ruleData.operator === operator.name;
                    option.dataset.fieldType = operator.fieldType;
                    operatorSelect.appendChild(option);
                }

                var e = new Event("change");
                operatorSelect.dispatchEvent(e);
            });

            var e = new Event("change");
            select.dispatchEvent(e);

            ruleDiv.querySelector(".value").value = ruleData.value;
            return ruleDiv;
        },

        operatorsFor: function(fieldName) {
            var len = this.fields.length;
            for (var i = 0; i < len; i++) {
                var field = this.fields[i];
                if (field.name === fieldName) {
                    return field.operators;
                }
            }
        }
    };

})(jQuery);