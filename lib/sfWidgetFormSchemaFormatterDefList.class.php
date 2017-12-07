<?php

/**
 * @author cocacola
 * @copyright 2012
 */

class sfWidgetFormSchemaFormatterDefList extends sfWidgetFormSchemaFormatter {
    protected
      $rowFormat                 = '<div class="form-group %row_class%">
                                        %label%
                                        <div class="col-sm-10">
                                            %field%%hidden_fields%
                                            <p class="help-block">%help%%error%</p>
                                        </div>
                                    </div>',
      $helpFormat                = '%help%',
      $errorRowFormat            = '<dt class="error">Errors:</dt><dd>%errors%</dd>',
      $errorListFormatInARow     = '%errors%',
      $errorRowFormatInARow      = '<br/><label class="error">%error%</label>',
      $namedErrorRowFormatInARow = '<li>%name%: %error%</li>',
      $decoratorFormat           = '<dl id="formContainer">%content%</dl>';

    public function __construct(sfWidgetFormSchema $widgetSchema)
    {
        foreach ($widgetSchema->getFields() as $field) {
            if (get_class($field) == 'sfWidgetFormInputText') {
                $field->setAttribute('class', 'form-control ' . $field->getAttribute('class'));
            }
            if (get_class($field) == 'sfWidgetFormDoctrineChoice') {
                $field->setAttribute('class', 'form-control ' . $field->getAttribute('class'));
            }
            if (get_class($field) == 'sfWidgetFormTextarea') {
                $field->setAttribute('class', 'form-control ' . $field->getAttribute('class'));
            }
        }
        parent::__construct($widgetSchema);
    }

    public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
    {
        $row = parent::formatRow(
            $label,
            $field,
            $errors,
            $help,
            $hiddenFields
        );

        return strtr($row, array(
            '%row_class%' => count($errors) ? ' has-error' : '',
        ));
    }
    
    public function generateLabel($name, $attributes = array())
    {
        if (isset($attributes['class'])) {
            $attributes['class'] .= ' control-label';
        } else {
            $attributes['class'] = 'col-sm-2 control-label';
        }
        return parent::generateLabel($name, $attributes);
    }
    
} ?>