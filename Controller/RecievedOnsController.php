<?php
App::uses('AppController', 'Controller');
/**
 * RecievedOns Controller
 *
 * @property RecievedOn $RecievedOn
 */
class RecievedOnsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RecievedOn->recursive = 0;
		$this->set('recievedOns', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RecievedOn->id = $id;
		if (!$this->RecievedOn->exists()) {
			throw new NotFoundException(__('Invalid recieved on'));
		}
		$this->set('recievedOn', $this->RecievedOn->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecievedOn->create();
			if ($this->RecievedOn->save($this->request->data)) {
				$this->Session->setFlash(__('The recieved on has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recieved on could not be saved. Please, try again.'));
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
		$this->RecievedOn->id = $id;
		if (!$this->RecievedOn->exists()) {
			throw new NotFoundException(__('Invalid recieved on'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecievedOn->save($this->request->data)) {
				$this->Session->setFlash(__('The recieved on has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recieved on could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RecievedOn->read(null, $id);
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
		$this->RecievedOn->id = $id;
		if (!$this->RecievedOn->exists()) {
			throw new NotFoundException(__('Invalid recieved on'));
		}
		if ($this->RecievedOn->delete()) {
			$this->Session->setFlash(__('Recieved on deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recieved on was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
