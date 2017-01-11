<?php

declare(strict_types = 1);


namespace Application\Controller;

use Zend\Form\Form;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

final class FormController extends AbstractActionController
{
    /**
     * @var Form
     */
    private $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    public function formAction()
    {
        if ($this->getRequest()->isPost()) {
            $data = $this->params()->fromPost();

            $this->form->setData($data);

            if ($this->form->isValid()) {
                var_dump($this->form->getObject());die;
            }
        }

        return new ViewModel([
            'form' => $this->form
        ]);
    }
}
