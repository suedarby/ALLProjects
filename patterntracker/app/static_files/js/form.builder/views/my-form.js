/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @description JavaScript Form Builder for Easy Forms
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 *
 * Based on:
 * Bootstrap 2.3.1 Form Builder
 * Copyright (C) 2012 Adam Moore
 * Licensed under MIT (https://github.com/minikomi/Bootstrap-Form-Builder/blob/gh-pages/LICENSE)
 */

define([
    "jquery", "underscore", "backbone", "prism", "clipboard"
    , "models/steps"
    , "views/my-form-steps"
    , "views/temp-widget"
    , "helper/pubsub"
    , "text!templates/app/renderform.html"
], function(
    $, _, Backbone, Prism, ClipboardJS
    , StepsModel
    , MyFormStepsView
    , TempWidgetView
    , PubSub
    , _renderForm
    ){
    return Backbone.View.extend({
        tagName: "fieldset"
        , pageHeader: false
        , className: 'row'
        , initialize: function(options) {
            // var t0 = performance.now();
            this.options = options;
            // Event Listeners
            // Note: When a component is added, two events are triggered (add and change).
            // But, add is necessary to maintain order components when exchange positions
            this.collection.on("add", this.onAdd, this);
            this.collection.on("change", this.onChange, this);
            this.collection.on("remove", this.onRemove, this);
            PubSub.on("myComponentDrag", this.handleComponentDrag, this);
            PubSub.on("myComponentDelete", this.handleComponentDelete, this);
            PubSub.on("myComponentCopy", this.handleComponentCopy, this);
            PubSub.on("renderForm", this.render, this);
            PubSub.on("tempMove", this.handleTempMove, this);
            PubSub.on("cancelTempMove", this.handleCancelTempMove, this);
            PubSub.on("tempDrop", this.handleTempDrop, this);
            PubSub.on("widgetClick", this.handleWidgetClick, this);
            PubSub.on("changeFormSettings", this.changeFormSettings, this); // Listener from views/tab.js
            PubSub.on("changeFormSteps", this.changeFormSteps, this); // Listener from views/my-form-steps.js
            // Add listeners to document
            $(document).keydown(function(e) {
                // If "ESC" key is pressed
                if (e.keyCode === 27) {
                    // Close all popovers
                    $(".popover").remove();
                    // Cancel Temp Widget
                    PubSub.trigger("cancelTempPostRender", e);
                }
            });
            this.$canvas = $(this.options.settings.canvas);
            this.renderForm = _.template(_renderForm);
            this.hasSteps = (this.collection.pageBreaks().length > 0);
            this.stepsModel = new StepsModel(this.options.settings.formSteps);
            this.pageHeader = new MyFormStepsView({
                pageBreaks: this.collection.pageBreaks(),
                model: this.stepsModel // Set Pagination Model
            });
            this.collection.loadViews();
            this.htmlCollection = '';

            // var t1 = performance.now();
            // console.log("Call to form:initialize took", (t1 - t0), "milliseconds. With", this.collection.length, "components.");
            this.updateLayout();
            this.render();
        }

        , onAdd: function (model, collection, opts) {
            this.hasSteps = (this.collection.pageBreaks().length > 0);
            if (!_.isUndefined(model)) {
                this.collection.addViewByModel(model);
            }
            this.render();
        }

        , onChange: function (model, collection, opts) {
            if (_.isUndefined(model)) {
                // Render when a model property is updated
                this.render();
            }
        }

        , onRemove: function (model, collection, opts) {
            this.hasSteps = (this.collection.pageBreaks().length > 0);
            if (!_.isUndefined(model)) {
                this.collection.removeViewByModel(model);
            }
            // Used by handleTempDrop and handleCancelTempMove
            // Position of removed component
            options.lastIndex = opts.index;
            this.render();
        }

        , render: function() {
            // var t0 = performance.now();
            var that = this;

            if (this.hasSteps) {
                this.renderFormSteps();
            } else {
                // Update steps model with empty steps
                this.stepsModel.setField('steps', []);
            }

            // Render Collection
            this.htmlCollection = '';
            var fragment = document.createDocumentFragment();

            // Insert Steps
            if (this.hasSteps) {
                fragment.appendChild(this.pageHeader.render(true).el);
            }

            // Insert components
            this.collection.each(function (model) {
                var view = that.collection.findViewByModel(model);
                fragment.appendChild(view.render(true, that.options.settings).el);
                that.htmlCollection = that.htmlCollection + "\n" + view.render(false, that.options.settings).htmlCode;
            });

            this.$el.empty();
            this.$el.append(fragment);

            // Show Form
            this.$el.appendTo(this.$canvas.find('form')); // Add fieldset to form
            this.delegateEvents(); // Events
            this.postRender();

            // var t1 = performance.now();
            // console.log("Call to form:render took", (t1 - t0), "milliseconds. With", this.collection.length, "components.");
        }

        , postRender: function () {
            // Save Form HTML code in FormBuilder
            window.FormBuilder.html = this.renderForm({ // Render form that shows source code
                cssClass: this.options.settings.layoutSelected,
                disabled: this.options.settings.disabledFieldset,
                multipart: this.collection.containsFileType(),
                pageHeader: this.hasSteps ? this.pageHeader.$el.html() : '',
                text: this.htmlCollection
            });
            // Print Source Code
            $("#render").text(window.FormBuilder.html);
            Prism.highlightElement($('#render')[0]); // Handle syntax highlighting for code
            var clipboard = new ClipboardJS(".btn-clipboard", {
                target: function(t){return t.nextElementSibling}}
            );
            clipboard.on("success", function (e) {
                e.clearSelection();
                var copyBtn = $(e.trigger);
                copyBtn.text(polyglot.t('form.copied'))
                setTimeout(function() {
                    copyBtn.text(polyglot.t('form.copy'));
                }, 1000);
            });
        }

        , renderFormSteps: function () {
            var steps = this.stepsModel.getField('steps');
            var stepsNumber = this.collection.pageBreaks().length + 1;

            if (stepsNumber > steps.length) {
                // If stepsNumber is >, add steps
                _.times(stepsNumber - steps.length, function(){
                    steps.push('Untitled Step');
                });
            } else if (stepsNumber < steps.length) {
                // If stepsNumber is <, remove steps
                _.times(steps.length - stepsNumber, function(){
                    steps.pop();
                });
            }

            // Update steps model
            this.stepsModel.setField('steps', steps);

            // Add page header view
            this.pageHeader.remove();
            this.pageHeader = new MyFormStepsView({
                pageBreaks: this.collection.pageBreaks(),
                model: this.stepsModel // Set Pagination Model
            });
        }

        , getTargetComponent: function(mouseEvent) {

            // Make an array of all components that have been added to the form
            var allComponents = $(this.$el.find(".component"));

            // Find a component with specific condition
            var topComponent = _.find(allComponents, function(component) {
                var $component = $(component);
                // Vertical position + height > Vertical mouse position
                // Horizontal position + width > Horizontal mouse position
                return (($component.offset().left + $component.outerWidth()) > mouseEvent.pageX &&
                    ($component.offset().top + $component.height()) > mouseEvent.pageY);
            });

            // If a component was found
            if (topComponent){
                return topComponent;
            } else {
                // Return last component
                return allComponents[allComponents.length - 1];
            }
        }

        , getComponentsInTheSameRow: function (mouseEvent) {
            // Make an array of all components that have been added to the form
            var allComponents = $(this.$el.find(".component"));
            // Find components with specific conditions
            var that = this;
            return _.filter(allComponents, function(component) {
                var $component = $(component);
                // Canvas Horizontal position < Horizontal mouse position
                // Component Vertical position < Vertical mouse position
                // Component Vertical position + height > Vertical mouse position
                return (that.$canvas.offset().left < mouseEvent.pageX
                    && $component.offset().top < mouseEvent.pageY
                    && ($component.offset().top + $component.height()) > mouseEvent.pageY);
            });
        }

        , isInTheComponentLeftSide: function (component, mouseEvent) {
            var $component = $(component);
            return $component.offset().left < mouseEvent.pageX
                && ($component.offset().left + 50) > mouseEvent.pageX
                && $component.offset().top < mouseEvent.pageY
                && ($component.offset().top + $component.height()) > mouseEvent.pageY;
        }

        , isInTheComponentRightSide: function (component, mouseEvent) {
            var $component = $(component);
            return $component.offset().left + $component.outerWidth() >= mouseEvent.pageX
                && ($component.offset().left + $component.outerWidth()) - 50 < mouseEvent.pageX
                && $component.offset().top < mouseEvent.pageY
                && ($component.offset().top + $component.height()) > mouseEvent.pageY;
        }

        , isInCanvas: function (mouseEvent) {
            // Horizontal mouse position >= Canvas left position
            // Horizontal mouse position < Canvas right position
            // Vertical mouse position >= Canvas top position
            // Vertical mouse position < Canvas bottom position
            return mouseEvent.pageX >= this.$canvas.offset().left
                && mouseEvent.pageX < (this.$canvas.outerWidth() + this.$canvas.offset().left)
                && mouseEvent.pageY >= this.$canvas.offset().top
                && mouseEvent.pageY < (this.$canvas.height() + this.$canvas.offset().top);
        }

        , isAboveFirstComponent: function (mouseEvent) {
            return !this.hasSteps && mouseEvent.pageY < this.$canvas.offset().top + 50;
        }

        , isAboveComponent: function (component, mouseEvent) {
            var $component = $(component);
            return mouseEvent.pageY < $component.offset().top;
        }

        // When a component is dragged
        , handleComponentDrag: function(mouseEvent, componentModel) {
            $("body").append(new TempWidgetView({model: componentModel}).render());
            this.collection.remove(componentModel);
            PubSub.trigger("newTempPostRender", mouseEvent);
        }

        // When a component is deleted
        , handleComponentDelete: function(componentModel) {
            this.collection.remove(componentModel);
        }

        // When a component is copied
        , handleComponentCopy: function (copiedModel, originalModel) {
            // Only one recaptcha component per form
            if (this.collection.containsRecaptcha()) {
                if(copiedModel.get("name") === 'recaptcha') {
                    return false;
                }
            }
            var index = this.collection.indexOf(originalModel);
            this.collection.add(copiedModel.toJSON(), {at: index});
        }

        , handleTempMove: function (mouseEvent, model) {

            // Smooth Page Scrolling
            // See: http://codereview.stackexchange.com/questions/13111/smooth-page-scrolling-in-javascript
            smoothScrollTo = (function () {
                var timer, start, factor;

                return function (target, duration) {
                    var offset = window.pageYOffset,
                        delta  = target - window.pageYOffset; // Y-offset difference
                    duration = duration || 100;               // default 100 microseconds animation
                    start = Date.now();                       // get start time
                    factor = 0;

                    if (timer) {
                        clearInterval(timer); // stop any running animations
                    }

                    function step() {
                        var y;
                        factor = (Date.now() - start) / duration; // get interpolation factor
                        if (factor >= 1) {
                            clearInterval(timer); // stop animation
                            factor = 1;           // clip to max 1.0
                        }
                        y = factor * delta + offset;
                        window.scrollBy(0, y - window.pageYOffset);
                    }

                    timer = setInterval(step, 10);
                    return timer;
                };
            }());

            // Scroll the window when component is dragged over window bounds
            var windowHeight = $(window).height();
            var pixelsAboveTheFold = $(window).scrollTop();

            if (mouseEvent.clientY > windowHeight - 50) {
                // ScrollTo Down
                smoothScrollTo(pixelsAboveTheFold + 50);
            } else if (mouseEvent.clientY < 50) {
                // ScrollTo Up
                smoothScrollTo(pixelsAboveTheFold - 50);
            }

            // Find the target element
            var $target = $(".target");
            this.cleanTarget($target)

            if (this.isInCanvas(mouseEvent)) {
                var targetComponent = this.getTargetComponent(mouseEvent);
                $(targetComponent).addClass("target");

                // Prepend or Append placeholder to target
                var placeholder = $("<div>", {"class": "placeholder " + model.getField("containerClass")});
                if (this.isAboveFirstComponent(mouseEvent)) {
                    $target.before(placeholder);
                } else {
                    var targetHasColumns = !$target.hasClass('component-pagebreak');
                    if (targetHasColumns && this.isInTheComponentRightSide(targetComponent, mouseEvent)) {
                        $(targetComponent).addClass('border-right');
                    } else if (targetHasColumns && this.isInTheComponentLeftSide(targetComponent, mouseEvent)) {
                        $(targetComponent).addClass('border-left');
                    } else {
                        // Reset model to 12 columns
                        model.setField('containerClass', 'col-xs-12');
                        if (this.isAboveComponent(targetComponent, mouseEvent)) {
                            $target.before(placeholder);
                        } else {
                            $target.after(placeholder);
                        }
                    }
                }
            }
        }

        , handleCancelTempMove: function (model) {
            // Triggered by ESC key
            var $target = $(".target");
            this.cleanTarget($target)
            this.collection.add(model, {at: options.lastIndex});
        }

        , handleTempDrop: function(mouseEvent, model, index){
            var that = this;
            var $target = $(".target");

            // Validate
            if (!this.isValidModel(model)) {
                this.cleanTarget($target);
                return false;
            }

            // Add component in correct place
            if (this.isInCanvas(mouseEvent)) {
                var i = $target.index();

                if (mouseEvent.pageY < this.$canvas.offset().top + 50) {
                    // Before first component
                    this.collection.add(model, {at: 0});
                } else {
                    var isInTheComponentLeftSide = this.isInTheComponentLeftSide($target[0], mouseEvent);
                    var isInTheComponentRightSide = this.isInTheComponentRightSide($target[0], mouseEvent);
                    var targetHasColumns = !$target.hasClass('component-pagebreak');
                    if (targetHasColumns && (isInTheComponentLeftSide || isInTheComponentRightSide)) {
                        var cols = 12;
                        var componentsInTheSameRow = this.getComponentsInTheSameRow(mouseEvent);
                        var columns = componentsInTheSameRow.length + 1; // Plus temp component
                        var isValidColumn = _.contains([2, 3, 4], columns);
                        if (isValidColumn) {
                            // Move component before the first component in the same row
                            if (isInTheComponentLeftSide) { --i; }
                            // Calculate column span
                            cols = 12 / columns;
                            // Update models in the same row
                            _.each(componentsInTheSameRow, function (component) {
                                var idx = $(component).index();
                                var at = that.hasSteps ? --idx : idx; // Form Steps is not part of this collection
                                var modelInTheSameRow = that.collection.at(at);
                                if (!_.isUndefined(modelInTheSameRow)) {
                                    modelInTheSameRow.setField('containerClass', 'col-xs-' + cols);
                                    that.collection.set(modelInTheSameRow, {add: false, remove: false, merge: false});
                                }
                            });
                            // Update dropped model
                            if (cols !== 12) {
                                model.setField('containerClass', 'col-xs-' + cols)
                            }
                        }
                    } else if (this.isAboveComponent($target[0], mouseEvent)) {
                        // 2 because target is below the placeholder
                        // and by default the component will be added below the target
                        i = i - 2;
                    }

                    this.collection.add(model, {at: this.hasSteps ? i : ++i});
                }

            } else {
                var form = $("#formId");
                // Confirmation is required to delete a field when a form is being updated
                if (options.endPoint.indexOf("form") > -1 &&
                    form.length > 0 && form.val() !== '' &&
                    !confirm(polyglot.t('alert.confirmToDeleteField'))) {
                        this.collection.add(model, {at: options.lastIndex});
                }
            }

            this.cleanTarget($target)
        }

        , cleanTarget: function ($target) {
            $target.removeClass("target");
            $(".placeholder").remove();
            $(".component").removeClass("border-right border-left");
        }

        , handleWidgetClick: function (mouseEvent, model) {

            // Validate
            if (!this.isValidModel(model)) {
                return false;
            }

            this.collection.add(model);
        }

        , isValidModel: function (model) {

            // Only one recaptcha component per form
            if (this.collection.containsRecaptcha()) {
                if (model.get("name") === 'recaptcha') {
                    return false;
                }
            }

            return true;
        }

        , changeFormSteps: function (formStepsModel) {
            this.options.settings.formSteps = formStepsModel.toJSON();
            this.render();
        }

        , changeFormSettings: function (formSettings){
            this.options.settings.name = formSettings.name;
            this.options.settings.layoutSelected = formSettings.layoutSelected;
            this.options.settings.disabledFieldset = formSettings.disabledFieldset;

            this.updateLayout();
            this.render();
        }

        , updateLayout: function () {
            // Update layout
            this.$canvas.find('form').attr("class", this.options.settings.layoutSelected); // Update form css class
            this.$canvas.find("fieldset").attr("disabled", this.options.settings.disabledFieldset); // Form disabled
            if (this.options.settings.layoutSelected === 'form-inline') {
                this.$el.removeClass("row");
            } else {
                this.$el.addClass("row");
            }
        }

    })
});