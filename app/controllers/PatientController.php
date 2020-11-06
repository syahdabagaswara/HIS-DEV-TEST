<?php

use Phalcon\Http\Response as Response;

class PatientController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $res = new Response;

        $patient = Patient::find(['order' => 'id DESC']);

        $res->setContent( json_encode( $patient ) );

        return $res;
    }

    public function saveAction() 
    {
        $this->view->disable();

        $res = new Response;

        $create = new Patient();

        $create->assign(array(
            'gender' => $this->request->getPost('gender'),
            'name' => $this->request->getPost('name'),
            'nik' => $this->request->getPost('nik'),
            'no_hp' => $this->request->getPost('no_hp'),
            'address' => $this->request->getPost('address'),
            'nik' => $this->request->getPost('nik'),
            'religion' => $this->request->getPost('religion'),
            'education' => $this->request->getPost('education'),
            'blood' => $this->request->getPost('blood')
        ));
        $action = $create->save();

        if (! $action) {
			$return = array('return' => false, 'message' => 'Error ! while saving data');
		} else {
			$return = array('return' => true);
        }
        
        $res->setContent( json_encode( $return ) );

        return $res;
    }

    public function editAction() 
    {
        $this->view->disable();

        $res = new Response;

        $id = $this->request->getPost('id');

        $patient = Patient::findFirst($id);

        $patient->assign(array(
            'gender' => $this->request->getPost('gender'),
            'name' => $this->request->getPost('name'),
            'nik' => $this->request->getPost('nik'),
            'no_hp' => $this->request->getPost('no_hp'),
            'address' => $this->request->getPost('address'),
            'nik' => $this->request->getPost('nik'),
            'religion' => $this->request->getPost('religion'),
            'education' => $this->request->getPost('education'),
            'blood' => $this->request->getPost('blood')
        ));

        $action = $patient->update();

        if (! $action) {
			$return = array('return' => false, 'message' => 'Error ! while saving data');
		} else {
			$return = array('return' => true);
        }
        
        $res->setContent( json_encode( $return ) );

        return $res;

    }

    public function deleteAction() 
    {
        $this->view->disable();

        $res = new Response;

        $id = $this->request->getPost('id');

        $patient = Patient::findFirst($id);

        $action = $patient->delete();

        if (! $action) {
			$return = array('return' => false, 'message' => 'Error ! while saving data');
		} else {
			$return = array('return' => true);
        }
        
        $res->setContent( json_encode( $return ) );

        return $res;
    }

}