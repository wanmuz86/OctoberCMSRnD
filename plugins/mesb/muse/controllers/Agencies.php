<?php namespace Mesb\Muse\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Agencies Back-end Controller
 */
class Agencies extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mesb.Muse', 'muse', 'agencies');
    }

    public function create_onSave()
    {
        $inputs = post('Agency');

        // save team
        $agencyModel = new \Mesb\Muse\Models\Agency;
        $agencyModel->name = $inputs['name'];
        $agencyModel->image_url = $inputs['image_url'];
        $agencyModel->save();

        // update users team_id
        \Backend\Models\User::whereIn('id', $inputs['users'])
            ->update(['agency_id' => $agencyModel->id]);

        \Flash::success("Agency saved successfully");

        return $this->makeRedirect('update', $agencyModel);
    }

    public function update_onSave($recordId)
    {
        $inputs = post('Agency');

        // update team
        $agencyModel = \Mesb\Muse\Models\Agency::findOrFail($recordId);
        $agencyModel->name = $inputs['name'];
        $agencyModel->image_url = $inputs['image_url'];
        $agencyModel->save();

        \Backend\Models\User::where('agency_id', $agencyModel->id)
            ->update(['agency_id' => 0]);

        // update users team_id
        \Backend\Models\User::whereIn('id', $inputs['users'])
            ->update(['agency_id' => $agencyModel->id]);

        \Flash::success("Agency updated successfully");
    }

    public function formAfterDelete($model)
    {
        \Backend\Models\User::where('agency_id', $model->id)
            ->update(['agency_id' => 0]);
    }

    public function formExtendFields($form)
    {
        if( $form->getContext() === 'update')
        {
            $agency = $form->model;
            $userField = $form->getField('users');
            $userField->value = $agency->users->lists('id');
        }
    }
}