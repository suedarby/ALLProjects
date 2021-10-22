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

(function ($) {

    window._registeredActionsDomEvents = false;

    $.fn.actionsBuilder = function (options) {
        if(options === "data") {
            var builder = $(this).eq(0).data("actionsBuilder");
            return builder.collectData();
        } else {
            return $(this).each(function () {
                var builder = new ActionsBuilder(this, options);
                $(this).data("actionsBuilder", builder);
            });
        }
    };

    function ActionsBuilder (element, options) {
        this.element = $(element);
        this.options = options || {};
        this.init();
    }

    ActionsBuilder.prototype = {
        init: function () {
            this.fields = this.options.actions;
            this.data = this.options.data || [];
            if (!window._registeredActionsDomEvents) {
                var $body = $("body");
                var that = this;

                $body.on("click", ".add-action", function (e) {
                    e.preventDefault();
                    var action = that.buildAction({});
                    $(e.currentTarget).closest('.actions').append(action)
                    var e = new Event("change");
                    action.querySelector('select').dispatchEvent(e);
                });

                $body.on("click", ".remove-action", function (e) {
                    e.preventDefault();
                    $(e.currentTarget).closest('.action').remove();
                    $(this).trigger("remove");
                });

                window._registeredActionsDomEvents = true;
            }
            var actions = this.buildActions(this.data);
            this.element.empty();
            this.element.html(actions);
        },

        buildActions: function (data) {
            var container = document.createElement("div");
            container.classList.add("actions");

            var buttons = document.createElement("div");
            buttons.classList.add("action-buttons");

            var message = document.createElement("span");
            message.style.cssText = "margin-right:20px;display:inline-block";
            message.textContent = options.i18n.followingActions;

            buttons.appendChild(message);

            var addIcon = document.createElement('span');
            addIcon.classList.add("glyphicon");
            addIcon.classList.add("glyphicon-plus");
            addIcon.textContent = " ";

            var addButton = document.createElement('a');
            addButton.classList.add("add-action");
            addButton.classList.add("btn");
            addButton.classList.add("btn-success");
            addButton.classList.add("btn-xs");
            addButton.textContent = options.i18n.addAction;
            addButton.href = "#";

            addButton.insertBefore(addIcon, addButton.firstChild);

            buttons.appendChild(addButton);
            container.appendChild(buttons);

            var len = data.length;
            for (var i = 0; i < len; i++) {
                var actionObj = data[i];
                var actionDiv = this.buildAction(actionObj);

                // Add values to fields
                var fields = [actionObj], field;
                while (field = fields.shift()) {
                    var actionInput = actionDiv.querySelector("[name='" + field.name + "']");
                    if (actionInput) {
                        if (Array.isArray(field.value) && typeof actionInput.options !== "undefined") {
                            var olen = actionInput.options.length;
                            for (var o = 0; o < olen; o++) {
                                if (field.value.indexOf(actionInput.options[o].value) !== -1) {
                                    actionInput.options[o].selected = true;
                                }
                            }
                        } else {
                            actionInput.value = field.value;
                        }
                        var e = new Event("change");
                        actionInput.dispatchEvent(e);
                    }
                    if (field.fields) {
                        fields = fields.concat(field.fields);
                    }
                }
                container.appendChild(actionDiv);
            }
            return container;
        },

        buildAction: function (data) {
            var div = document.createElement("div");
            div.classList.add("action");

            var fieldsDiv = document.createElement("div");
            fieldsDiv.classList.add("subfields");

            var select = document.createElement("select");
            select.classList.add("action-select");
            select.classList.add("form-control");
            select.name = "action-select";

            var originalOption = document.createElement('option');
            var len = this.fields.length;
            for (var i = 0; i < len; i++) {
                var option = originalOption.cloneNode(true);
                option.value = this.fields[i].name;
                option.innerHTML = this.fields[i].label;
                select.appendChild(option);
            }

            var that = this;

            select.addEventListener('change', function () {
                var val = this.value;
                var newField = that._findField(val);
                fieldsDiv.innerHTML = "";

                if (newField.fields) {
                    var len = newField.fields.length;
                    for (var i = 0; i < len; i++) {
                        fieldsDiv.appendChild(that.buildField(newField.fields[i]));
                    }
                }

                div.classList.add("action");
                div.classList.add("val");
            });

            var removeIcon = document.createElement('span');
            removeIcon.classList.add("glyphicon");
            removeIcon.classList.add("glyphicon-remove");
            removeIcon.textContent = " ";

            var removeLink = document.createElement('a');
            removeLink.classList.add("remove-action");
            removeLink.classList.add("btn");
            removeLink.classList.add("btn-danger");
            removeLink.classList.add("btn-xs");
            removeLink.textContent = options.i18n.deleteText;
            removeLink.href = "#";

            removeLink.prepend(removeIcon);

            var field = this._findField(data.name);

            if (field) {
                select.value = field.name;
                if (data.fields) {
                    var len = data.fields.length;
                    for (i = 0; i < len; i++) {
                        var fieldsInput = fieldsDiv.querySelector("[name='" + data.fields[i].name + "']");
                        fieldsInput.value = data.fields[i].label;
                    }
                }
            }

            div.appendChild(select);
            div.appendChild(fieldsDiv);
            div.appendChild(removeLink);

            return div;
        },

        buildField: function (field) {
            var div = document.createElement("div");
            div.classList.add("field");

            var subfields = document.createElement("div");
            subfields.classList.add("subfields");

            var label = document.createElement("label");
            label.classList.add("control-label");
            label.textContent = field.label;

            div.appendChild(label)

            var that = this;

            if (field.fieldType === "select") {
                var select = document.createElement("select");
                select.classList.add("form-control");
                select.classList.add("field-select");
                select.name = field.name;

                var originalOption = document.createElement('option');
                var len = field.options.length;
                for (var i = 0; i < len; i++) {
                    var optionData = field.options[i];
                    var option = originalOption.cloneNode(true);
                    option.value = optionData.name;
                    option.innerHTML = optionData.label;
                    option.dataset.idx = i;
                    select.appendChild(option);
                }

                select.addEventListener('change', function() {

                    var option = $(this).find("> :selected");
                    var i = option.data("idx");
                    var optionData = field.options[i];

                    subfields.innerHTML = "";

                    if (typeof optionData !== "undefined" && typeof optionData.fields !== "undefined") {
                        var len = optionData.fields.length;
                        for (var i = 0; i < len; i++) {
                            var f = optionData.fields[i];
                            subfields.appendChild(that.buildField(f));
                        }
                    }
                });

                var e = new Event("change");
                select.dispatchEvent(e);

                div.appendChild(select);

            } else if (field.fieldType === "select_multiple") {

                var select = document.createElement("select");
                select.classList.add("form-control");
                select.classList.add("field-select-multiple");
                select.name = field.name;
                select.multiple = true;

                var originalOption = document.createElement('option');
                var len = field.options.length;
                for (var i = 0; i < len; i++) {
                    var optionData = field.options[i];
                    var option = originalOption.cloneNode(true);
                    option.value = optionData.name;
                    option.innerHTML = optionData.label;
                    option.dataset.idx = i;
                    select.appendChild(option);
                }

                select.addEventListener('change', function(){
                    var option = $(this).find("> :selected");
                    var i = option.data("idx");
                    var optionData = field.options[i];

                    subfields.innerHTML = "";

                    if (typeof optionData !== "undefined" && typeof optionData.fields !== "undefined") {
                        var len = optionData.fields.length;
                        for (var i = 0; i < len; i++) {
                            var f = optionData.fields[i];
                            subfields.appendChild(that.buildField(f));
                        }
                    }
                });

                var e = new Event("change");
                select.dispatchEvent(e);

                div.appendChild(select);

            } else if (field.fieldType === "text") {

                var input = document.createElement("input");
                input.setAttribute("type", "text");
                input.classList.add("form-control");
                input.name = field.name;
                div.appendChild(input);

            } else if (field.fieldType === "textarea") {

                var id = "textarea-" + Math.floor(Math.random() * 100000);
                var textarea = document.createElement("textarea");
                textarea.classList.add("form-control");
                textarea.name = field.name;
                textarea.id = id;
                div.appendChild(textarea);

            }

            if (field.hint) {
                var p = document.createElement("p");
                p.classList.add("hint");
                p.innerText = field.hint;
                div.appendChild(p);
            }

            div.appendChild(subfields);

            return div;
        },

        collectData: function (fields) {
            fields = fields || this.element.find(".action");
            var out = [];
            var that = this;
            fields.each(function() {
                var input = $(this).find("> :input, > .jstEditor > :input");
                var subfields = $(this).find("> .subfields > .field");
                var action = {name: input.attr("name"), value: input.val()};
                if(subfields.length > 0) {
                    action.fields = that.collectData(subfields);
                }
                out.push(action);
            });
            return out;
        },

        _findField: function (fieldName) {
            var len = this.fields.length;
            for (var i = 0; i < len; i++) {
                if (this.fields[i].name === fieldName) {
                    return this.fields[i];
                }
            }
        }
    };

})(jQuery);