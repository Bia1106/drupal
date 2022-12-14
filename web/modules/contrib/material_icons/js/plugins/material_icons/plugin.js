/**
 * @file
 * Bootstrap Grid plugin.
 */

(function ($, Drupal, CKEDITOR) {

  "use strict";

  CKEDITOR.plugins.add('material_icons', {
    icons: 'material_icons',
    init: function (editor) {

      // Add the dialog command.
      editor.addCommand('material_icons', {
        modes: { wysiwyg: 1 },
        canUndo: true,
        exec: function (editor) {
          // Fired when saving the dialog.
          var saveCallback = function saveCallback(returnValues) {
            editor.fire('saveSnapshot');

            var selection = editor.getSelection();
            var range = selection.getRanges(1)[0];

            var container = new CKEDITOR.dom.element('i', editor.document);

            if (returnValues.family === 'baseline') {
              container.addClass('material-icons');
            }
            else {
              container.addClass('material-icons-' + returnValues.family);
            }

            // Add other classes.
            if (returnValues.classes !== '') {
              container.addClass(returnValues.classes)
            }
            container.setText(returnValues.icon);

            range.insertNode(container);
            range.select();

            editor.fire('saveSnapshot');
          };

          var dialogSettings = {
            dialogClass: 'material-icons-dialog',
          };

          // Open the entity embed dialog for corresponding EmbedButton.
          Drupal.ckeditor.openDialog(editor, Drupal.url('material_icons/dialog'), {}, saveCallback, dialogSettings);
        }
      });

      // UI Button
      editor.ui.addButton('material_icons', {
        label: 'Insert Material Icons',
        command: 'material_icons',
        icon: this.path + 'icons/material_icons.png'
      });

    }
  });

})(jQuery, Drupal, CKEDITOR);
