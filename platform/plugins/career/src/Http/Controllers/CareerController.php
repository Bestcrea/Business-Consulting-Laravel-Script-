<?php

namespace ArchiElite\Career\Http\Controllers;

use ArchiElite\Career\Forms\CareerForm;
use ArchiElite\Career\Http\Requests\CareerRequest;
use ArchiElite\Career\Models\Career;
use ArchiElite\Career\Tables\CareerTable;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Illuminate\Http\Request;

class CareerController extends BaseController
{
    public function index(CareerTable $table)
    {
        PageTitle::setTitle(trans('plugins/career::career.name'));

        return $table->renderTable();
    }

    public function create()
    {
        PageTitle::setTitle(trans('plugins/career::career.create'));

        return CareerForm::create()->renderForm();
    }

    public function store(CareerRequest $request)
    {
        $form = CareerForm::create();

        $form->setRequest($request)->save();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('careers.index'))
            ->setNextUrl(route('careers.edit', $form->getModel()->getKey()))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    public function edit(Career $career, Request $request)
    {
        PageTitle::setTitle(trans('core/base::forms.edit_item', ['name' => $career->name]));

        return CareerForm::createFromModel($career)->renderForm();
    }

    public function update(Career $career, CareerRequest $request, BaseHttpResponse $response)
    {
        CareerForm::createFromModel($career)->setRequest($request)->save();

        return $response
            ->setPreviousUrl(route('careers.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    public function destroy(Career $career)
    {
        return DeleteResourceAction::make($career);
    }
}
