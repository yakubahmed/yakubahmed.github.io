CKEditor 4 Changelog
====================

## CKEditor 4.12.1

Fixed Issues:

* [#3220](https://github.com/ckeditor/ckeditor-dev/issues/3220): Fixed: Prevent [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) filter from deleting [Page Break](https://ckeditor.com/cke4/addon/pagebreak) elements on paste.

## CKEditor 4.12

New Features:

* [#2598](https://github.com/ckeditor/ckeditor-dev/issues/2598): Added the [Page Break](https://ckeditor.com/cke4/addon/pagebreak) feature support for the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#1490](https://github.com/ckeditor/ckeditor-dev/issues/1490): Improved the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin to retain table cell borders.
* [#2870](https://github.com/ckeditor/ckeditor-dev/issues/2870): Improved support for preserving the indentation of list items for nested lists pasted with the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#2048](https://github.com/ckeditor/ckeditor-dev/issues/2048): New [`CKEDITOR.config.image2_maxSize`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-image2_maxSize) configuration option for the [Enhanced Image](https://ckeditor.com/cke4/addon/image2) plugin that allows setting a maximum size that an image can be resized to with the resizer.
* [#2639](https://github.com/ckeditor/ckeditor-dev/issues/2639): The [Color Dialog](https://ckeditor.com/cke4/addon/colordialog) plugin now shows the current selection's color when opened.
* [#2084](https://github.com/ckeditor/ckeditor-dev/issues/2084): The [Table Tools](https://ckeditor.com/cke4/addon/tabletools) plugin now allows to change the cell height unit type to either pixels or percent.
* [#3164](https://github.com/ckeditor/ckeditor-dev/issues/3164): The [Table Tools](https://ckeditor.com/cke4/addon/tabletools) plugin now accepts floating point values as the table cell width and height.

Fixed Issues:

* [#2672](https://github.com/ckeditor/ckeditor-dev/issues/2672): Fixed: When resizing an [Enhanced Image](https://ckeditor.com/cke4/addon/image2) to a minimum size with the resizer, the image dialog does not show actual values.
* [#1478](https://github.com/ckeditor/ckeditor-dev/issues/1478): Fixed: Custom colors added to [Color Button](https://ckeditor.com/cke4/addon/colorbutton) with the [`config.colorButton_colors`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-colorButton_colors) configuration option in the form of a label or code do not work correctly.
* [#1469](https://github.com/ckeditor/ckeditor-dev/issues/1469): Fixed: Trying to get data from a nested editable inside a freshly pasted widget throws an error.
* [#2235](https://github.com/ckeditor/ckeditor-dev/issues/2235): Fixed: An [Image](https://ckeditor.com/cke4/addon/image) in a table cell has an empty URL field when edited from the context menu opened by right-click when the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin is in use.
* [#3098](https://github.com/ckeditor/ckeditor-dev/issues/3098): Fixed: Unit pickers for table cell width and height in the [Table Tools](https://ckeditor.com/cke4/addon/tabletools) plugin have a different width.
* [#2923](https://github.com/ckeditor/ckeditor-dev/issues/2923): Fixed: The CSS `windowtext` color is not correctly recognized by the [`CKEDITOR.tools.style.parse`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_parse.html) methods.
* [#3120](https://github.com/ckeditor/ckeditor-dev/issues/3120): [IE8] Fixed: The [`CKEDITOR.tools.extend()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tool.html#method-extend) method does not work with the [`DontEnum`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#Properties) object property attribute.
* [#2813](https://github.com/ckeditor/ckeditor-dev/issues/2813): Fixed: Editor HTML insertion methods ([`editor.insertHtml()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertHtml), [`editor.insertHtmlIntoRange()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertHtmlIntoRange), [`editor.insertElement()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertElement) and [`editor.insertElementIntoRange()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertElementIntoRange)) pollute the editable with empty `<span>` elements.
* [#2751](https://github.com/ckeditor/ckeditor-dev/issues/2751): Fixed: An editor with [`config.enterMode`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enterMode) set to [`ENTER_DIV`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#property-ENTER_DIV) alters pasted content.

API Changes:

* [#1496](https://github.com/ckeditor/ckeditor-dev/issues/1496): The [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) plugin exposes the [`CKEDITOR.ui.balloonToolbar.reposition()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_balloonToolbar.html#reposition) and [`CKEDITOR.ui.balloonToolbarView.reposition()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_balloonToolbarView.html#reposition) methods.
* [#2021](https://github.com/ckeditor/ckeditor-dev/issues/2021): Added new [`CKEDITOR.dom.documentFragment.find()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_documentFragment.html#method-find) and [`CKEDITOR.dom.documentFragment.findOne()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_documentFragment.html#method-findOne) methods.
* [#2700](https://github.com/ckeditor/ckeditor-dev/issues/2700): Added the [`CKEDITOR.tools.array.find()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_array.html#method-find) method.
* [#3123](https://github.com/ckeditor/ckeditor-dev/issues/3123): Added the [`CKEDITOR.tools.object.keys()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-keys) method.
* [#3123](https://github.com/ckeditor/ckeditor-dev/issues/3123): Added the [`CKEDITOR.tools.object.entries()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-entries) method.
* [#3123](https://github.com/ckeditor/ckeditor-dev/issues/3123): Added the [`CKEDITOR.tools.object.values()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-values) method.
* [#2821](https://github.com/ckeditor/ckeditor-dev/issues/2821): The [`CKEDITOR.template#source`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_template.html#property-source) property can now be a function, so it can return the changed template values during the runtime. Thanks to [Jacek Pulit](https://github.com/jacek-pulit)!
* [#2598](https://github.com/ckeditor/ckeditor-dev/issues/2598): Added the [`CKEDITOR.plugins.pagebreak.createElement()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_pagebreak.html#method-createElement) method allowing to create a [Page Break](https://ckeditor.com/cke4/addon/pagebreak) plugin [`CKEDITOR.dom.element`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html) instance.
* [#2748](https://github.com/ckeditor/ckeditor-dev/issues/2748): Enhanced error messages thrown when creating an editor on a non-existent element or when trying to instantiate the second editor on the same element. Thanks to [Byran Zaugg](https://github.com/blzaugg)!
* [#2698](https://github.com/ckeditor/ckeditor-dev/issues/2698): Added the [`CKEDITOR.htmlParser.element.findOne()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_htmlParser_element.html#method-findOne) method.
* [#2935](https://github.com/ckeditor/ckeditor-dev/issues/2935): Introduced the [`CKEDITOR.config.pasteFromWord_keepZeroMargins`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWord_keepZeroMargins) configuration option that allows for keeping any `margin-*: 0` style that would be otherwise removed when pasting content with the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#2962](https://github.com/ckeditor/ckeditor-dev/issues/2962): Added the [`CKEDITOR.tools.promise`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_promise.html) class.
* [#2924](https://github.com/ckeditor/ckeditor-dev/issues/2924): Added the [`CKEDITOR.tools.style.border`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_border.html) object wrapping CSS border style helpers under a single type.
* [#2495](https://github.com/ckeditor/ckeditor-dev/issues/2495): The [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin can now be disabled for the given table with the `data-cke-tableselection-ignored` attribute.
* [#2692](https://github.com/ckeditor/ckeditor-dev/issues/2692): Plugins can now expose information about the supported environment by implementing the [`pluginDefinition.isSupportedEnvironment()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_pluginDefinition.html#method-isSupportedEnvironment) method.

Other Changes:

* [#2741](https://github.com/ckeditor/ckeditor-dev/issues/2741): Replaced deprecated `arguments.callee` calls with named function expressions to allow the editor to work in strict mode.
* [#2924](https://github.com/ckeditor/ckeditor-dev/issues/2924): Marked [`CKEDITOR.tools.style.parse.border()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_parse.html#method-border) as deprecated in favor of the [`CKEDITOR.tools.style.border.fromCssRule()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_border.html#static-method-fromCssRule) method.
* [#3132](https://github.com/ckeditor/ckeditor-dev/issues/2924): Marked [`CKEDITOR.tools.objectKeys()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-objectKeys) as deprecated in favor of the [`CKEDITOR.tools.object.keys()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-keys) method.

## CKEditor 4.11.4

Fixed Issues:

* [#589](https://github.com/ckeditor/ckeditor-dev/issues/589): Fixed: The editor causes memory leaks in create and destroy cycles.
* [#1397](https://github.com/ckeditor/ckeditor-dev/issues/1397): Fixed: Using the dialog to remove headers from a [table](https://ckeditor.com/cke4/addon/table) with one header row only throws an error.
* [#1479](https://github.com/ckeditor/ckeditor-dev/issues/1479): Fixed: [Justification](https://ckeditor.com/cke4/addon/justify) for styled content in BR mode is disabled.
* [#2816](https://github.com/ckeditor/ckeditor-dev/issues/2816): Fixed: [Enhanced Image](https://ckeditor.com/cke4/addon/image2) resize handler is visible in [read-only mode](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html).
* [#2874](https://github.com/ckeditor/ckeditor-dev/issues/2874): Fixed: [Enhanced Image](https://ckeditor.com/cke4/addon/image2) resize handler is not created when the editor is initialized in [read-only mode](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html).
* [#2775](https://github.com/ckeditor/ckeditor-dev/issues/2775): Fixed: [Clipboard](https://ckeditor.com/cke4/addon/clipboard) paste buttons have wrong state when [read-only](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html) mode is set by the mouse event listener with the [Div Editing Area](https://ckeditor.com/cke4/addon/divarea) plugin.
* [#1901](https://github.com/ckeditor/ckeditor-dev/issues/1901): Fixed: Cannot open the context menu over a [Widget](https://ckeditor.com/cke4/addon/widget) with the <kbd>Shift</kbd>+<kbd>F10</kbd> keyboard shortcut.

Other Changes:

* Updated [WebSpellChecker](https://ckeditor.com/cke4/addon/wsc) (WSC) and [SpellCheckAsYouType](https://ckeditor.com/cke4/addon/scayt) (SCAYT) plugins:
	* Language dictionary update: German language was extended with over 600k new words.
	* Language dictionary update: Swedish language was extended with over 300k new words.
	* Grammar support added for Australian and New Zealand English, Polish, Slovak, Slovenian and Austrian languages.
	* Changed wavy red and green lines that underline spelling and grammar errors to straight ones.
	* [#55](https://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/55): Fixed: WSC does not use [`CKEDITOR.getUrl()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#method-getUrl) when referencing style sheets.
	* [#166](https://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/166): Fixed: SCAYT does not use [`CKEDITOR.getUrl()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#method-getUrl) when referencing style sheets.
	* [#56](https://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/56): [Chrome] Fixed: SCAYT/WSC throws errors when running inside a  Chrome extension.
	* Fixed: After removing a dictionary, the words are not underlined and considered as incorrect.
	* Fixed: The Slovenian (`sl_SL`) language does not work.
	* Fixed: Quotes with code `U+2019` (Right single quotation mark) are considered separators.
	* Fixed: Wrong error message formatting when the service ID is invalid.
	* Fixed: Absent languages in the Languages tab when using SCAYT with the [Shared Spaces](https://ckeditor.com/cke4/addon/sharedspace) plugin.

## CKEditor 4.11.3

Fixed Issues:

* [#2721](https://github.com/ckeditor/ckeditor-dev/issues/2721), [#487](https://github.com/ckeditor/ckeditor-dev/issues/487): Fixed: The order of sublist items is reversed when a higher level list item is removed.
* [#2527](https://github.com/ckeditor/ckeditor-dev/issues/2527): Fixed: [Emoji](https://ckeditor.com/cke4/addon/emoji) autocomplete order does not prioritize emojis with the name starting from the used string.
* [#2572](https://github.com/ckeditor/ckeditor-dev/issues/2572): Fixed: Icons in the [Emoji](https://ckeditor.com/cke4/addon/emoji) dropdown navigation groups are not centered.
* [#1191](https://github.com/ckeditor/ckeditor-dev/issues/1191): Fixed: Items in the [elements path](https://ckeditor.com/cke4/addon/elementspath) are draggable.
* [#2292](https://github.com/ckeditor/ckeditor-dev/issues/2292): Fixed: Dropping a list with a link on the editor's margin causes a console error and removes the dragged text from editor.
* [#2756](https://github.com/ckeditor/ckeditor-dev/issues/2756): Fixed: The [Auto Link](https://ckeditor.com/cke4/addon/autolink) plugin causes an error when typing in the [source editing mode](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_sourcearea.html).
* [#1986](https://github.com/ckeditor/ckeditor-dev/issues/1986): Fixed: The Cell Properties dialog from the [Table Tools](https://ckeditor.com/cke4/addon/tabletools) plugin shows styles that are not allowed through [`config.allowedContent`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-allowedContent).
* [#2565](https://github.com/ckeditor/ckeditor-dev/issues/2565): [IE, Edge] Fixed: Buttons in the [editor toolbar](https://ckeditor.com/cke4/addon/toolbar) are activated by clicking them with the right mouse button.
* [#2792](https://github.com/ckeditor/ckeditor-dev/pull/2792): Fixed: A bug in the [Copy Formatting](https://ckeditor.com/cke4/addon/copyformatting) plugin that caused the following issues:
    * [#2780](https://github.com/ckeditor/ckeditor-dev/issues/2780): Fixed: Undo steps disappear after multiple changes of selection.
    * [#2470](https://github.com/ckeditor/ckeditor-dev/issues/2470): [Firefox] Fixed: Widget's nested editable gets blurred upon focus.
    * [#2655](https://github.com/ckeditor/ckeditor-dev/issues/2655): [Chrome, Safari] Fixed: Widget's nested editable cannot be focused under certain circumstances.

## CKEditor 4.11.2

Fixed Issues:

* [#2403](https://github.com/ckeditor/ckeditor-dev/issues/2403): Fixed: Styling inline editor initialized inside a table with the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin is causing style leaks.
* [#2514](https://github.com/ckeditor/ckeditor-dev/issues/2403): Fixed: Pasting table data into inline editor initialized inside a table with the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin inserts pasted content into the wrapping table.
* [#2451](https://github.com/ckeditor/ckeditor-dev/issues/2451): Fixed: The [Remove Format](https://ckeditor.com/cke4/addon/removeformat) plugin changes selection.
* [#2546](https://github.com/ckeditor/ckeditor-dev/issues/2546): Fixed: The separator in the toolbar moves when buttons are focused.
* [#2506](https://github.com/ckeditor/ckeditor-dev/issues/2506): Fixed: [Enhanced Image](https://ckeditor.com/cke4/addon/image2) throws a type error when an empty `<figure>` tag with an `image` class is upcasted.
* [#2650](https://github.com/ckeditor/ckeditor-dev/issues/2650): Fixed: [Table](https://ckeditor.com/cke4/addon/table) dialog validator fails when the `getValue()` function is defined in the global scope.
* [#2690](https://github.com/ckeditor/ckeditor-dev/issues/2690): Fixed: Decimal characters are removed from the inside of numbered lists when pasting content using the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#2205](https://github.com/ckeditor/ckeditor-dev/issues/2205): Fixed: It is not possible to add new list items under an item containing a block element.
* [#2411](https://github.com/ckeditor/ckeditor-dev/issues/2411), [#2438](https://github.com/ckeditor/ckeditor-dev/issues/2438) Fixed: Apply numbered list option throws a console error for a specific markup.
* [#2430](https://github.com/ckeditor/ckeditor-dev/issues/2430) Fixed: [Color Button](https://ckeditor.com/cke4/addon/colorbutton) and [List Block](https://ckeditor.com/cke4/addon/listblock) items are draggable.

Other Changes:

* Updated the [WebSpellChecker](https://ckeditor.com/cke4/addon/wsc) (WSC) plugin:
	* [#52](https://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/52) Fixed: Clicking "Finish Checking" without a prior action would hang the Spell Checking dialog.
* [#2603](https://github.com/ckeditor/ckeditor-dev/issues/2603): Corrected the GPL license entry in the `package.json` file.

## CKEditor 4.11.1

Fixed Issues:

* [#2571](https://github.com/ckeditor/ckeditor-dev/issues/2571): Fixed: Clicking the categories in the [Emoji](https://ckeditor.com/cke4/addon/emoji) dropdown panel scrolls the entire page.

## CKEditor 4.11

**Security Updates:**

* Fixed XSS vulnerability in the HTML parser reported by [maxarr](https://hackerone.com/maxarr).

	Issue summary: It was possible to execute XSS inside CKEditor after persuading the victim to: (i) switch CKEditor to source mode, then (ii) paste a specially crafted HTML code, prepared by the attacker, into the opened CKEditor source area, and (iii) switch back to WYSIWYG mode.

**An upgrade is highly recommended!**

New Features:

* [#2062](https://github.com/ckeditor/ckeditor-dev/pull/2062): Added the emoji dropdown that allows the user to choose the emoji from the toolbar and search for them using keywords.
* [#2154](https://github.com/ckeditor/ckeditor-dev/issues/2154): The [Link](https://ckeditor.com/cke4/addon/link) plugin now supports phone number links.
* [#1815](https://github.com/ckeditor/ckeditor-dev/issues/1815): The [Auto Link](https://ckeditor.com/cke4/addon/autolink) plugin supports typing link completion.
* [#2478](https://github.com/ckeditor/ckeditor-dev/issues/2478): [Link](https://ckeditor.com/cke4/addon/link) can be inserted using the <kbd>Ctrl</kbd>/<kbd>Cmd</kbd> + <kbd>K</kbd> keystroke.
* [#651](https://github.com/ckeditor/ckeditor-dev/issues/651): Text pasted using the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin preserves indentation in paragraphs.
* [#2248](https://github.com/ckeditor/ckeditor-dev/issues/2248): Added support for justification in the [BBCode](https://ckeditor.com/cke4/addon/bbcode) plugin. Thanks to [Matěj Kmínek](https://github.com/KminekMatej)!
* [#706](https://github.com/ckeditor/ckeditor-dev/issues/706): Added a different cursor style when selecting cells for the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin.
* [#2072](https://github.com/ckeditor/ckeditor-dev/issues/2072): The [UI Button](https://ckeditor.com/cke4/addon/button) plugin supports custom `aria-haspopup` property values. The [Menu Button](https://ckeditor.com/cke4/addon/menubutton) `aria-haspopup` value is now `menu`, the [Panel Button](https://ckeditor.com/cke4/addon/panelbutton) and [Rich Combo](https://ckeditor.com/cke4/addon/richcombo) `aria-haspopup` value is now `listbox`.
* [#1176](https://github.com/ckeditor/ckeditor-dev/pull/1176): The [Balloon Panel](https://ckeditor.com/cke4/addon/balloonpanel) can now be attached to a selection instead of an element.
* [#2202](https://github.com/ckeditor/ckeditor-dev/issues/2202): Added the `contextmenu_contentsCss` configuration option to allow adding custom CSS to the [Context Menu](https://ckeditor.com/cke4/addon/contextmenu).

Fixed Issues:

* [#1477](https://github.com/ckeditor/ckeditor-dev/issues/1477): Fixed: On destroy, [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) does not destroy its content.
* [#2394](https://github.com/ckeditor/ckeditor-dev/issues/2394): Fixed: [Emoji](https://ckeditor.com/cke4/addon/emoji) dropdown does not show up with repeated symbols in a single line.
* [#1181](https://github.com/ckeditor/ckeditor-dev/issues/1181): [Chrome] Fixed: Opening the context menu in a read-only editor results in an error.
* [#2276](https://github.com/ckeditor/ckeditor-dev/issues/2276): [iOS] Fixed: [Button](https://ckeditor.com/cke4/addon/button) state does not refresh properly.
* [#1489](https://github.com/ckeditor/ckeditor-dev/issues/1489): Fixed: Table contents can be removed in read-only mode when the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin is used.
* [#1264](https://github.com/ckeditor/ckeditor-dev/issues/1264) Fixed: Right-click does not clear the selection created with the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin.
* [#586](https://github.com/ckeditor/ckeditor-dev/issues/586) Fixed: The `required` attribute is not correctly recognized by the [Form Elements](https://ckeditor.com/cke4/addon/forms) plugin dialog. Thanks to [Roli Züger](https://github.com/rzueger)!
* [#2380](https://github.com/ckeditor/ckeditor-dev/issues/2380) Fixed: Styling HTML comments in a top-level element results in extra paragraphs.
* [#2294](https://github.com/ckeditor/ckeditor-dev/issues/2294) Fixed: Pasting content from Microsoft Outlook and then bolding it results in an error.
* [#2035](https://github.com/ckeditor/ckeditor-dev/issues/2035) [Edge] Fixed: `Permission denied` is thrown when opening a [Panel](https://ckeditor.com/cke4/addon/panel) instance.
* [#965](https://github.com/ckeditor/ckeditor-dev/issues/965) Fixed: The [`config.forceSimpleAmpersand`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-forceSimpleAmpersand) option does not work. Thanks to [Alex Maris](https://github.com/alexmaris)!
* [#2448](https://github.com/ckeditor/ckeditor-dev/issues/2448): Fixed: The [`Escape HTML Entities`] plugin with custom [additional entities](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-entities_additional) configuration breaks HTML escaping.
* [#898](https://github.com/ckeditor/ckeditor-dev/issues/898): Fixed: [Enhanced Image](https://ckeditor.com/cke4/addon/image2) long alternative text protrudes into the editor when the image is selected.
* [#1113](https://github.com/ckeditor/ckeditor-dev/issues/1113): [Firefox] Fixed: Nested contenteditable elements path is not updated on focus with the [Div Editing Area](https://ckeditor.com/cke4/addon/divarea) plugin.
* [#1682](https://github.com/ckeditor/ckeditor-dev/issues/1682) Fixed: Hovering the [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) panel changes its size, causing flickering.
* [#421](https://github.com/ckeditor/ckeditor-dev/issues/421) Fixed: Expandable [Button](https://ckeditor.com/cke4/addon/button) puts the `(Selected)` text at the end of the label when clicked.
* [#1454](https://github.com/ckeditor/ckeditor-dev/issues/1454): Fixed: The [`onAbort`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_fileTools_uploadWidgetDefinition.html#property-onAbort) method of the [Upload Widget](https://ckeditor.com/cke4/addon/uploadwidget) is not called when the loader is aborted.
* [#1451](https://github.com/ckeditor/ckeditor-dev/issues/1451): Fixed: The context menu is incorrectly positioned when opened with <kbd>Shift</kbd>+<kbd>F10</kbd>.
* [#1722](https://github.com/ckeditor/ckeditor-dev/issues/1722): [`CKEDITOR.filter.instances`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_filter.html#static-property-instances) is causing memory leaks.
* [#2491](https://github.com/ckeditor/ckeditor-dev/issues/2491): Fixed: The [Mentions](https://ckeditor.com/cke4/addon/mentions) plugin is not matching diacritic characters.
* [#2519](https://github.com/ckeditor/ckeditor-dev/issues/2519): Fixed: The [Accessibility Help](https://ckeditor.com/cke4/addon/a11yhelp) dialog should display all available keystrokes for a single command.

API Changes:

* [#2453](https://github.com/ckeditor/ckeditor-dev/issues/2453): The [`CKEDITOR.ui.panel.block.getItems`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_panel_block.html#method-getItems) method now also returns `input` elements in addition to links.
* [#2224](https://github.com/ckeditor/ckeditor-dev/issues/2224):  The [`CKEDITOR.tools.convertToPx`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-convertToPx) function now converts negative values.
* [#2253](https://github.com/ckeditor/ckeditor-dev/issues/2253): The widget definition [`insert`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-insert) method now passes `editor` and `commandData`. Thanks to [marcparmet](https://github.com/marcparmet)!
* [#2045](https://github.com/ckeditor/ckeditor-dev/issues/2045): Extracted [`tools.eventsBuffer`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-eventsBuffer) and [`tools.throttle`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-throttle) functions logic into a separate namespace.
	* [`tools.eventsBuffer`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-eventsBuffer) was extracted into [`tools.buffers.event`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_buffers_event.html),
	* [`tools.throttle`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-throttle) was extracted into [`tools.buffers.throttle`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_buffers_throttle.html).
* [#2466](https://github.com/ckeditor/ckeditor-dev/issues/2466):  The [`CKEDITOR.filter`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-constructor) constructor accepts an additional `rules` parameter allowing to bind the editor and filter together.
* [#2493](https://github.com/ckeditor/ckeditor-dev/issues/2493):  The [`editor.getCommandKeystroke`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getCommandKeystroke) method accepts an additional `all` parameter allowing to retrieve an array of all command keystrokes.
* [#2483](https://github.com/ckeditor/ckeditor-dev/issues/2483): Button's DOM element created with the [`hasArrow`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui.html#method-addButton) definition option can by identified by the `.cke_button_expandable` CSS class.

Other Changes:

* [#1713](https://github.com/ckeditor/ckeditor-dev/issues/1713): Removed the redundant `lang.title` entry from the [Clipboard](https://ckeditor.com/cke4/addon/clipboard) plugin.

## CKEditor 4.10.1

Fixed Issues:

* [#2114](https://github.com/ckeditor/ckeditor-dev/issues/2114): Fixed: [Autocomplete](https://ckeditor.com/cke4/addon/autocomplete) cannot be initialized before [`instanceReady`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-instanceReady).
* [#2107](https://github.com/ckeditor/ckeditor-dev/issues/2107): Fixed: Holding and releasing the mouse button is not inserting an [autocomplete](https://ckeditor.com/cke4/addon/autocomplete) suggestion.
* [#2167](https://github.com/ckeditor/ckeditor-dev/issues/2167): Fixed: Matching in [Emoji](https://ckeditor.com/cke4/addon/emoji) plugin is not case insensitive.
* [#2195](https://github.com/ckeditor/ckeditor-dev/issues/2195): Fixed: [Emoji](https://ckeditor.com/cke4/addon/emoji) shows the suggestion box when the colon is preceded with other characters than white space.
* [#2169](https://github.com/ckeditor/ckeditor-dev/issues/2169): [Edge] Fixed: Error thrown when pasting into the editor.
* [#1084](https://github.com/ckeditor/ckeditor-dev/issues/1084) Fixed: Using the "Automatic" option with [Color Button](https://ckeditor.com/cke4/addon/colorbutton) on a text with the color already defined sets an invalid color value.
* [#2271](https://github.com/ckeditor/ckeditor-dev/issues/2271): Fixed: Custom color name not used as a label in the [Color Button](https://ckeditor.com/cke4/addon/image2) plugin. Thanks to [Eric Geloen](https://github.com/egeloen)!
* [#2296](https://github.com/ckeditor/ckeditor-dev/issues/2296): Fixed: The [Color Button](https://ckeditor.com/cke4/addon/colorbutton) plugin throws an error when activated on content containing HTML comments.
* [#966](https://github.com/ckeditor/ckeditor-dev/issues/966): Fixed: Executing [`editor.destroy()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-destroy) during the [file upload](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_fileTools_uploadWidgetDefinition.html#property-onUploading) throws an error. Thanks to [Maksim Makarevich](https://github.com/MaksimMakarevich)!
* [#1719](https://github.com/ckeditor/ckeditor-dev/issues/1719): Fixed: <kbd>Ctrl</kbd>/<kbd>Cmd</kbd> + <kbd>A</kbd> inadvertently focuses inline editor if it is starting and ending with a list. Thanks to [theNailz](https://github.com/theNailz)!
* [#1046](https://github.com/ckeditor/ckeditor-dev/issues/1046): Fixed: Subsequent new links do not include the `id` attribute. Thanks to [Nathan Samson](https://github.com/nathansamson)!
* [#1348](https://github.com/ckeditor/ckeditor-dev/issues/1348): Fixed: [Enhanced Image](https://ckeditor.com/cke4/addon/image2) plugin aspect ratio locking uses an old width and height on image URL change.
* [#1791](https://github.com/ckeditor/ckeditor-dev/issues/1791): Fixed: [Image](https://ckeditor.com/cke4/addon/image) and [Enhanced Image](https://ckeditor.com/cke4/addon/image2) plugins can be enabled when [Easy Image](https://ckeditor.com/cke4/addon/easyimage) is present.
* [#2254](https://github.com/ckeditor/ckeditor-dev/issues/2254): Fixed: [Image](https://ckeditor.com/cke4/addon/image) ratio locking is too precise for resized images. Thanks to [Jonathan Gilbert](https://github.com/logiclrd)!
* [#1184](https://github.com/ckeditor/ckeditor-dev/issues/1184): [IE8-11] Fixed: Copying and pasting data in [read-only mode](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) throws an error.
* [#1916](https://github.com/ckeditor/ckeditor-dev/issues/1916): [IE9-11] Fixed: Pressing the <kbd>Delete</kbd> key in [read-only mode](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) throws an error.
* [#2003](https://github.com/ckeditor/ckeditor-dev/issues/2003): [Firefox] Fixed: Right-clicking multiple selected table cells containing empty paragraphs removes the selection.
* [#1816](https://github.com/ckeditor/ckeditor-dev/issues/1816): Fixed: Table breaks when <kbd>Enter</kbd> is pressed over the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin.
* [#1115](https://github.com/ckeditor/ckeditor-dev/issues/1115): Fixed: The `<font>` tag is not preserved when proper configuration is provided and a style is applied by the [Font](https://ckeditor.com/cke4/addon/font) plugin.
* [#727](https://github.com/ckeditor/ckeditor-dev/issues/727): Fixed: Custom styles may be invisible in the [Styles Combo](https://ckeditor.com/cke4/addon/stylescombo) plugin.
* [#988](https://github.com/ckeditor/ckeditor-dev/issues/988): Fixed: ACF-enabled custom elements prefixed with `object`, `embed`, `param` are removed from the editor content.

API Changes:

* [#2249](https://github.com/ckeditor/ckeditor-dev/issues/1791): Added the [`editor.plugins.detectConflict()`](https://ckeditor.com/docs/ckeditor4/latest/CKEDITOR_editor_plugins.html#method-detectConflict) method finding conflicts between provided plugins.

## CKEditor 4.10

New Features:

* [#1751](https://github.com/ckeditor/ckeditor-dev/issues/1751): Introduced the **Autocomplete** feature that consists of the following plugins:
	* [Autocomplete](https://ckeditor.com/cke4/addon/autocomplete) &ndash; Provides contextual completion feature for custom text matches based on user input.
	* [Text Watcher](https://ckeditor.com/cke4/addon/textWatcher) &ndash; Checks whether an editor's text change matches the chosen criteria.
	* [Text Match](https://ckeditor.com/cke4/addon/textMatch) &ndash; Allows to search [`CKEDITOR.dom.range`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html) for matching text.
* [#1703](https://github.com/ckeditor/ckeditor-dev/issues/1703): Introduced the [Mentions](https://ckeditor.com/cke4/addon/mentions) plugin providing smart completion feature for custom text matches based on user input starting with a chosen marker character.
* [#1746](https://github.com/ckeditor/ckeditor-dev/issues/1703): Introduced the [Emoji](https://ckeditor.com/cke4/addon/emoji) plugin providing completion feature for emoji ideograms.
* [#1761](https://github.com/ckeditor/ckeditor-dev/issues/1761): The [Auto Link](https://ckeditor.com/cke4/addon/autolink) plugin now supports email links.

Fixed Issues:

* [#1458](https://github.com/ckeditor/ckeditor-dev/issues/1458): [Edge] Fixed: After blurring the editor it takes 2 clicks to focus a widget.
* [#1034](https://github.com/ckeditor/ckeditor-dev/issues/1034): Fixed: JAWS leaves forms mode after pressing the <kbd>Enter</kbd> key in an inline editor instance.
* [#1748](https://github.com/ckeditor/ckeditor-dev/pull/1748): Fixed: Missing [`CKEDITOR.dialog.definition.onHide`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dialog_definition.html#property-onHide) API documentation. Thanks to [sunnyone](https://github.com/sunnyone)!
* [#1321](https://github.com/ckeditor/ckeditor-dev/issues/1321): Fixed: Ideographic space character (`\u3000`) is lost when pasting text.
* [#1776](https://github.com/ckeditor/ckeditor-dev/issues/1776): Fixed: Empty caption placeholder of the [Image Base](https://ckeditor.com/cke4/addon/imagebase) plugin is not hidden when blurred.
* [#1592](https://github.com/ckeditor/ckeditor-dev/issues/1592): Fixed: The [Image Base](https://ckeditor.com/cke4/addon/imagebase) plugin caption is not visible after paste.
* [#620](https://github.com/ckeditor/ckeditor-dev/issues/620): Fixed: The [`config.forcePasteAsPlainText`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-forcePasteAsPlainText) option is not respected in internal and cross-editor pasting.
* [#1467](https://github.com/ckeditor/ckeditor-dev/issues/1467): Fixed: The resizing cursor of the [Table Resize](https://ckeditor.com/cke4/addon/tableresize) plugin appearing in the middle of a merged cell.

API Changes:

* [#850](https://github.com/ckeditor/ckeditor-dev/issues/850): Backward incompatibility: Replaced the `replace` dialog from the [Find / Replace](https://ckeditor.com/cke4/addon/find) plugin with a `tabId` option in the `find` command.
* [#1582](https://github.com/ckeditor/ckeditor-dev/issues/1582): The [`CKEDITOR.editor.addCommand()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-addCommand) method can now accept a [`CKEDITOR.command`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_command.html) instance as a parameter.
* [#1712](https://github.com/ckeditor/ckeditor-dev/issues/1712): The [`extraPlugins`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-extraPlugins), [`removePlugins`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-removePlugins) and [`plugins`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-plugins) configuration options allow whitespace.
* [#1802](https://github.com/ckeditor/ckeditor-dev/issues/1802): The [`extraPlugins`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-extraPlugins), [`removePlugins`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-removePlugins) and [`plugins`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-plugins) configuration options allow passing plugin names as an array.
* [#1724](https://github.com/ckeditor/ckeditor-dev/issues/1724): Added an option to the [`getClientRect()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-getClientRect) function allowing to retrieve an absolute bounding rectangle of the element, i.e. a position relative to the upper-left corner of the topmost viewport.
* [#1498](https://github.com/ckeditor/ckeditor-dev/issues/1498) : Added a new [`getClientRects()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-getClientRects) method to `CKEDITOR.dom.range`. It returns a list of rectangles for each selected element.
* [#1993](https://github.com/ckeditor/ckeditor-dev/issues/1993): Added the [`CKEDITOR.tools.throttle()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-throttle) function.

Other Changes:

* Updated [SCAYT](https://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type) and [WebSpellChecker](https://ckeditor.com/cke4/addon/wsc) (WSC) plugins:
	* Language dictionary update: Added support for the Uzbek Latin language.
	* Languages no longer supported as additional languages: Manx - Isle of Man (`gv_GB`) and Interlingua (`ia_XR`).
	* Extended and improved language dictionaries: Georgian and Swedish. Also added the missing word _"Ensure"_ to the American, British and Canada English language.
	* [#141](https://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/141) Fixed: SCAYT throws "Uncaught Error: Error in RangyWrappedRange module: createRange(): Parameter must be a Window object or DOM node".
	* [#153](https://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/153) [Chrome] Fixed: Correcting a word in the widget in SCAYT moves focus to another editable.
	* [#155](https://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/155) [IE8] Fixed: SCAYT throws an error and does not work.
	* [#156](https://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/156) [IE10] Fixed: SCAYT does not seem to work.
	* Fixed: After some text is dragged and dropped, the markup is not refreshed for grammar problems in SCAYT.
	* Fixed: Request to FastCGI fails when the user tries to replace a word with non-English characters with a proper suggestion in WSC.
	* [Firefox] Fixed: <kbd>Ctrl</kbd>+<kbd>Z</kbd> removes focus in SCAYT.
	* Grammar support for default languages was improved.
	* New application source URL was added in SCAYT.
	* Removed green marks and legend related to grammar-supported languages in the Languages tab of SCAYT. Grammar is now supported for almost all the anguages in the list for an additional fee.
	* Fixed: JavaScript error in the console: "Cannot read property 'split' of undefined" in SCAYT and WSC.
	* [IE10] Fixed: Markup is not set for a specific case in SCAYT.
	* Fixed: Accessibility issue: No `alt` attribute for the logo image in the About tab of SCAYT.

## CKEditor 4.9.2

**Security Updates:**

* Fixed XSS vulnerability in the [Enhanced Image](https://ckeditor.com/cke4/addon/image2) (`image2`) plugin reported by [Kyaw Min Thein](https://twitter.com/kyawminthein99).

	Issue summary: It was possible to execute XSS inside CKEditor using the `<img>` tag and specially crafted HTML. Please note that the default presets (Basic/Standard/Full) do not include this plugin, so you are only at risk if you made a custom build and enabled this plugin.

We would like to thank the [Drupal security team](https://www.drupal.org/drupal-security-team) for bringing this matter to our attention and coordinating the fix and release process!

## CKEditor 4.9.1

Fixed Issues:

* [#1835](https://github.com/ckeditor/ckeditor-dev/issues/1835): Fixed: Integration between [CKFinder](https://ckeditor.com/ckeditor-4/ckfinder/) and the [File Browser](https://ckeditor.com/cke4/addon/filebrowser) plugin does not work.

## CKEditor 4.9

New Features:

* [#932](https://github.com/ckeditor/ckeditor-dev/issues/932): Introduced Easy Image feature for inserting images that are automatically rescaled, optimized, responsive and delivered through a blazing-fast CDN. Three new plugins were added to support it:
    * [Easy Image](https://ckeditor.com/cke4/addon/easyimage),
    * [Cloud Services](https://ckeditor.com/cke4/addon/cloudservices)
    * [Image Base](https://ckeditor.com/cke4/addon/imagebase)
* [#1338](https://github.com/ckeditor/ckeditor-dev/issues/1338): Keystroke labels are displayed for function keys (like F7, F8).
* [#643](https://github.com/ckeditor/ckeditor-dev/issues/643): The [File Browser](https://ckeditor.com/cke4/addon/filebrowser) plugin can now upload files using XHR requests. This allows for setting custom HTTP headers using the [`config.fileTools_requestHeaders`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-fileTools_requestHeaders) configuration option.
* [#1365](https://github.com/ckeditor/ckeditor-dev/issues/1365): The [File Browser](https://ckeditor.com/cke4/addon/filebrowser) plugin uses XHR requests by default.
* [#1399](https://github.com/ckeditor/ckeditor-dev/issues/1399): Added the possibility to set [`CKEDITOR.config.startupFocus`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-startupFocus) as `start` or `end` to specify where the editor focus should be after the initialization.
* [#1441](https://github.com/ckeditor/ckeditor-dev/issues/1441): The [Magic Line](https://ckeditor.com/cke4/addon/magicline) plugin line element can now be identified by the `data-cke-magic-line="1"` attribute.

Fixed Issues:

* [#595](https://github.com/ckeditor/ckeditor-dev/issues/595): Fixed: Pasting does not work on mobile devices.
* [#869](https://github.com/ckeditor/ckeditor-dev/issues/869): Fixed: Empty selection clears cached clipboard data in the editor.
* [#1419](https://github.com/ckeditor/ckeditor-dev/issues/1419): Fixed: The [Widget Selection](https://ckeditor.com/cke4/addon/widgetselection) plugin selects the editor content with the <kbd>Alt+A</kbd> key combination on Windows.
* [#1274](https://github.com/ckeditor/ckeditor-dev/issues/1274): Fixed: [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) does not match a single selected image using the [`contextDefinition.cssSelector`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_balloontoolbar_contextDefinition.html#property-cssSelector) matcher.
* [#1232](https://github.com/ckeditor/ckeditor-dev/issues/1232): Fixed: [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) buttons should be registered as focusable elements.
* [#1342](https://github.com/ckeditor/ckeditor-dev/issues/1342): Fixed: [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) should be re-positioned after the [`change`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-change) event.
* [#1426](https://github.com/ckeditor/ckeditor-dev/issues/1426): [IE8-9] Fixed: Missing [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) background in the [Kama](https://ckeditor.com/cke4/addon/kama) skin. Thanks to [Christian Elmer](https://github.com/keinkurt)!
* [#1470](https://github.com/ckeditor/ckeditor-dev/issues/1470): Fixed: [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) is not visible after drag and drop of a widget it is attached to.
* [#1048](https://github.com/ckeditor/ckeditor-dev/issues/1048): Fixed: [Balloon Panel](https://ckeditor.com/cke4/addon/balloonpanel) is not positioned properly when a margin is added to its non-static parent.
* [#889](https://github.com/ckeditor/ckeditor-dev/issues/889): Fixed: Unclear error message for width and height fields in the [Image](https://ckeditor.com/cke4/addon/image) and [Enhanced Image](https://ckeditor.com/cke4/addon/image2) plugins.
* [#859](https://github.com/ckeditor/ckeditor-dev/issues/859): Fixed: Cannot edit a link after a double-click on the text in the link.
* [#1013](https://github.com/ckeditor/ckeditor-dev/issues/1013): Fixed: [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) does not work correctly with the [`config.forcePasteAsPlainText`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-forcePasteAsPlainText) option.
* [#1356](https://github.com/ckeditor/ckeditor-dev/issues/1356): Fixed: [Border parse function](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_parse.html#method-border) does not allow spaces in the color value.
* [#1010](https://github.com/ckeditor/ckeditor-dev/issues/1010): Fixed: The CSS `border` shorthand property was incorrectly expanded ignoring the `border-color` style.
* [#1535](https://github.com/ckeditor/ckeditor-dev/issues/1535): Fixed: [Widget](https://ckeditor.com/cke4/addon/widget) mouseover border contrast is insufficient.
* [#1516](https://github.com/ckeditor/ckeditor-dev/issues/1516): Fixed: Fake selection allows removing content in read-only mode using the <kbd>Backspace</kbd> and <kbd>Delete</kbd> keys.
* [#1570](https://github.com/ckeditor/ckeditor-dev/issues/1570): Fixed: Fake selection allows cutting content in read-only mode using the <kbd>Ctrl</kbd>/<kbd>Cmd</kbd> + <kbd>X</kbd> keys.
* [#1363](https://github.com/ckeditor/ckeditor-dev/issues/1363): Fixed: Paste notification is unclear and it might confuse users.


API Changes:

* [#1346](https://github.com/ckeditor/ckeditor-dev/issues/1346): [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) [context manager API](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.balloontoolbar.contextManager.html) is now available in the [`pluginDefinition.init()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_pluginDefinition.html#method-init) method of the [requiring](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_pluginDefinition.html#property-requires) plugin.
* [#1530](https://github.com/ckeditor/ckeditor-dev/issues/1530): Added the possibility to use custom icons for [buttons](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_button.html.html).

Other Changes:

* Updated [SCAYT](https://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type) and [WebSpellChecker](https://ckeditor.com/cke4/addon/wsc) (WSC) plugins:
	* SCAYT [`scayt_minWordLength`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#scayt_minWordLength) configuration option now defaults to 3 instead of 4.
	* SCAYT default number of suggested words in the context menu changed to 3.
	* [#90](https://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/90): Fixed: Selection is lost on link creation if SCAYT highlights the word.
	* Fixed: SCAYT crashes when the browser `localStorage` is disabled.
	* [IE11] Fixed: `Unable to get property type of undefined or null reference` error in the browser console when SCAYT is disabled/enabled.
	* [#46](https://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/46): Fixed: Editing is blocked when remote spell checker server is offline.
	* Fixed: User Dictionary cannot be created in WSC due to `You already have the dictionary` error.
	* Fixed: Words with apostrophe `'` on the replacement make the WSC dialog inaccessible.
	* Fixed: SCAYT/WSC causes the `Uncaught TypeError` error in the browser console.
* [#1337](https://github.com/ckeditor/ckeditor-dev/issues/1337): Updated the samples layout with the new CKEditor 4 logo and color scheme.
* [#1591](https://github.com/ckeditor/ckeditor-dev/issues/1591): CKBuilder and language tools are now downloaded over HTTPS. Thanks to [August Detlefsen](https://github.com/augustd)!

## CKEditor 4.8

**Important Notes:**

* [#1249](https://github.com/ckeditor/ckeditor-dev/issues/1249): Enabled the [Upload Image](https://ckeditor.com/cke4/addon/uploadimage) plugin by default in standard and full presets. Also, it will no longer log an error in case of missing [`config.imageUploadUrl`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-imageUploadUrl) property.

New Features:

* [#933](https://github.com/ckeditor/ckeditor-dev/issues/933): Introduced [Balloon Toolbar](https://ckeditor.com/cke4/addon/balloontoolbar) plugin.
* [#662](https://github.com/ckeditor/ckeditor-dev/issues/662): Introduced image inlining for the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#468](https://github.com/ckeditor/ckeditor-dev/issues/468): [Edge] Introduced support for the Clipboard API.
* [#607](https://github.com/ckeditor/ckeditor-dev/issues/607): Manually inserted Hex color is prefixed with a hash character (`#`) if needed. It ensures a valid Hex color value is used when setting the table cell border or background color with the [Color Dialog](https://ckeditor.com/cke4/addon/colordialog) window.
* [#584](https://github.com/ckeditor/ckeditor-dev/issues/584): [Font size and Family](https://ckeditor.com/cke4/addon/font) and [Format](https://ckeditor.com/cke4/addon/format) drop-downs are not toggleable anymore. Default option to reset styles added.
* [#856](https://github.com/ckeditor/ckeditor-dev/issues/856): Introduced the [`CKEDITOR.tools.keystrokeToArray()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-keystrokeToArray) method. It converts a keystroke into its string representation, returning every key name as a separate array element.
* [#1053](https://github.com/ckeditor/ckeditor-dev/issues/1053): Introduced the [`CKEDITOR.tools.object.merge()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-merge) method. It allows to merge two objects, returning the new object with all properties from both objects deeply cloned.
* [#1073](https://github.com/ckeditor/ckeditor-dev/issues/1073): Introduced the [`CKEDITOR.tools.array.every()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_array.html#method-every) method. It invokes a given test function on every array element and returns `true` if all elements pass the test.

Fixed Issues:

* [#796](https://github.com/ckeditor/ckeditor-dev/issues/796): Fixed: A list is pasted from OneNote in the reversed order.
* [#834](https://github.com/ckeditor/ckeditor-dev/issues/834): [IE9-11] Fixed: The editor does not save the selected state of radio buttons inserted by the [Form Elements](https://ckeditor.com/cke4/addon/forms) plugin.
* [#704](https://github.com/ckeditor/ckeditor-dev/issues/704): [Edge] Fixed: Using <kbd>Ctrl</kbd>/<kbd>Cmd</kbd> + <kbd>Z</kbd> breaks widget structure.
* [#591](https://github.com/ckeditor/ckeditor-dev/issues/591): Fixed: A column is inserted in a wrong order inside the table if any cell has a vertical split.
* [#787](https://github.com/ckeditor/ckeditor-dev/issues/787): Fixed: Using Cut inside a nested table does not cut the selected content.
* [#842](https://github.com/ckeditor/ckeditor-dev/issues/842): Fixed: List style not restored when toggling list indent level in the [Indent List](https://ckeditor.com/cke4/addon/indentlist) plugin.
* [#711](https://github.com/ckeditor/ckeditor-dev/issues/711): Fixed: Dragging widgets should only work with the left mouse button.
* [#862](https://github.com/ckeditor/ckeditor-dev/issues/862): Fixed: The "Object Styles" group in the [Styles Combo](https://ckeditor.com/cke4/addon/stylescombo) plugin is visible only if the whole element is selected.
* [#994](https://github.com/ckeditor/ckeditor-dev/pull/994): Fixed: Typo in the [`CKEDITOR.focusManager.focus()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_focusManager.html#method-focus) API documentation. Thanks to [benjy](https://github.com/benjy)!
* [#1014](https://github.com/ckeditor/ckeditor-dev/issues/1014): Fixed: The [Table Tools](https://ckeditor.com/cke4/addon/tabletools) Cell Properties dialog is now [Advanced Content Filter](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_acf.html) aware &mdash; it is not possible to change the cell width or height if corresponding styles are disabled.
* [#877](https://github.com/ckeditor/ckeditor-dev/issues/877): Fixed: A list with custom bullets with exotic characters crashes the editor when [pasted from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#605](https://github.com/ckeditor/ckeditor-dev/issues/605): Fixed: Inline widgets do not preserve trailing spaces.
* [#1008](https://github.com/ckeditor/ckeditor-dev/issues/1008): Fixed: Shorthand Hex colors from the [`config.colorButton_colors`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-colorButton_colors) option are not correctly highlighted in the [Color Button](https://ckeditor.com/cke4/addon/colorbutton) Text Color or Background Color panel.
* [#1094](https://github.com/ckeditor/ckeditor-dev/issues/1094): Fixed: Widget definition [`upcast`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-upcasts) methods are called for every element.
* [#1057](https://github.com/ckeditor/ckeditor-dev/issues/1057): Fixed: The [Notification](https://ckeditor.com/addon/notification) plugin overwrites Web Notifications API due to leakage to the global scope.
* [#1068](https://github.com/ckeditor/ckeditor-dev/issues/1068): Fixed: Upload widget paste listener ignores changes to the [`uploadWidgetDefinition`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.fileTools.uploadWidgetDefinition.html).
* [#921](https://github.com/ckeditor/ckeditor-dev/issues/921): Fixed: [Edge] CKEditor erroneously perceives internal copy and paste as type "external".
* [#1213](https://github.com/ckeditor/ckeditor-dev/issues/1213): Fixed: Multiple images uploaded using [Upload Image](https://ckeditor.com/cke4/addon/uploadimage) plugin are randomly duplicated or mangled.
* [#532](https://github.com/ckeditor/ckeditor-dev/issues/532): Fixed: Removed an outdated user guide link from the [About](https://ckeditor.com/cke4/addon/about) dialog.
* [#1221](https://github.com/ckeditor/ckeditor-dev/issues/1221): Fixed: Invalid CSS loaded by [Balloon Panel](https://ckeditor.com/cke4/addon/balloonpanel) plugin when [`config.skin`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-skin) is loaded using a custom path.
* [#522](https://github.com/ckeditor/ckeditor-dev/issues/522): Fixed: Widget selection is not removed when widget is inside table cell with [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin enabled.
* [#1027](https://github.com/ckeditor/ckeditor-dev/issues/1027): Fixed: Cannot add multiple images to the table with [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin in certain situations.
* [#1069](https://github.com/ckeditor/ckeditor-dev/issues/1069): Fixed: Wrong shape processing by [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#995](https://github.com/ckeditor/ckeditor-dev/issues/995): Fixed: Hyperlinked image gets inserted twice by [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#1287](https://github.com/ckeditor/ckeditor-dev/issues/1287): Fixed: [Widget](https://ckeditor.com/cke4/addon/widget) plugin throws exception if included in editor build but not loaded into editor's instance.

API Changes:

* [#1097](https://github.com/ckeditor/ckeditor-dev/issues/1097): Widget [`upcast`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-upcast) methods are now called in the [widget definition's](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#property-definition) context.
* [#1118](https://github.com/ckeditor/ckeditor-dev/issues/1118): Added the `show` option in the [`balloonPanel.attach()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_balloonPanel.html#method-attach) method, allowing to attach a hidden [Balloon Panel](https://ckeditor.com/cke4/addon/balloonpanel) instance.
* [#1145](https://github.com/ckeditor/ckeditor-dev/issues/1145): Added the [`skipNotifications`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_fileTools_uploadWidgetDefinition.html#property-skipNotifications) option to the [`CKEDITOR.fileTools.uploadWidgetDefinition`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.fileTools.uploadWidgetDefinition.html), allowing to switch off default notifications displayed by upload widgets.

Other Changes:

* [#815](https://github.com/ckeditor/ckeditor-dev/issues/815): Removed Node.js dependency from the CKEditor build script.
* [#1041](https://github.com/ckeditor/ckeditor-dev/pull/1041), [#1131](https://github.com/ckeditor/ckeditor-dev/issues/1131): Updated URLs pointing to [CKSource](https://cksource.com/) and [CKEditor](https://ckeditor.com/) resources after the launch of new websites.

## CKEditor 4.7.3

New Features:

* [#568](https://github.com/ckeditor/ckeditor-dev/issues/568): Added possibility to adjust nested editables' filters using the [`CKEDITOR.filter.disallowedContent`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_filter.html#property-disallowedContent) property.

Fixed Issues:

* [#554](https://github.com/ckeditor/ckeditor-dev/issues/554): Fixed: [`change`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-change) event not fired when typing the first character after pasting into the editor. Thanks to [Daniel Miller](https://github.com/millerdev)!
* [#566](https://github.com/ckeditor/ckeditor-dev/issues/566): Fixed: The CSS `border` shorthand property with zero width (`border: 0px solid #000;`) causes the table to have the border attribute set to 1.
* [#779](https://github.com/ckeditor/ckeditor-dev/issues/779): Fixed: The [Remove Format](https://ckeditor.com/cke4/addon/removeformat) plugin removes elements with language definition inserted by the [Language](https://ckeditor.com/cke4/addon/language) plugin.
* [#423](https://github.com/ckeditor/ckeditor-dev/issues/423): Fixed: The [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin pastes paragraphs into the editor even if [`CKEDITOR.config.enterMode`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enterMode) is set to `CKEDITOR.ENTER_BR`.
* [#719](https://github.com/ckeditor/ckeditor-dev/issues/719): Fixed: Image inserted using the [Enhanced Image](https://ckeditor.com/cke4/addon/image2) plugin can be resized when the editor is in [read-only mode](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html).
* [#577](https://github.com/ckeditor/ckeditor-dev/issues/577): Fixed: The "Delete Columns" command provided by the [Table Tools](https://ckeditor.com/cke4/addon/tabletools) plugin throws an error when trying to delete columns.
* [#867](https://github.com/ckeditor/ckeditor-dev/issues/867): Fixed: Typing into a selected table throws an error.
* [#817](https://github.com/ckeditor/ckeditor-dev/issues/817): Fixed: The [Save](https://ckeditor.com/cke4/addon/save) plugin does not work in [Source Mode](https://ckeditor.com/cke4/addon/sourcearea).

Other Changes:

* Updated the [WebSpellChecker](https://ckeditor.com/cke4/addon/wsc) plugin:
	* [#40](https://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/40): Fixed: IE10 throws an error when spell checking is started.
* [#800](https://github.com/ckeditor/ckeditor-dev/issues/800): Added the [`CKEDITOR.dom.selection.isCollapsed()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_selection.html#method-isCollapsed) method which is a simpler way to check if the selection is collapsed.
* [#830](https://github.com/ckeditor/ckeditor-dev/issues/830): Added an option to define which dialog tab should be shown by default when creating [`CKEDITOR.dialogCommand`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.dialogCommand.html).

## CKEditor 4.7.2

New Features:

* [#455](https://github.com/ckeditor/ckeditor-dev/issues/455): Added [Advanced Content Filter](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_acf.html) integration with the [Justify](https://ckeditor.com/cke4/addon/justify) plugin.

Fixed Issues:

* [#663](https://github.com/ckeditor/ckeditor-dev/issues/663): [Chrome] Fixed: Clicking the scrollbar throws an `Uncaught TypeError: element.is is not a function` error.
* [#694](https://github.com/ckeditor/ckeditor-dev/pull/694): Refactoring in the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin:
  * [#520](https://github.com/ckeditor/ckeditor-dev/issues/520): Fixed: Widgets cannot be properly pasted into a table cell.
  * [#460](https://github.com/ckeditor/ckeditor-dev/issues/460): Fixed: Editor gone after pasting into an editor within a table.
* [#579](https://github.com/ckeditor/ckeditor-dev/issues/579): Fixed: Internal `cke_table-faked-selection-table` class is visible in the Stylesheet Classes field of the [Table Properties](https://ckeditor.com/cke4/addon/table) dialog.
* [#545](https://github.com/ckeditor/ckeditor-dev/issues/545): [Edge] Fixed: Error thrown when pressing the [Select All](https://ckeditor.com/cke4/addon/selectall) button in [Source Mode](https://ckeditor.com/cke4/addon/sourcearea).
* [#582](https://github.com/ckeditor/ckeditor-dev/issues/582): Fixed: Double slash in the path to stylesheet needed by the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin. Thanks to [Marius Dumitru Florea](https://github.com/mflorea)!
* [#491](https://github.com/ckeditor/ckeditor-dev/issues/491): Fixed: Unnecessary dependency on the [Editor Toolbar](https://ckeditor.com/cke4/addon/toolbar) plugin inside the [Notification](https://ckeditor.com/cke4/addon/notification) plugin.
* [#646](https://github.com/ckeditor/ckeditor-dev/issues/646): Fixed: Error thrown into the browser console after opening the [Styles Combo](https://ckeditor.com/cke4/addon/stylescombo) plugin menu in the editor without any selection.
* [#501](https://github.com/ckeditor/ckeditor-dev/issues/501): Fixed: Double click does not open the dialog for modifying anchors inserted via the [Link](https://ckeditor.com/cke4/addon/link) plugin.
* [#9780](https://dev.ckeditor.com/ticket/9780): [IE8-9] Fixed: Clicking inside an empty [read-only](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) editor throws an error.
* [#16820](https://dev.ckeditor.com/ticket/16820): [IE10] Fixed: Clicking below a single horizontal rule throws an error.
* [#426](https://github.com/ckeditor/ckeditor-dev/issues/426): Fixed: The [`range.cloneContents()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-cloneContents) method selects the whole element when the selection starts at the beginning of that element.
* [#644](https://github.com/ckeditor/ckeditor-dev/issues/644): Fixed: The [`range.extractContents()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-extractContents) method returns an incorrect result when multiple nodes are selected.
* [#684](https://github.com/ckeditor/ckeditor-dev/issues/684): Fixed: The [`elementPath.contains()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_elementPath.html#method-contains) method incorrectly excludes the last element instead of root when the `fromTop` parameter is set to `true`.

Other Changes:

* Updated the [SCAYT](https://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type) plugin:
	* [#148](https://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/148): Fixed: SCAYT leaves underlined word after the CKEditor Replace dialog corrects it.
* [#751](https://github.com/ckeditor/ckeditor-dev/issues/751): Added the [`CKEDITOR.dom.nodeList.toArray()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_nodeList.html#method-toArray) method which returns an array representation of a [node list](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.dom.nodeList.html).

## CKEditor 4.7.1

New Features:

* Added a new Mexican Spanish localization. Thanks to [David Alexandro Rodriguez](https://www.transifex.com/user/profile/darsco16/)!
* [#413](https://github.com/ckeditor/ckeditor-dev/issues/413): Added Paste as Plain Text keyboard shortcut to the [Accessibility Help](https://ckeditor.com/cke4/addon/a11yhelp) instructions.

Fixed Issues:

* [#515](https://github.com/ckeditor/ckeditor-dev/issues/515): [Chrome] Fixed: Mouse actions on CKEditor scrollbar throw an exception when the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin is loaded.
* [#493](https://github.com/ckeditor/ckeditor-dev/issues/493): Fixed: Selection started from a nested table causes an error in the browser while scrolling down.
* [#415](https://github.com/ckeditor/ckeditor-dev/issues/415): [Firefox] Fixed: <kbd>Enter</kbd> key breaks the table structure when pressed in a table selection.
* [#457](https://github.com/ckeditor/ckeditor-dev/issues/457): Fixed: Error thrown when deleting content from the editor with no selection.
* [#478](https://github.com/ckeditor/ckeditor-dev/issues/478): [Chrome] Fixed:  Error thrown by the [Enter Key](https://ckeditor.com/cke4/addon/enterkey) plugin when pressing <kbd>Enter</kbd> with no selection.
* [#424](https://github.com/ckeditor/ckeditor-dev/issues/424): Fixed: Error thrown by [Tab Key Handling](https://ckeditor.com/cke4/addon/tab) and [Indent List](https://ckeditor.com/cke4/addon/indentlist) plugins when pressing <kbd>Tab</kbd> with no selection in inline editor.
* [#476](https://github.com/ckeditor/ckeditor-dev/issues/476): Fixed: Anchors inserted with the [Link](https://ckeditor.com/cke4/addon/link) plugin on collapsed selection cannot be edited.
* [#417](https://github.com/ckeditor/ckeditor-dev/issues/417): Fixed: The [Table Resize](https://ckeditor.com/cke4/addon/tableresize) plugin throws an error when used with a table with only header or footer rows.
* [#523](https://github.com/ckeditor/ckeditor-dev/issues/523): Fixed: The [`editor.getCommandKeystroke()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getCommandKeystroke) method does not obtain the correct keystroke.
* [#534](https://github.com/ckeditor/ckeditor-dev/issues/534): [IE] Fixed: [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) does not work in Quirks Mode.
* [#450](https://github.com/ckeditor/ckeditor-dev/issues/450): Fixed: [`CKEDITOR.filter`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.filter.html) incorrectly transforms the `margin` CSS property.

## CKEditor 4.7

**Important Notes:**

* [#13793](https://dev.ckeditor.com/ticket/13793): The [`embed_provider`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-embed_provider) configuration option for the [Media Embed](https://ckeditor.com/cke4/addon/embed) and [Semantic Media Embed](https://ckeditor.com/cke4/addon/embedsemantic) plugins is no longer preset by default.
* The [UI Color](https://ckeditor.com/cke4/addon/uicolor) plugin now uses a custom color picker instead of the `YUI 2.7.0` library which has some known vulnerabilities (it's a security precaution, there was no security issue in CKEditor due to the way it was used).

New Features:

* [#16755](https://dev.ckeditor.com/ticket/16755): Added the [Table Selection](https://ckeditor.com/cke4/addon/tableselection) plugin that lets you select and manipulate an arbitrary rectangular table fragment (a few cells, a row or a column).
* [#16961](https://dev.ckeditor.com/ticket/16961): Added support for pasting from Microsoft Excel.
* [#13381](https://dev.ckeditor.com/ticket/13381): Dynamic code evaluation call in [`CKEDITOR.template`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.template.html) removed. CKEditor can now be used without the `unsafe-eval` Content Security Policy. Thanks to [Caridy Patiño](http://caridy.name)!
* [#16971](https://dev.ckeditor.com/ticket/16971): Added support for color in the `background` property containing also other styles for table cells in the [Table Tools](https://ckeditor.com/cke4/addon/tabletools) plugin.
* [#16847](https://dev.ckeditor.com/ticket/16847): Added support for parsing and inlining any formatting created using the Microsoft Word style system to the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#16818](https://dev.ckeditor.com/ticket/16818): Added table cell height parsing in the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#16850](https://dev.ckeditor.com/ticket/16850): Added a new [`config.enableContextMenu`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enableContextMenu) configuration option for enabling and disabling the [context menu](https://ckeditor.com/cke4/addon/contextmenu).
* [#16937](https://dev.ckeditor.com/ticket/16937): The `command` parameter in [`CKEDITOR.editor.getCommandKeystroke()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getCommandKeystroke) now also accepts a command name as an argument.
* [#17010](https://dev.ckeditor.com/ticket/17010): The [`CKEDITOR.dom.range.shrink()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-shrink) method now allows for skipping bogus `<br>` elements.

Fixed Issues:

* [#16935](https://dev.ckeditor.com/ticket/16935): [Chrome] Fixed: Blurring the editor in [Source Mode](https://ckeditor.com/cke4/addon/sourcearea) throws an error.
* [#16825](https://dev.ckeditor.com/ticket/16825): [Chrome] Fixed: Error thrown when destroying a focused inline editor.
* [#16857](https://dev.ckeditor.com/ticket/16857): Fixed: <kbd>Ctrl+Shift+V</kbd> blocked by [Copy Formatting](https://ckeditor.com/cke4/addon/copyformatting).
* [#16845](https://dev.ckeditor.com/ticket/16845): [IE] Fixed: Cursor jumps to the top of the scrolled editor after focusing it when the [Copy Formatting](https://ckeditor.com/cke4/addon/copyformatting) plugin is enabled.
* [#16786](https://dev.ckeditor.com/ticket/16786): Fixed: Added missing translations for the [Copy Formatting](https://ckeditor.com/cke4/addon/copyformatting) plugin.
* [#14714](https://dev.ckeditor.com/ticket/14714): [WebKit/Blink] Fixed: Exception thrown on refocusing a blurred inline editor.
* [#16913](https://dev.ckeditor.com/ticket/16913): [Firefox, IE] Fixed: [Paste as Plain Text](https://ckeditor.com/cke4/addon/pastetext) keystroke does not work.
* [#16968](https://dev.ckeditor.com/ticket/16968): Fixed: [Safari] [Paste as Plain Text](https://ckeditor.com/cke4/addon/pastetext) is not handled by the editor.
* [#16912](https://dev.ckeditor.com/ticket/16912): Fixed: Exception thrown when a single image is pasted using [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#16821](https://dev.ckeditor.com/ticket/16821): Fixed: Extraneous `<span>` elements with `height` style stacked when [pasting from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#16866](https://dev.ckeditor.com/ticket/16866): [IE, Edge] Fixed: Whitespaces not preserved when [pasting from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#16860](https://dev.ckeditor.com/ticket/16860): Fixed: Paragraphs which only look like lists incorrectly transformed into them when [pasting from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#16817](https://dev.ckeditor.com/ticket/16817): Fixed: When [pasting from Word](https://ckeditor.com/cke4/addon/pastefromword), paragraphs are transformed into lists with some corrupted data.
* [#16833](https://dev.ckeditor.com/ticket/16833): [IE11] Fixed: Malformed list with headers [pasted from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#16826](https://dev.ckeditor.com/ticket/16826): [IE] Fixed: Superfluous paragraphs within lists [pasted from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#12465](https://dev.ckeditor.com/ticket/12465): Fixed: Cannot change the state of checkboxes or radio buttons if the properties dialog was invoked with a double-click.
* [#13062](https://dev.ckeditor.com/ticket/13062): Fixed: Impossible to unlink when the caret is at the edge of the link.
* [#13585](https://dev.ckeditor.com/ticket/13585): Fixed: Error when wrapping two adjacent `<div>` elements with a `<div>`.
* [#16811](https://dev.ckeditor.com/ticket/16811): Fixed: Table alignment is not preserved by the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#16810](https://dev.ckeditor.com/ticket/16810): Fixed: Vertical align in tables is not supported by the [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#11956](https://dev.ckeditor.com/ticket/11956): [Blink, IE] Fixed: [Link](https://ckeditor.com/cke4/addon/link) dialog does not open on a double click on the second word of the link with a background color or other styles.
* [#10472](https://dev.ckeditor.com/ticket/10472): Fixed: Unable to use [Table Resize](https://ckeditor.com/cke4/addon/tableresize) on table header and footer.
* [#14762](https://dev.ckeditor.com/ticket/14762): Fixed: Hovering over an empty table (without rows or cells) throws an error when the [Table Resize](https://ckeditor.com/cke4/addon/tableresize) plugin is active.
* [#16777](https://dev.ckeditor.com/ticket/16777): [Edge] Fixed: The [Clipboard](https://ckeditor.com/cke4/addon/clipboard) plugin does not allow to drop widgets into the editor.
* [#14894](https://dev.ckeditor.com/ticket/14894): [Chrome] Fixed: The editor scrolls to the top after focusing or when a dialog is opened.
* [#14769](https://dev.ckeditor.com/ticket/14769): Fixed: URLs with '-' in host are not detected by the [Auto Link](https://ckeditor.com/cke4/addon/autolink) plugin.
* [#16804](https://dev.ckeditor.com/ticket/16804): Fixed: Focus is not on the first menu item when the user opens a context menu or a drop-down list from the editor toolbar.
* [#14407](https://dev.ckeditor.com/ticket/14407): [IE] Fixed: Non-editable widgets can be edited.
* [#16927](https://dev.ckeditor.com/ticket/16927): Fixed: An error thrown if a bundle containing the [Color Button](https://ckeditor.com/cke4/addon/colorbutton) plugin is run in ES5 strict mode. Thanks to [Igor Rubinovich](https://github.com/IgorRubinovich)!
* [#16920](https://dev.ckeditor.com/ticket/16920): Fixed: Several plugins not using the [Dialog](https://ckeditor.com/cke4/addon/dialog) plugin as a direct dependency.
* [PR#336](https://github.com/ckeditor/ckeditor-dev/pull/336): Fixed: Typo in [`CKEDITOR.getCss()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#method-getCss) API documentation. Thanks to [knusperpixel](https://github.com/knusperpixel)!
* [#17027](https://dev.ckeditor.com/ticket/17027): Fixed: Command event data should be initialized as an empty object.
* Fixed the behavior of HTML parser when parsing `src`/`srcdoc` attributes of the `<iframe>` element in a CKEditor setup with ACF turned off and without the [Iframe Dialog](https://ckeditor.com/cke4/addon/iframe) plugin. The issue was originally reported as a security issue by [Sriramk21](https://twitter.com/sriramk21) from Pegasystems and was later downgraded by the security team into a normal issue due to the requirement of having ACF turned off. Disabling [Advanced Content Filter](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html) is against [security best practices](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_best_practices.html#security), so the problem described above has not been considered a security issue as such.

Other Changes:

* Updated [SCAYT](https://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type) and [WebSpellChecker](https://ckeditor.com/cke4/addon/wsc) plugins:
	* Fixed: DOM Exception after clicking "Remove Language" on a selected word with enabled [Language](https://ckeditor.com/cke4/addon/language) plugin in SCAYT.
* [#16958](https://dev.ckeditor.com/ticket/16958): Switched the default MathJax CDN provider for the [Mathematical Formulas](https://ckeditor.com/cke4/addon/mathjax) plugin from `cdn.mathjax.org` to [cdnjs](https://cdnjs.com/), due to closing of `cdn.mathjax.org` scheduled for April 30, 2017.
* [#16954](https://dev.ckeditor.com/ticket/16954): Removed the paste dialog.
* [#16982](https://dev.ckeditor.com/ticket/16982): Latest Safari now supports enhanced Clipboard API introduced in CKEditor 4.5.0.
* [#17025](https://dev.ckeditor.com/ticket/17025): Updated [Bender.js](https://github.com/benderjs/benderjs) to 0.4.2.

## CKEditor 4.6.2

New Features:

* [#16733](https://dev.ckeditor.com/ticket/16733): Added a new pastel color palette for the [Color Button](https://ckeditor.com/cke4/addon/colorbutton) plugin and a new [`config.colorButton_colorsPerRow`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-colorButton_colorsPerRow) configuration option for setting the number of rows in the color selector.
* [#16752](https://dev.ckeditor.com/ticket/16752): Added a new Azerbaijani localization. Thanks to the [Azerbaijani language team](https://www.transifex.com/ckeditor/teams/11143/az/)!
* [#13818](https://dev.ckeditor.com/ticket/13818): It is now possible to group [Widget](https://ckeditor.com/cke4/addon/widget) [style definitions](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_styles.html#widget-styles), so applying one style disables the other.

Fixed Issues:

* [#13446](https://dev.ckeditor.com/ticket/13446): [Chrome] Fixed: It is possible to type in an unfocused inline editor.
* [#14856](https://dev.ckeditor.com/ticket/14856): Fixed: [Font size and font family](https://ckeditor.com/cke4/addon/font) reset each other when modified at certain positions.
* [#16745](https://dev.ckeditor.com/ticket/16745): [Edge] Fixed: List items are lost when [pasted from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#16682](https://dev.ckeditor.com/ticket/16682): [Edge] Fixed: A list gets [pasted from Word](https://ckeditor.com/cke4/addon/pastefromword) as a set of paragraphs. Added the [`config.pasteFromWord_heuristicsEdgeList`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWord_heuristicsEdgeList) configuration option.
* [#10373](https://dev.ckeditor.com/ticket/10373): Fixed: Context menu items can be dragged into the editor.
* [#16728](https://dev.ckeditor.com/ticket/16728): [IE] Fixed: [Copy Formatting](https://ckeditor.com/cke4/addon/copyformatting) breaks the editor in Quirks Mode.
* [#16795](https://dev.ckeditor.com/ticket/16795): [IE] Fixed: [Copy Formatting](https://ckeditor.com/cke4/addon/copyformatting) breaks the editor in Compatibility Mode.
* [#16675](https://dev.ckeditor.com/ticket/16675): Fixed: Styles applied with [Copy Formatting](https://ckeditor.com/cke4/addon/copyformatting) to a single table cell are applied to the whole table.
* [#16753](https://dev.ckeditor.com/ticket/16753): Fixed: [`element.setSize()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-setSize) sets incorrect editor dimensions if the border width is represented as a fraction of pixels.
* [#16705](https://dev.ckeditor.com/ticket/16705): [Firefox] Fixed: Unable to paste images as Base64 strings when using [Clipboard](https://ckeditor.com/cke4/addon/clipboard).
* [#14869](https://dev.ckeditor.com/ticket/14869): Fixed: JavaScript error is thrown when trying to use [Find](https://ckeditor.com/cke4/addon/find) in a [`<div>`-based editor](https://ckeditor.com/cke4/addon/divarea).

## CKEditor 4.6.1

New Features:

* [#16639](https://dev.ckeditor.com/ticket/16639): The `callback` parameter in the [`CKEDITOR.ajax.post()`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ajax.html#method-post) method became optional.

Fixed Issues:

* [#11064](https://dev.ckeditor.com/ticket/11064): [Blink, WebKit] Fixed: Cannot select all editor content when a widget or a non-editable element is the first or last element of the content. Also fixes this issue in the [Select All](https://ckeditor.com/cke4/addon/selectall) plugin.
* [#14755](https://dev.ckeditor.com/ticket/14755): [Blink, WebKit, IE8] Fixed: Browser hangs when a table is inserted in the place of a selected list with an empty last item.
* [#16624](https://dev.ckeditor.com/ticket/16624): Fixed: Improved the [Color Button](https://ckeditor.com/cke4/addon/colorbutton) plugin which will now normalize the CSS `background` property if it only contains a color value. This fixes missing background colors when using [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#16600](https://dev.ckeditor.com/ticket/16600): [Blink, WebKit] Fixed: Error thrown occasionally by an uninitialized editable for multiple CKEditor instances on the same page.

## CKEditor 4.6

New Features:

* [#14569](https://dev.ckeditor.com/ticket/14569): Added a new, flat, default CKEditor skin called [Moono-Lisa](https://ckeditor.com/cke4/addon/moono-lisa). Refreshed default colors available in the [Color Button](https://ckeditor.com/cke4/addon/colorbutton) plugin ([Text Color and Background Color](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_colorbutton.html) feature).
* [#14707](https://dev.ckeditor.com/ticket/14707): Added a new [Copy Formatting](https://ckeditor.com/cke4/addon/copyformatting) feature to enable easy copying of styles between your document parts.
* Introduced the completely rewritten [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) plugin:
	* Backward incompatibility: The [`config.pasteFromWordRemoveFontStyles`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWordRemoveFontStyles) option now defaults to `false`. This option will be deprecated in the future. Use [Advanced Content Filter](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_acf.html) to replicate the effect of setting it to `true`.
	* Backward incompatibility: The [`config.pasteFromWordNumberedHeadingToList`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWordNumberedHeadingToList) and [`config.pasteFromWordRemoveStyles`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWordRemoveStyles) options were dropped and no longer have any effect on pasted content.
	* Major improvements in preservation of list numbering, styling and indentation (nested lists with multiple levels).
	* Major improvements in document structure parsing that fix plenty of issues with distorted or missing content after paste.
* Added new translation: Occitan. Thanks to [Cédric Valmary](https://totenoc.eu/)!
* [#10015](https://dev.ckeditor.com/ticket/10015): Keyboard shortcuts (relevant to the operating system in use) will now be displayed in tooltips and context menus.
* [#13794](https://dev.ckeditor.com/ticket/13794): The [Upload Image](https://ckeditor.com/cke4/addon/uploadimage) feature now uses `uploaded.width/height` if set.
* [#12541](https://dev.ckeditor.com/ticket/12541): Added the [Upload File](https://ckeditor.com/cke4/addon/uploadfile) plugin that lets you upload a file by drag&amp;dropping it into the editor content.
* [#14449](https://dev.ckeditor.com/ticket/14449): Introduced the [Balloon Panel](https://ckeditor.com/cke4/addon/balloonpanel) plugin that lets you create stylish floating UI elements for the editor.
* [#12077](https://dev.ckeditor.com/ticket/12077): Added support for the HTML5 `download` attribute in link (`<a>`) elements. Selecting the "Force Download" checkbox in the [Link](https://ckeditor.com/cke4/addon/link) dialog will cause the linked file to be downloaded automatically. Thanks to [sbusse](https://github.com/sbusse)!
* [#13518](https://dev.ckeditor.com/ticket/13518): Introduced the [`additionalRequestParameters`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_fileTools_uploadWidgetDefinition.html#property-additionalRequestParameters) property for file uploads to make it possible to send additional information about the uploaded file to the server.
* [#14889](https://dev.ckeditor.com/ticket/14889): Added the [`config.image2_altRequired`](https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-image2_altRequired) option for the [Enhanced Image](https://ckeditor.com/cke4/addon/image2) plugin to allow making alternative text a mandatory field. Thanks to [Andrey Fedoseev](https://github.com/andreyfedoseev)!

Fixed Issues:

* [#9991](https://dev.ckeditor.com/ticket/9991): Fixed: [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) should only normalize input data.
* [#7209](https://dev.ckeditor.com/ticket/7209): Fixed: Lists with 3 levels not [pasted from Word](https://ckeditor.com/cke4/addon/pastefromword) correctly.
* [#14335](https://dev.ckeditor.com/ticket/14335): Fixed: Pasting a numbered list starting with a value different from "1" from Microsoft Word does not work correctly.
* [#14542](https://dev.ckeditor.com/ticket/14542): Fixed: Copying a numbered list from Microsoft Word does not preserve list formatting.
* [#14544](https://dev.ckeditor.com/ticket/14544): Fixed: Copying a nested list from Microsoft Word results in an empty list.
* [#14660](https://dev.ckeditor.com/ticket/14660): Fixed: [Pasting text from  Word](https://ckeditor.com/cke4/addon/pastefromword) breaks the styling in some cases.
* [#14867](https://dev.ckeditor.com/ticket/14867): [Firefox] Fixed: Text gets stripped when [pasting content from Word](https://ckeditor.com/cke4/addon/pastefromword).
* [#2507](https://dev.ckeditor.com/ticket/2507): Fixed: [Paste from Word](https://ckeditor.com/cke4/addon/pastefromword) does not detect pasting a part of a paragraph.
* [#3336](https://dev.ckeditor.com/ticket/3336): Fixed: Extra blank row added on top of the content [pasted from Word