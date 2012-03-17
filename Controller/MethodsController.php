<?php
App::uses('AppController', 'Controller');
/**
 * Methods Controller
 *
 * @property Method $Method
 */
class MethodsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Method->recursive = 0;
		$this->set('methods', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Method->id = $id;
		if (!$this->Method->exists()) {
			throw new NotFoundException(__('Invalid method'));
		}
		$this->set('method', $this->Method->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Method->create();
			if ($this->Method->save($this->request->data)) {
				$this->Session->setFlash(__('The method has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The method could not be saved. Please, try again.'));
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
		$this->Method->id = $id;
		if (!$this->Method->exists()) {
			throw new NotFoundException(__('Invalid method'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Method->save($this->request->data)) {
				$this->Session->setFlash(__('The method has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The method could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Method->read(null, $id);
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
		$this->Method->id = $id;
		if (!$this->Method->exists()) {
			throw new NotFoundException(__('Invalid method'));
		}
		if ($this->Method->delete()) {
			$this->Session->setFlash(__('Method deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Method was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
