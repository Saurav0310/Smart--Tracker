<?php
App::uses('AppController', 'Controller');
/**
 * IntegrationTypes Controller
 *
 * @property IntegrationType $IntegrationType
 */
class IntegrationTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->IntegrationType->recursive = 0;
		$this->set('integrationTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->IntegrationType->id = $id;
		if (!$this->IntegrationType->exists()) {
			throw new NotFoundException(__('Invalid integration type'));
		}
		$this->set('integrationType', $this->IntegrationType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IntegrationType->create();
			if ($this->IntegrationType->save($this->request->data)) {
				$this->Session->setFlash(__('The integration type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The integration type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->IntegrationType->id = $id;
		if (!$this->IntegrationType->exists()) {
			throw new NotFoundException(__('Invalid integration type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IntegrationType->save($this->request->data)) {
				$this->Session->setFlash(__('The integration type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The integration type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->IntegrationType->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->IntegrationType->id = $id;
		if (!$this->IntegrationType->exists()) {
			throw new NotFoundException(__('Invalid integration type'));
		}
		if ($this->IntegrationType->delete()) {
			$this->Session->setFlash(__('Integration type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Integration type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
