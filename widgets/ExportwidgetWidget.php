<?php
namespace Craft;

class ExportwidgetWidget extends BaseWidget
{
    // we only want one of these widgets on the dashboard.
    protected $multi = false;

    public function getName()
    {
        return craft()->config->get('widgetTitle', 'exportwidget');
    }

    public function getBodyHtml()
    {
        $sectionId   = craft()->config->get('sectionId', 'exportwidget');
        $entryTypeId = craft()->config->get('entryTypeId', 'exportwidget');

        $fieldLayoutFieldModels = craft()->sections->getEntryTypeById($entryTypeId)->getFieldLayout()->getFields(); //.getEntryTypes()[0].getFieldLayout().getFields()
        $fields                 = array();
        foreach ($fieldLayoutFieldModels as $fieldLayoutFieldModel)
        {
            $fields[] = $fieldLayoutFieldModel->getField();
        }

        return craft()->templates->render('exportwidget/body', array(
            'sectionId'   => $sectionId,
            'entryTypeId' => $entryTypeId,
            'fields'      => $fields,
        ));
    }
}